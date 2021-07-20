@extends('layouts.app')
@section('content')
<div class="agileits-about-top">
  <div class="container">
  <h3 class="heading-agileinfo">Bibliothek Nägel<span></span></h3>
    <div class="agileinfo-top-grids">
      @foreach (array(8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19) as $value)
      <div class="col-sm-4 wthree-top-grid">
        <img src="{{ url('images/lib'.$value.'.jpg') }}" class="img-responsive" alt="" />
      </div>
      @endforeach
      <div class="col-sm-4 wthree-top-grid">
        <img src="{{ url('images/lib1.png') }}" class="img-responsive" alt="" />
      </div>
      <div class="col-sm-4 wthree-top-grid">
        <img src="{{ url('images/lib2.png') }}" class="img-responsive" alt="" />
      </div>
      <div class="col-sm-4 wthree-top-grid">
        <img src="{{ url('images/lib3.png') }}" class="img-responsive" alt="" />
      </div>
      <div class="col-sm-4 wthree-top-grid">
        <img src="{{ url('images/lib4.png') }}" class="img-responsive" alt="" />
      </div>
      <div class="col-sm-4 wthree-top-grid">
        <img src="{{ url('images/lib5.png') }}" class="img-responsive" alt="" />
      </div>
      <div class="col-sm-4 wthree-top-grid">
        <img src="{{ url('images/lib6.png') }}" class="img-responsive" alt="" />
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //about-top -->

<!-- Subscribe -->
{{-- <div class="wthree-subscribef-w3ls">
  <div class="container">
    <h3 class="tittlef-agileits-w3layouts white-clrf">Get All Special Offers!</h3>
    <p class="white-clrf">Sign up for our newsletter and get all the latest tips and tricks to polish your nails at a good rate!</p>
    <div class="footer_w3layouts_gridf_right">
      <form action="#" method="post">
        <input type="email" name="Email" placeholder="Email address..." required="">
        <input type="submit" value="Submit">
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div> --}}
@endsection
@section('css')
    <style>
      .img-responsive {
        max-height: 330px !important;
      }
    </style>
@endsection
