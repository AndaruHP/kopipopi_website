@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>Edit Menu</h2>

        <div class="col-lg-8">
            <form action="/dashboard/categories/{{ $category->slug }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus
                        value="{{ old('name', $category->name) }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
