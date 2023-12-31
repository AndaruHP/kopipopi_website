<!-- index.blade.php -->
@extends('dashboard.layout.main')

@section('container')
    <div class="content turun mb-3">
        <div class="container boxx pt-3 ">
            <h1>All Reviews</h1>
            <table class="table custom-background">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Desc</th>
                        <th scope="col">Del</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reviews as $review)
                        <tr>
                            <th scope="row">{{ $review->user->name }}</th>
                            <td>{{ number_format($review->rating, 1) }}</td>
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
