@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('container')
<div class="text-center">
    <h1>Halaman Utama</h1>
    <h2>{{ Auth::user()->name }}</h2>
    <a style="text-decoration: none;" href="{{ url('/home') }}">Back to Home</a>
</div>
@endsection

