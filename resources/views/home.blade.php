@extends('layouts.main') {{-- @extends('layouts/main') --}}

@section('container')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1>Halaman {{ $title }}</h1>
                <h5>Nama: {{ $name }}</h5>
            </div>
        </div>
    </div>
@endsection
    
