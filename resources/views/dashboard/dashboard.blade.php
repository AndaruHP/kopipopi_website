@extends('dashboard.layout.main')

@section('container')
    <h1>Hello {{ auth()->user()->name }}</h1>
@endsection
