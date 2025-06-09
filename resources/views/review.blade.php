@extends('layouts.app')

@section('content')
<section id="review" class="latihan section-bg py-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2>Review Jawaban</h2>
            <p>Berikut adalah review dari jawaban kuis Anda.</p>
        </div>

        <div class="review-container">
            @foreach($results as $index => $result)
                <div class="card col-md-8 mb-3 card border-{{ $result['is_correct'] ? 'success' : 'danger' }} shadow mb-3">
                    <div class="card-body col-md-8 mb-3">
                        <h5 class="card-title">{{ $index + 1 }}. {{ $result['question'] }}</h5>
                        @if ($result['question_image'])
                            <img src="{{ asset('storage/' . $result['question_image']) }}" class="img-fluid mb-3 border rounded" alt="Question Image" width="150">
                        @endif
                        <div>
                            @foreach ($result['choices'] as $choice)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q{{ $index + 1 }}" value="{{ $choice }}" disabled {{ $choice == $result['user_answer'] ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        {{ $choice }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            @if ($result['is_correct'])
                                <span class="badge bg-success">Jawaban Anda Benar</span>
                            @else
                                <span class="badge bg-danger">Jawaban Anda Salah</span>
                                <p>Jawaban yang benar: {{ $result['correct_answer'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-4">
                <a href="{{ route('latihan.showQuestions') }}" class="btn btn-primary mx-2">Ulangi Kuis</a>
                <a href="{{ url('/') }}" class="btn btn-secondary mx-2">Kembali ke Home</a>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="progress mt-5">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{ ($score / $totalQuestions) * 100 }}%" aria-valuenow="{{ ($score / $totalQuestions) * 100 }}" aria-valuemin="0" aria-valuemax="100">Skor: {{ ($score / $totalQuestions) * 100 }}%</div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const reviewContainer = document.querySelector('.review-container');
        const cards = reviewContainer.querySelectorAll('.card');
        
        cards.forEach((card, index) => {
            card.classList.add('mb-3');
        });
    });
</script>
@endsection
