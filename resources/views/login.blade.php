@extends('layout')
@section('content')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
         <!-- Login 2 - Bootstrap Brain Component -->
    <div class="container">
      <div class="row justify-content-md-center m-auto">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
          <div class="bg-white p-4 p-md-5 rounded shadow-sm">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Log in</h3>
                </div>
              </div>
            </div>
            <form action="{{url('proses_login')}}" method="POST" id="logForm"
            >
            {{ csrf_field() }}
            @error('login_gagal')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
               
                </div>
                @enderror
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="email" class="form-label">Username <span class="text-danger">*</span></label>
                  <input class="form-control" id="inputEmailAddress"
                  name="username"
                  type="text"
                  placeholder="Masukkan Username" required>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input id="inputPassword"
                  type="password"
                  name="password"
                  placeholder="Masukkan Password" class="form-control" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                 
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary" type="submit">Log in </button>
                  </div>
                </div>
              </div>
            </form>
       
          
          </div>
        </div>
      </div>
    </div>
  
        </main>
    </div>

</div>
@endsection