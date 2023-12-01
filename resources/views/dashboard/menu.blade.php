@extends('dashboard.layout.main')

@section('container')
<div class="content turun">
    <div class="container boxx pt-3 ">
        <a href="/dashboard/menus/create" class="btn btn-primary">Add Menu</a>
        <h1>All Menus</h1>
        <div class="row custom-background">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <!-- <th scope="col">Image</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $menu->name }}</td>
                        <!-- <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}"
                        style="max-width: 400px;"> -->
                        <td>{{ $menu->category->name }}</td>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-eye"></i></a>
                            <a href="/dashboard/menus/{{ $menu->slug }}/edit" class="badge bg-warning"><i
                            class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/menus/{{ $menu->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
        @endsection
        