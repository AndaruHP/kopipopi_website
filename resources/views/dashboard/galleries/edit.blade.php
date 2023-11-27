@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>Edit Photo</h2>

        <div class="col-lg-8">
            <form action="/dashboard/galleries/{{ $gallery->slug }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nama Foto</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" required autofocus value="{{ old('title', $gallery->title) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image">Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $gallery->image }}">
                    @if ($gallery->image)
                        <img src="{{ asset('storage/' . $gallery->image) }}"
                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
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
    </div>
@endsection
