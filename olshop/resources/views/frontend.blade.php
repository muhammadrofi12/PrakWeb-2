@extends('layouts.app')
@section('content')
    <h2 class="text-center">Hallo {{ Auth::user()->name }}</h2>
    <h3 class="text-center">Selamat datang di halaman frontend</h3>
@endsection
