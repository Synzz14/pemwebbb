@extends('layouts.layout2')

@section('title', 'Blog Home')

@section('content')
<div class="container mt-4">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ asset('img/dik.jpeg') }}"
    class="card-img-top"
    alt="Foto Profile"
    style="width: 100%; height: 400px; object-fit: cover; object-position: center;">

                <div class="card-body">
                    <h5 class="card-title fw-bold">Dika</h5>
                    <p class="card-text">Suka mabar bg</p>
                    <p class="text-muted small mb-0">2301010105</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ asset('img/put.jpeg') }}"
    class="card-img-top"
    alt="Foto Profile"
    style="width: 100%; height: 400px; object-fit: cover; object-position: center;">

                <div class="card-body">
                    <h5 class="card-title fw-bold">Putri</h5>
                    <p class="card-text">cewe red flagggkkkzzz</p>
                    <p class="text-muted small mb-0">2301010111</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
