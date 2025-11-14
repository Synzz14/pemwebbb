@extends('layouts.masterlayout')
@section('title','beranda ')
@section('content')

<!-- caraousel -->
<div class="alert alert-warning" role="alert">
  ini blom jadii
</div>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/d1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/d2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/d3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- caraousel end -->

<!-- card -->@extends('layouts.layout2')
@section('title','Beranda')
@section('content')

<!-- LIST UNIVERSITAS (Dari Database) -->
@foreach($posts as $post)
<div class="mt-4">

    <!-- Gambar Fullwidth -->
    <img src="{{ asset('img/'.$post['img']) }}"
    class="w-100"
    style="object-fit: cover; max-height: 420px;">


    <!-- Judul, Deskripsi, Tombol -->
    <div class="text-center mt-3 mb-5">
        <h5>{{ $post['title'] }}</h5>

        <p style="max-width: 900px; margin:auto;">
            {{ Str::limit($post['content'], 200) }}
        </p>

<a href="{{ route('posts.show', ['id' => $post['id']]) }}" class="btn btn-link">
    Read More →
</a>

    </div>

</div>
@endforeach

@endsection


<div class="container text-center" >
  <div class="row justify-content-center gap-4">
    <div class="card" style="width: 25rem;">
  <img src="{{asset('img/d4.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="{{asset('img/d5.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>
<div class="card" style="width: 25rem;">
  <img src="{{asset('img/d6.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>
  </div>
</div>
 
<!-- card end -->

@endsection