@extends('dashboard.layout.main')

@section('container')
    <div class="content turun">
        <div class="container boxx pt-3 ">
            <h2>New Banner</h2>
            <div class="col-lg-12 custom-background">
                <form action="/dashboard/banners" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Banner</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Banner</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5 ">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" required onchange="previewImage()">
                        <div class="text-muted">Direkomendasikan ukuran foto adalah 1:1</div>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
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
