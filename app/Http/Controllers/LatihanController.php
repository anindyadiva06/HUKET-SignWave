<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use Illuminate\Support\Facades\Storage;

class LatihanController extends Controller
{
    // User Methods
    public function index()
    {
        return view('latihan');
    }

    public function showQuestions()
    {
        $pertanyaans = Pertanyaan::with('jawaban')->inRandomOrder()->take(10)->get();
        
        foreach ($pertanyaans as $pertanyaan) {
            $pertanyaan->jawaban = $pertanyaan->jawaban->shuffle();
        }

        return view('soal', compact('pertanyaans'));
    }

    public function submitQuiz(Request $request)
    {
        $score = 0;
        $totalQuestions = 0;
        $correctAnswers = 0;
        $results = [];
    
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'question') !== false) {
                $totalQuestions++;
                $questionId = str_replace('question', '', $key);
                $question = Pertanyaan::find($questionId);
                $userAnswer = Jawaban::find($value);
                $correctAnswer = $question->jawaban()->where('benar', 1)->first();
                $choices = $question->jawaban->pluck('deskripsi_jawaban')->toArray();
            
                $isCorrect = $userAnswer->benar;
            
                if ($isCorrect) {
                    $score++;
                    $correctAnswers++;
                }
            
                $results[] = [
                    'question' => $question->deskripsi_pertanyaan,
                    'question_image' => $question->gambar,
                    'choices' => $choices,
                    'user_answer' => $userAnswer->deskripsi_jawaban,
                    'correct_answer' => $correctAnswer->deskripsi_jawaban,
                    'is_correct' => $isCorrect
                ];
            }
        }
    
        session([
            'score' => $score,
            'correctAnswers' => $correctAnswers,
            'totalQuestions' => $totalQuestions,
            'results' => $results
        ]);
    
        return redirect()->route('latihan.showResults');
    }
    
    public function showResults()
    {
        $score = session('score');
        $correctAnswers = session('correctAnswers');
        $totalQuestions = session('totalQuestions');
        $results = session('results');

        return view('hasil', compact('score', 'correctAnswers', 'totalQuestions', 'results'));
    }


    public function reviewAnswers()
    {
        $results = session('results');

        return view('review', [
            'results' => $results,
        ]);
    }

    // Admin Methods
    public function adminIndex()
    {
        $pertanyaans = Pertanyaan::with('jawaban')->get();
        return view('latihan.index', compact('pertanyaans'));
    }

    public function create()
    {
        return view('latihan.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'question' => 'required|string',
            'answers' => 'required|array|min:2',
            'answers.*' => 'required|string',
            'correct_option' => 'required|integer|min:1',
        ]);

        $imageName = null;
        if ($request->hasFile('gambar')) {
            $imageName = $request->file('gambar')->store('public/SignWave');
            $imageName = str_replace('public/', '', $imageName);
        }

        $pertanyaan = Pertanyaan::create([
            'gambar' => $imageName,
            'deskripsi_pertanyaan' => $request->question,
        ]);

        foreach ($request->answers as $key => $answer) {
            Jawaban::create([
                'id_pertanyaan' => $pertanyaan->id_pertanyaan,
                'deskripsi_jawaban' => $answer,
                'benar' => $key + 1 == $request->correct_option ? 1 : 0,
            ]);
        }

        return redirect()->route('latihan.index')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'question' => 'required|string',
            'answers' => 'required|array|min:2',
            'answers.*' => 'required|string',
            'correct_option' => 'required|integer|min:1',
            'delete_gambar' => 'nullable|boolean',
        ]);

        $pertanyaan = Pertanyaan::findOrFail($id);

        if ($request->has('delete_gambar') && $request->delete_gambar == 1) {
            if ($pertanyaan->gambar && Storage::exists('public/' . $pertanyaan->gambar)) {
                Storage::delete('public/' . $pertanyaan->gambar);
            }
            $pertanyaan->gambar = null;
        }

        if ($request->hasFile('gambar')) {
            if ($pertanyaan->gambar && Storage::exists('public/' . $pertanyaan->gambar)) {
                Storage::delete('public/' . $pertanyaan->gambar);
            }
            $imageName = $request->file('gambar')->store('public/SignWave');
            $imageName = str_replace('public/', '', $imageName);
            $pertanyaan->gambar = $imageName;
        }

        $pertanyaan->deskripsi_pertanyaan = $request->question;
        $pertanyaan->save();
        $pertanyaan->jawaban()->delete();

        $answers = $request->answers;
        foreach ($answers as $index => $answer) {
            $pertanyaan->jawaban()->create([
                'deskripsi_jawaban' => $answer,
                'benar' => ($index + 1) == $request->correct_option,
            ]);
        }

        return redirect()->route('latihan.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::with('jawaban')->findOrFail($id);
        return view('latihan.edit', compact('pertanyaan'));
    }
    
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->delete();

        return redirect()->route('latihan.index')->with('success', 'Pertanyaan berhasil dihapus');
    }

}
