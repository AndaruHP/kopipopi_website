@extends('dashboard.layout.main')

@section('container')
    <div class="content turun mb-3">
        <div class="container boxx pt-3 ">
            <h2>New Menu</h2>
            <div class="col-lg-12 custom-background">
                <div class="col-lg-6">

                    <form action="/dashboard/menus" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Menu</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" required autofocus value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" required autofocus value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select name="category_id" id="category_id" class="form-select">
                                <option value="" disabled selected>-- Select Category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <div class="text-muted">Pilih pilihan lain untuk men-trigger sub category</div> --}}
                        </div>


                        <div class="mb-3">
                            <label for="subcategory_id" class="form-label">Subkategori</label>
                            <select name="subcategory_id" id="subcategory_id" class="form-select">
                                <option value="">-- Select Subcategory --</option>
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
    <script>
        $(document).ready(function() {
            // Ketika pilihan kategori berubah
            $('#category_id').on('change', function() {
                var categoryId = $(this).val();

                // Lakukan permintaan AJAX untuk mendapatkan subkategori berdasarkan kategori yang dipilih
                $.ajax({
                    url: '/get-subcategories/' + categoryId, // Sesuaikan dengan URL endpoint Anda
                    method: 'GET',
                    success: function(data) {
                        // Hapus semua opsi subkategori sebelum menambahkan yang baru
                        $('#subcategory_id').empty();

                        // Tambahkan opsi subkategori baru
                        $.each(data, function(key, value) {
                            $('#subcategory_id').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
