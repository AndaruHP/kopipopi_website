@extends('dashboard.layout.main')

@section('container')
    <a href="/dashboard/categories/create" class="btn btn-primary">Add Category</a>
    <h1>All Categories</h1>
    <div class="row">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="" class="badge bg-info"><i class="bi bi-eye"></i></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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
@endsection
