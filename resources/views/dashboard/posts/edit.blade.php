@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>Edit Menu</h2>

        <div class="col-lg-8">
            <form action="/dashboard/menus/{{ $menu->slug }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" required autofocus value="{{ old('name', $menu->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" required autofocus value="{{ old('price', $menu->price) }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $category)
                            @if (old('category_id', $menu->category->name) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image">Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $menu->image }}">
                    @if ($menu->image)
                        <img src="{{ asset('storage/' . $menu->image) }}"
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
                <div class="mb-3">
                    @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <input type="hidden" name="body" id="body" value="{{ old('body', $menu->body) }}">
                    <trix-editor input="body"></trix-editor>
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
    <script>
        document.addEventListener('trix-initialize', function(e) {
            var trixInput = e.target.input;
            var bodyInput = document.getElementById('body');

            trixInput.editor.loadHTML(bodyInput.value);
        });
    </script>
    </div>
@endsection
