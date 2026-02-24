@extends('layouts.app')

{{-- @section('scripts')
    <script>
        alert('hii')
    </script>
@endsection --}}

@section('content')
    <section>
        <h2>About Us</h2>
        <p>This is a simple HTML and CSS.</p>

        <p>Name: {{ $name }}</p>
        <p>ID: {{ $id }}</p>
    </section>
@endsection
