@extends('layouts.frontend')

@section('content')

<style>

.card {
  width: 100%;
  height: auto;
  grid-column: span 8;
  margin: 10px 0;
  border-radius: 15px;
  position: relative;
  box-shadow: 0 10px 10px rgba(0,0,0,.1);

}

.head-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.body-card {
  padding: 10px 15px;
}

.body-card h1 {
  margin: 0;  

}

.body-card svg {
  width: 31px;
  position: absolute;
  bottom: 7px;
  right: 20px;
}



</style>

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-4 text-white mb-3 animated slideInDown">Partner RSJ</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-white" href="#">Home</a>
        </li>
        <li class="breadcrumb-item text-primary active" aria-current="page">
          <a href="#">Partner RSJ</a>
        </li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
        <p><span class="text-primary me-2">#</span>Welcome To RUPEN ODGJ</p>
        <h1 class="display-5 mb-4">
        Let's Get to Know RSJ Partners at
          <span class="text-primary">RUPEN ODGJ!</span>
        </h1>
        <p class="mb-4">
          <!-- Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
          stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo
          nonumy clita sit at, sed sit sanctus dolor eos. -->
        </p>
      </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="head-card">
                <img src="{{asset('frontend/img/partner-rsj/rsj-1.jpg')}}" alt="">
                </div>
                <div class="body-card">
                    <h1>RSJ Kota Denpasar</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid. </p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="head-card">
                <img src="{{asset('frontend/img/partner-rsj/rsj-1.jpg')}}" alt="">
                </div>
                <div class="body-card">
                    <h1>RSJ Kota Denpasar</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid. </p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="head-card">
                <img src="{{asset('frontend/img/partner-rsj/rsj-1.jpg')}}" alt="">
                </div>
                <div class="body-card">
                    <h1>RSJ Kota Denpasar</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid. </p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="head-card">
                <img src="{{asset('frontend/img/partner-rsj/rsj-1.jpg')}}" alt="">
                </div>
                <div class="body-card">
                    <h1>RSJ Kota Denpasar</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis dicta fugiat voluptates deleniti libero earum sed aliquid. </p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection