@extends('dashboard.layout.main')

@section('container')
    <div class="content turun mb-3">
        <div class="container boxx pt-3 ">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="/dashboard/banners/create" class="btn btn-primary">Add Banner</a>
            <h1>All Banners</h1>
            <div class="row">
                @foreach ($banners as $banner)
                    <div class="col-lg-3">
                        <div class="card mb-2" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $banner->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $banner->title }}</h5>
                                <a href="/dashboard/banners/{{ $banner->slug }}/edit" class="badge bg-warning"><i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="/dashboard/banners/{{ $banner->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row custom-background">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $banner->title }}</td>
                                <td>
                                    @if ($banner->image)
                                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->name }}"
                                            style="max-width: 400px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="/dashboard/banners/{{ $banner->slug }}/edit" class="badge bg-warning"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/banners/{{ $banner->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0"
                                            onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
@endsection
