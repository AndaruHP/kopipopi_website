@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>New Menu</h2>
        <div class="col-lg-8">
            <form action="/dashboard/menus" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus
                        value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" required autofocus
                        value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" class="form-control" id="image" name="image" required
                        onchange="previewImage()">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="body" id="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
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
    {{-- <script>
        document.addEventListener('trix-initialize', function(e) {
            var trixInput = e.target.input;
            var bodyInput = document.getElementById('body');

            trixInput.editor.loadHTML(bodyInput.value);
        });
    </script> --}}
    <script>
        document.addEventListener("trix-file-accept", event => {
            event.preventDefault()
        })
    </script>
@endsection
