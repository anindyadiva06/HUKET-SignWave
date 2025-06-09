@extends('layouts.main')

@section('title', 'Edit Latihan')

@section('content')
<div class="pagetitle">
    <h1>Edit Latihan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('latihan.index') }}">Latihan</a></li>
            <li class="breadcrumb-item active">Edit Latihan</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Latihan</h5>
                    <!-- General Form Elements -->
                    <form action="{{ route('latihan.update', $pertanyaan->id_pertanyaan) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="gambar" class="form-label">Pertanyaan</label>
                            <input class="form-control mb-3" type="file" id="gambar" name="gambar" onchange="previewImage(event)">
                            @if($pertanyaan->gambar)
                                <div id="image-preview-container">
                                    <img id="preview" src="{{ Storage::url($pertanyaan->gambar) }}" alt="gambar" style="max-width: 100px;">
                                    <div>
                                        <input type="checkbox" id="delete_gambar" name="delete_gambar" value="1">
                                        <label for="delete_gambar">Hapus Gambar</label>
                                    </div>
                                </div>
                            @else
                                <img id="preview" style="display: none; max-width: 100px;">
                            @endif
                            <textarea id="question" name="question" class="form-control mt-3" rows="4" required>{{ $pertanyaan->deskripsi_pertanyaan }}</textarea>
                        </div>
                        <div id="answers-container">
                            @foreach($pertanyaan->jawaban as $key => $jawaban)
                            <div class="row mb-3 answer-row">
                                <label class="col-sm-2 col-form-label">Pilihan {{ $key + 1 }}</label>
                                <div class="col-sm-8">
                                    <input type="text" name="answers[]" class="form-control" value="{{ $jawaban->deskripsi_jawaban }}" required>
                                </div>
                                <div class="col-sm-2">
                                    @if(count($pertanyaan->jawaban) > 2)
                                        <button type="button" class="btn btn-danger remove-answer-btn">Hapus</button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-secondary mb-4" id="add-answer-btn">Tambah Pilihan</button>
                        <div class="mb-4">
                            <label for="correct_option" class="form-label">Jawaban Benar</label>
                            <select id="correct_option" name="correct_option" class="form-select" required>
                                @foreach($pertanyaan->jawaban as $key => $jawaban)
                                <option value="{{ $key + 1 }}" {{ $jawaban->benar ? 'selected' : '' }}>Pilihan {{ $key + 1 }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <a href="{{ route('latihan.index') }}" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let answerCount = {{ count($pertanyaan->jawaban) }};
        const answersContainer = document.getElementById('answers-container');
        const addAnswerBtn = document.getElementById('add-answer-btn');
        const correctOptionSelect = document.getElementById('correct_option');

        addAnswerBtn.addEventListener('click', function () {
            answerCount++;
            const newAnswerRow = document.createElement('div');
            newAnswerRow.classList.add('row', 'mb-3', 'answer-row');

            const newAnswerLabel = document.createElement('label');
            newAnswerLabel.classList.add('col-sm-2', 'col-form-label');
            newAnswerLabel.textContent = `Pilihan ${answerCount}`;

            const newAnswerInputDiv = document.createElement('div');
            newAnswerInputDiv.classList.add('col-sm-8');

            const newAnswerInput = document.createElement('input');
            newAnswerInput.type = 'text';
            newAnswerInput.name = 'answers[]';
            newAnswerInput.classList.add('form-control');
            newAnswerInput.required = true;

            const newRemoveButtonDiv = document.createElement('div');
            newRemoveButtonDiv.classList.add('col-sm-2');

            const newRemoveButton = document.createElement('button');
            newRemoveButton.type = 'button';
            newRemoveButton.classList.add('btn', 'btn-danger', 'remove-answer-btn');
            newRemoveButton.textContent = 'Hapus';

            newRemoveButtonDiv.appendChild(newRemoveButton);
            newAnswerInputDiv.appendChild(newAnswerInput);
            newAnswerRow.appendChild(newAnswerLabel);
            newAnswerRow.appendChild(newAnswerInputDiv);
            newAnswerRow.appendChild(newRemoveButtonDiv);
            answersContainer.appendChild(newAnswerRow);

            const newOption = document.createElement('option');
            newOption.value = answerCount;
            newOption.textContent = `Pilihan ${answerCount}`;
            correctOptionSelect.appendChild(newOption);

            newRemoveButton.addEventListener('click', function () {
                if (answersContainer.querySelectorAll('.answer-row').length > 2) {
                    answersContainer.removeChild(newAnswerRow);
                    correctOptionSelect.removeChild(newOption);
                    updateLabelsAndOptions();
                } else {
                    alert('Minimal harus ada dua pilihan.');
                }
            });
        });

        answersContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-answer-btn')) {
                if (answersContainer.querySelectorAll('.answer-row').length > 2) {
                    const rowToRemove = event.target.closest('.answer-row');
                    answersContainer.removeChild(rowToRemove);
                    updateLabelsAndOptions();
                } else {
                    alert('Minimal harus ada dua pilihan.');
                }
            }
        });

        function updateLabelsAndOptions() {
            const answerRows = answersContainer.querySelectorAll('.answer-row');
            correctOptionSelect.innerHTML = '';
            answerRows.forEach((row, index) => {
                const label = row.querySelector('.col-form-label');
                label.textContent = `Pilihan ${index + 1}`;
                const option = document.createElement('option');
                option.value = index + 1;
                option.textContent = `Pilihan ${index + 1}`;
                correctOptionSelect.appendChild(option);
            });
        }

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
@endsection
