@extends('dashboard.layout.main')

@section('container')
    <div class="content turun">
        <div class="container boxx pt-3 ">
            <a href="/dashboard/categories/create" class="btn btn-primary">Add Category</a>
            <a href="/dashboard/categories/subcategories" class="btn btn-primary">Subcategories</a>
            {{-- <a href="/dashboard/subcategories/create" class="btn btn-primary">Add Subcategory</a> --}}
            <h1>All Categories</h1>
            <div class="row custom-background">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Subkategori</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    @foreach ($category->subcategories as $subcategory)
                                        <span class="badge bg-info">{{ $subcategory->name }}</span>
                                    @endforeach
                                </td>

                                <td>
                                    {{-- <a href="" class="badge bg-info"><i class="bi bi-eye"></i></a> --}}
                                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form action="/dashboard/categories/{{ $category->slug }}" method="post"
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
