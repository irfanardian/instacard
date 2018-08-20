@extends('apps.layout')

@section('content')
<section id="portfolio"  class="section-bg" >
    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3 class="section-title">Instacard</h3>
            <p>Dekat, Cepat, Mantap</p>
        </div>
    </section>     
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
                @foreach($room as $data)
                    <li data-filter=".filter-{{ $data -> idroom }}">{{ $data -> namagroup }}</li>
                @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        @foreach($voucher as $data)
          <div id="portfolio-flters" class="col-lg-4 col-md-6 portfolio-item filter-{{ $data -> roomid}} wow fadeInUp">
            <div class="portfolio-wrap">
                <div class="portfolio-info">
                    <h4 class="title">{{ $data -> namavoucher}} ({{ $data -> durasi}} Menit)</h4>
                    <a class="cta-btn" href="">Rp {{ $data -> harga}},-</a>
                    <p class="description">Ruang: {{ $data -> namagroup}}</p>
                    <a href="{{ route('apps.konfirmasi', $data -> kode) }}" class="btn btn-outline-success">Beli</a>
                </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
</section>
@endsection