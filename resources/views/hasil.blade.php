<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Wave - Latihan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/signwave-user.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor_user/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor_user/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor_user/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor_user/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor_user/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/user/main.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
@include('layout.navbar-user')
<section id="hasil" class="latihan section-bg py-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2>Hasil Kuis</h2>
            <p>Berikut adalah hasil kuis Anda. Terima kasih telah berpartisipasi!</p>
        </div>

        <div class="result-container">
            <!-- Display the quiz results here -->
            <div class="card col-md-8 mx-auto shadow-sm mb-4">
                <div class="card-body text-center">
                    <h2>{{ $score }}</h2>
                    <p class="card-text">Jawaban Benar: <strong>{{ $correctAnswers }}/{{ $totalQuestions }}</strong></p>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('latihan.showQuestions') }}" class="btn btn-secondary mx-2">Ulangi Kuis</a>
                        <button class="btn btn-primary" id="toggleReview">Lihat Review Jawaban</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="progress mt-5">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{ ($score / $totalQuestions) * 100 }}%" aria-valuenow="{{ ($score / $totalQuestions) * 100 }}" aria-valuemin="0" aria-valuemax="100">Skor: {{ ($score / $totalQuestions) * 100 }}%</div>
        </div>
    </div>

    <div id="reviewSection" style="display:none;" class="mt-4">
        <div class="review-container">
        @foreach($results as $index => $result)
                <div class="card col-md-11 mx-auto mb-3 border-{{ $result['is_correct'] ? 'success' : 'danger' }} shadow mb-3">
                    <div class="card-body">
                        <h6 class="card-title">{{ $index + 1 }}. {{ $result['question'] }}</h6>
                        @if ($result['question_image'])
                            <img src="{{ asset('storage/' . $result['question_image']) }}" class="img-fluid mb-3 " alt="Question Image" width="150">
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
                                <p><b>Jawaban yang benar:</b> {{ $result['correct_answer'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center mt-4">
                <a href="{{ route('latihan.showQuestions') }}" class="btn btn-primary mx-2">Ulangi Kuis</a>
                <a href="{{ route('home-user') }}" class="btn btn-secondary mx-2">Kembali ke Home</a>
            </div>
        </div>
    </div>
</section><!-- End Hasil Section -->

<script>
    document.getElementById('toggleReview').addEventListener('click', function() {
        var reviewSection = document.getElementById('reviewSection');
        if (reviewSection.style.display === 'none') {
            reviewSection.style.display = 'block';
        } else {
            reviewSection.style.display = 'none';
        }
    });
</script>
@include('layout.footer-user')
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor_user/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor_user/aos/aos.js"></script>
  <script src="assets/vendor_user/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor_user/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor_user/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor_user/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor_user/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/user.js"></script>
  

</body>

</html>
