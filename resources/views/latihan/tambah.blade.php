@extends('layouts.main')

@section('title', 'Tambah Latihan')

@section('content')
<div class="pagetitle">
    <h1>Latihan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('latihan.index') }}">Latihan</a></li>
            <li class="breadcrumb-item active">Tambah Latihan</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambahkan Latihan</h5>
                    <!-- General Form Elements -->
                    <form action="{{ route('latihan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="gambar" class="form-label">Pertanyaan</label>
                            <input class="form-control" type="file" id="gambar" name="gambar"  onchange="previewImage(event)">
                            <img id="preview" style="max-width: 100px; margin-top: 10px; display: none;">
                            <textarea id="question" name="question" class="form-control" rows="4" style="margin-top: 10px;" required></textarea>
                        </div>
                        <div id="answers-container">
                            <div class="row mb-1 answer-row">
                                <label class="form-label">Jawaban</label>
                            </div>
                            <div class="row mb-1 answer-row">
                                <label class="col-sm-2 col-form-label">Pilihan 1</label>
                                <div class="col-sm-10">
                                    <input type="text" name="answers[]" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-1 answer-row">
                                <label class="col-sm-2 col-form-label">Pilihan 2</label>
                                <div class="col-sm-10">
                                    <input type="text" name="answers[]" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary mb-4" id="add-answer-btn">Tambah Pilihan</button>
                        <div class="mb-4">
                            <label for="correct_option" class="form-label">Jawaban Benar</label>
                            <select id="correct_option" name="correct_option" class="form-select" required>
                                <option value="1">Pilihan 1</option>
                                <option value="2">Pilihan 2</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <a href="{{ route('latihan.index') }}"><button type="button" class="btn btn-danger">Batal</button></a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let answerCount = 2; // Start with 2 as there are already 2 default answers
        const answersContainer = document.getElementById('answers-container');
        const addAnswerBtn = document.getElementById('add-answer-btn');
        const correctOptionSelect = document.getElementById('correct_option');

        addAnswerBtn.addEventListener('click', function () {
            answerCount++;
            const newAnswerRow = document.createElement('div');
            newAnswerRow.classList.add('row', 'mb-1', 'answer-row');

            const newAnswerLabel = document.createElement('label');
            newAnswerLabel.classList.add('col-sm-2', 'col-form-label');
            newAnswerLabel.textContent = `Pilihan ${answerCount}`;

            const newAnswerInputDiv = document.createElement('div');
            newAnswerInputDiv.classList.add('col-sm-10');

            const newAnswerInput = document.createElement('input');
            newAnswerInput.type = 'text';
            newAnswerInput.name = 'answers[]';
            newAnswerInput.classList.add('form-control');
            newAnswerInput.required = true;

            newAnswerInputDiv.appendChild(newAnswerInput);
            newAnswerRow.appendChild(newAnswerLabel);
            newAnswerRow.appendChild(newAnswerInputDiv);
            answersContainer.appendChild(newAnswerRow);

            const newOption = document.createElement('option');
            newOption.value = answerCount;
            newOption.textContent = `Pilihan ${answerCount}`;
            correctOptionSelect.appendChild(newOption);
        });

        window.previewImage = function (event) {
            const preview = document.getElementById('preview');
            preview.style.display = 'block';
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.onload = function () {
                URL.revokeObjectURL(preview.src);
            }
        }
    });
</script>