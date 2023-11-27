@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <h2>Edit Menu</h2>

        <div class="col-lg-8">
            <form action="/dashboard/contact/{{ $contact->id }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kontak</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus
                        value="{{ old('name', $contact->name) }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required autofocus
                        value="{{ old('email', $contact->email) }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telpon</label>
                    <input type="text" class="form-control" id="phone" name="phone" required autofocus
                        value="{{ old('phone', $contact->phone) }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
