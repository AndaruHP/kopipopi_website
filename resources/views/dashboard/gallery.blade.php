@extends('dashboard.layout.main')

@section('container')
    <a href="/dashboard/galleries/create" class="btn btn-primary">Add Photo</a>
    <h1>All Photos</h1>
    <div class="row">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gallery->title }}</td>
                        <td>
                            @if ($gallery->image)
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->name }}"
                                    class="img-thumbnail" style="max-width: 400px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="/dashboard/galleries/{{ $gallery->slug }}/edit" class="badge bg-warning"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="/dashboard/galleries/{{ $gallery->slug }}" method="post" class="d-inline">
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
