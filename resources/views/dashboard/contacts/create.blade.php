@extends('dashboard.layout.main')

@section('container')
    <div class="content turun mb-3">
        <div class="container boxx pt-3 ">
            <h2>New Kontak</h2>
            <div class="col-lg-12 custom-background">
                <form action="/dashboard/contact" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kontak</label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus
                            value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required
                            value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor</label>
                        <input type="text" class="form-control" id="phone" name="phone" required
                            value="{{ old('phone') }}" placeholder="629xxxx">
                        <div class="text-muted">Masukkan langsung 628xxxx tanpa spasi</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
