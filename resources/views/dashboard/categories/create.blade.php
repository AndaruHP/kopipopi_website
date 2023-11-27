@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>New Category</h2>
        <div class="col-lg-8">
            <form action="/dashboard/categories" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kontak</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus
                        value="{{ old('name') }}">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
