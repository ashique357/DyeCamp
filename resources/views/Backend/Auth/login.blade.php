<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="{{env('PUBLIC_PATH')}}/img/apple-icon.png">
      <title>
         DyeCamp - Login
      </title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link href="{{env('PUBLIC_PATH')}}/backend/css/nucleo-icons.css" rel="stylesheet" />
      <link href="{{env('PUBLIC_PATH')}}/backend/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
      <link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/backend/css/demo.css">
   </head> 
   <body class="" >
      <div class="wrapper d-flex justify-content-center">
         <div class="main-panel">
            <div class="content" id="app">
               <div class="row">
                  <div class="col-md-6 offset-md-2">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="title">Login</h5>
                        </div>
                        <div class="text-center">
                          {!! Session::has('message') ? Session::get('message') : '' !!}
                      </div>
                        <form method="post" action="{{route('admin.login.submit')}}">
                            {{@csrf_field()}}
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-10 pr-md-1">
                                    <div class="form-group row">
                                       <p class="error">
                                       </p>
                                    </div>
                                    <div class="form-group">
                                       <label>Email</label>
                                       <input type="email" class="form-control" name="email" value="{{Request::old('email')}}" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-10 pr-md-1">
                                    <div class="form-group">
                                       <label>Password</label>
                                       <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                                       <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
                                    </div>
                                 </div>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="remember">
                                  <span class="form-check-sign">
                                    <span class="check">Remember Me</span>
                                  </span>
                                </label>
                              </div>
                           </div>
                           <div class="card-footer">
                              <button type="submit" class="btn btn-fill btn-primary">Save</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script> window.baseUrl = '{{url('/')}}';</script>
      <script> window.storageUrl = '{{env('STORAGE_URL')}}';</script>
      <script> window.publicUrl = '{{env('PUBLIC_PATH')}}';</script>
      <script> window.token = '{{@csrf_token()}}';</script>
      <script> window.id = '';</script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/core/jquery.min.js"></script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/core/popper.min.js"></script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/core/bootstrap.min.js"></script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/plugins/chartjs.min.js"></script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/plugins/bootstrap-notify.js"></script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/black-dashboard.min.js?v=1.0.0"></script>
      <script src="{{env('PUBLIC_PATH')}}/backend/js/demo.js"></script>
   </body>
</html>


