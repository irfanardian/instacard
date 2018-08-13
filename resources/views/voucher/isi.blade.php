@extends('layouts.app')

@section('content')
   <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('img/intro-carousel/3.jpg')}}" alt=""></div>
                <div class="carousel-container">
                    <div class="carousel-content">
                        <div class="container-fluid">
                        <h2 class="wow title">Voucher</h2>
                            <div class="row">
                                <div class="col-lg-4 wow fadeInUp">
                                    <div class="card bg-transparent">
                                        <a class="btn-lg btn-secondary" href="#">Rp. 10.000</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInUp">
                                    <div class="card bg-transparent">
                                        <a class="btn-lg btn-secondary" href="#">Rp. 20.000</a>
                                    </div>
                                </div><div class="col-lg-4 wow fadeInUp">
                                    <div class="card bg-transparent">
                                        <a class="btn-lg btn-secondary" href="#">Rp. 50.000</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInUp">
                                    <div class="card bg-transparent">
                                        <a class="btn-lg btn-secondary" href="#">Rp. 100.000</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </section><!-- #intro -->
@endsection
