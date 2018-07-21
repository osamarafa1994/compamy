




<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title> <?php if(isset($title) && $title !=null && !empty($title)){echo $title ; }else { echo "نظام ادارة شركات  ";} ?> </title>
    <meta name="description" content="Examples for creative website header animations using Canvas and JavaScript" />
    <meta name="keywords" content="header, canvas, animated, creative, inspiration, javascript" />
    <meta name="author" content="Codrops" />

    <link rel="stylesheet" href="{{ asset('admin_asset/css/bootstrap-arabic-theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_asset/css/bootstrap-arabic.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_asset/css/style.css') }}">



</head>

<body id="page-top" data-spy="scroll" data-target="" class="flexcroll">
    <!-- Content Wrapper -->
    <section id="login-page">
        <div class="login-wrapper">
            <div class="container-center " >
                <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <img src="{{ asset('admin_asset/img/login/arab-happy-saudi-man-displaying-banner-sign-isolated-white-background-44077908.jpg') }}" class="holding-man" width="370">
                    <div class="login-area  " >
                        <div class="panel panel-bd panel-custom">
                            <div class="panel-heading">
                                <div class="view-header">
                                    <div class="header-icon">
                                        <i class="pe-7s-unlock"></i>
                                    </div>
                                    <div class="header-title">
                                        <h3>الدخول</h3>
                                        <small><strong>الرجاء إدخال بيانات تسجيل الدخول.</strong></small>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">

                              <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('البريد الالكتروني') }}</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                          @if ($errors->has('email'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>

                                      <div class="col-md-6">
                                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                          @if ($errors->has('password'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <div class="col-md-6 offset-md-4">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                              <label class="form-check-label" for="remember">
                                                  {{ __('تذكرني') }}
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4">
                                          <button type="submit" class="btn btn-primary">
                                              {{ __('تسجيل') }}
                                          </button>

                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              {{ __('هل نسيت كلمة المرور؟') }}
                                          </a>
                                          <a class="btn btn-link" href="{{ route('register') }}">
                                              {{ __('انشاء حساب جديد') }}
                                          </a>
                                      </div>
                                  </div>
                              </form>

                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('admin_asset/img/login/arab-man.png') }}" class="bottom-man wow bounceInUp" >
                    </div>
                </div>
                <script language="javascript">
                    function autoResizeDiv()
                    {
                        document.getElementById('login-page').style.height = window.innerHeight +'px';
                    }
                    window.onresize = autoResizeDiv;
                    autoResizeDiv();
                </script>

            </section>



            <script type="text/javascript" src="{{ asset('admin_asset/js/jquery-1.10.1.min.js') }}"></script>
            <script src="{{ asset('admin_asset/js/bootstrap-arabic.min.js') }}"></script>
            <script src="{{ asset('admin_asset/js/custom.js') }}"></script>
            <script src="{{ asset('admin_asset/js/owl.carousel.min.js') }}"></script>
        </body>

        </html>
