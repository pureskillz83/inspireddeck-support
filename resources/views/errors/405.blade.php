@extends('inspireddeck.layouts.error')

@section('title', ' | Page Not Found')

@section('content')

    <h1 class="text-white text-3xl font-light mb-6 uppercase">Method Not Allowed</h1>

    @include('errors.error-footer')

@endsection

