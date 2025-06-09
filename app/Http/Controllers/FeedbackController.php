<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('kelola-feedback', compact('feedbacks'));
    }

    public function destroy($id_feedback)
    {
        \Log::info('Deleting feedback with ID: ' . $id_feedback);
        $feedback = Feedback::findOrFail($id_feedback);
        $feedback->delete();
        return redirect()->route('kelola-feedback')->with('success', 'Feedback berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'nullable|string|max:255',
            'isi' => 'required|string',
        ]);

        // Simpan data ke database
        Feedback::create([
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        // Redirect kembali ke halaman home dengan hash feedback
        return back()->with('success', 'Feedback berhasil dikirim! Terima kasih.');
    }
}

?>
