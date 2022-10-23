@extends('layouts.auth')

@section('content')

<style>
  .form{
    margin:30px 0px;
    display:flex;
    justify-content: space-between;
  }
  .form .form-input{
    width:49%;
  }
  .form .form-input label{
    display:block;
    background:#fdfdfd;
    border: 1px solid #eee;
    text-align:center;
    padding:15px;
    box-shadow:2px 2px 5px 2px;
    transition:all 200ms ease-in-out;
    border-radius:20px;
  }
  .form .form-input label{
    color: #2371e0;
  }
  .form .form-input label:hover{
    cursor:pointer;
    border:1px solid #2371e0;
  }
  .form .form-input input:checked + label {
    background: #2371e0;
  }

  .form .form-input input:checked + label .title{
    color: #fff;
  }
</style>
<div class="container-scroller">
  <form action="{{route('login_proses')}}" method="POST">
    @csrf
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background:#fff">  
        <div class="row w-100 mx-0">
          <div class="col-6 mx-auto my-auto">
            <h1 class="text-center" style="color: #2371e0;">Select Role</h1>
            <div class="form row w-100 mx-0 mt-3">
              <div class="form-input my-auto">
                  <input type="radio" name="role" id="select_role" value="end-user" style="display:none">
                    <label for="select_role" style="display:block; text-align:center">
                    <img src="{{asset('frontend/img/login/client.png')}}" style="width:100%;height:200px;" alt="logo">
                    <h3 class="title" style="font-size:30px; font-weight:800; margin-top:10px;">Client</h3>
                  </label>
              </div>
              <div class="form-input my-auto mt-3">
                  <input type="radio" name="role" id="select_role2" value="pihak rsj" style="display:none">
                    <label for="select_role2" style="display:block; text-align:center">
                    <img src="{{asset('frontend/img/login/doctor.png')}}" style="width:100%; height:200px;" alt="logo">
                    <h3 class="title" style="font-size:30px; font-weight:800; margin-top:10px;">Pihak RS</h3>
                  </label>
              </div>
              <div class="form-input mx-auto mt-3">
                  <input type="radio" name="role" id="select_role3" value="lsm" style="display:none">
                    <label for="select_role3" style="display:block; text-align:center">
                    <img src="{{asset('frontend/img/login/lsm.png')}}" style="width:100%; height:200px;" alt="logo">
                    <h3 class="title" style="font-size:30px; font-weight:800; margin-top:10px;">Pihak LSM</h3>
                  </label>
              </div>
            </div>   
          </div>
          <div class="col-lg-4 mx-auto my-auto" >
            <div class="auth-form-light shadow-lg text-left py-5 px-4 px-sm-5" style="border-radius:16px;">
              <div class="brand-logo">
                <!-- <img src="/images/logo.svg" alt="logo"> -->
                Logo
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <div class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-google mr-2"></i>Connect using google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{route('register')}}" class="text-primary">Create</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </form>
</div>
@endsection
