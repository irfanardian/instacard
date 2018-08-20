@extends('apps.layout')

@section('content')
<section id="call-to-action" class="wow fadeIn">
    <div class="container text-center">
      <h3 class="section-title">Instacard</h3>
      <p>Dekat, Cepat, Mantap</p>
    </div>
</section>

<section id="portfolio"  class="section-bg" >
      <div class="container">
        <div class="row portfolio-container">
        @foreach($cabang as $data)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/app1.jpg') }}" class="img-thumbnail" alt="">
                <a href="{{ asset('img/portfolio/app1.jpg ') }}" data-lightbox="portfolio" data-title="{{ $data -> tagid }}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ route('apps.name', $data -> tagid)}}">{{ $data -> tagname }}</a></h4>
                <p>Cabang</p>
              </div>
            </div>
          </div>
        @endforeach
        </div>
    </div>
</section><!-- #portfolio -->

@endsection