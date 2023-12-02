@extends('dashboard.layout.main')

@section('container')
    <div class="content turun">
        <div class="container boxx pt-3 ">
            <h2>Edit Menu</h2>

            <div class="col-lg-12 custom-background">
                <form action="/dashboard/categories/subcategories/{{ $subcategory->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select name="category_id" id="category_id" class="form-select">
                            @foreach ($categories as $category)
                                @if (old('category_id', $category->name) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Subkategori</label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus
                            value="{{ old('name', $subcategory->name) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
