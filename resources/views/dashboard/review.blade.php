<!-- index.blade.php -->
@extends('dashboard.layout.main')

@section('container')
    <h1>All Reviews</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Rating</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <th scope="row">{{ $review->user->name }}</th>
                    <td>{{ $review->rating }}</td>
                    <td>{!! $review->description !!}</td>
                    <td>
                        <form action="/dashboard/review/{{ $review->id }}" method="post" class="d-inline">
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
@endsection
