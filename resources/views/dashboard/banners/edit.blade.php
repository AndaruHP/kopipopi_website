@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>Edit Banner</h2>

        <div class="col-lg-8">
            <form action="/dashboard/banners/{{ $banner->slug }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="title" name="title" required autofocus
                        value="{{ old('title', $banner->title) }}">
                </div>
                <div class="mb-3">
                    <label for="image">Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $banner->image }}">
                    @if ($banner->image)
                        <img src="{{ asset('storage/' . $banner->image) }}"
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
@endsection
