@extends('dashboard.layout.main')

@section('container')
    <div class="content turun mb-3">
        <div class="container boxx pt-3 ">
            <a href="/dashboard/categories/subcategories/create" class="btn btn-primary">Add Subcategory</a>
            <h1>All Subcategories</h1>
            <div class="row custom-background">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $subcategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subcategory->name }}</td>
                                <td>
                                    <span class="badge bg-info">{{ $subcategory->category->name }}</span>
                                </td>
                                <td>
                                    {{-- <a href="" class="badge bg-info"><i class="bi bi-eye"></i></a> --}}
                                    <a href="/dashboard/categories/subcategories/{{ $subcategory->id }}/edit"
                                        class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/categories/subcategories/{{ $subcategory->id }}" method="post"
                                        class="d-inline">
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
            </div>
        </div>
    </div>
@endsection
