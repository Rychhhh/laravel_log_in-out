@extends('layouts.main')


@section('title')
    Home
@endsection

@section('container')
    {{-- Text tengah Home --}}
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        {{-- Text content --}}
        <h1>Welcome To My Website</h1>
       <button type="submit" class="btn btn-info mt-3 mb-3" ><a style="color: darkslategrey" href="{{ url('/dashboard') }}">Go to dashboard</a></button>
       
       {{-- Logout --}}
        <div class="logout">
           <form action="{{ route('logout') }}" method="POST">
            @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

    </div>
@endsection

