@extends('apps.layout')

@section('content')
<section id="about">
      <div class="container">

        <div class="row about-cols">

        <div class="col-md-6 wow fadeInUp">
        <div class="about-col">
            <div class="img">
            <img src="{{ asset('img/about-mission.jpg') }}" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Top Up</a></h2>
            <p></p>
        </div>
        </div>

        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="about-col">
            <div class="img">
            <img src="{{ asset('img/about-plan.jpg') }}" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            </div>
            <h2 class="title"><a href="{{ route('apps.room', $id)}}">Voucher</a></h2>
            <p></p>
        </div>
        </div>

        </div>
    </div>
</section>
@endsection