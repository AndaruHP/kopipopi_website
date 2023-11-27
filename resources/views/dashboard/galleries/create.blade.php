@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>New Photo</h2>
        <div class="col-lg-8">
            <form action="/dashboard/galleries" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nama Foto</label>
                    <input type="text" class="form-control" id="title" name="title" required autofocus
                        value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" class="form-control" id="image" name="image" required
                        onchange="previewImage()">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
