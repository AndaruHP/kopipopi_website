@extends('dashboard.layout.main')

@section('container')
    <div class="content turun mb-3">
        <div class="container boxx pt-3 ">
            <a href="/dashboard/menus/create" class="btn btn-primary">Add Menu</a>
            <h1>All Menus</h1>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-12">
                        <h2 class="badge bg-info" style="font-size: 24px">{{ $category->name }}</h2>
                    </div>
                    @foreach ($category->menus as $menu)
                        <div class="col-lg-3">
                            <div class="card mb-2" style="width: 18rem;">
                                <img src="{{ asset('storage/' . $menu->image) }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $menu->name }}</h5>
                                    <div>
                                        {{-- <span class="badge bg-info">{{ $menu->category->name }}</span> --}}
                                        <span class="badge bg-success">{{ $menu->subcategory->name }}</span>
                                    </div>
                                    <a href="/dashboard/menus/{{ $menu->slug }}/edit" class="badge bg-warning"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/menus/{{ $menu->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0"
                                            onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
            {{-- <div class="row custom-background">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Subcategory</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->category->name }}</td>
                                <td>{{ $menu->subcategory->name }}</td>
                                <td>
                                    <a href="/dashboard/menus/{{ $menu->slug }}/edit" class="badge bg-warning"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/menus/{{ $menu->slug }}" method="post" class="d-inline">
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
