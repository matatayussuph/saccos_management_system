<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UBX-SAMS</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- FontAwesome -->
        <link href="{{ asset('fontawesome/css/all.css') }}" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
      <!-- template default elements follow -->
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
        <div class="body-large" id="body-large">
            <header class="body-header">
                <nav class="nav header-nav">
                  <a href="">
                    <li class="header-li left-li">
                            <img src="{{ url('img/ubx.png') }}" alt="ubx" class="brand-logo">
                    </li>                    
                    <li class="header-li left-li long-li">
                        <h3 class="brand-logo brand-text">
                            SACCOS MANAGEMENT SYSTEM
                        </h3>
                    </li>
                  </a>
                    <li class="links header-li right-li">
                        <a href="#edit" data-toggle="modal" class="header-li-a btn btn-primary btn-sm btn-flat">login</a>
                    </li>
                    <li class="links header-li right-li">
                        <a href="#addnew" data-toggle="modal" class="header-li-a btn btn-primary btn-sm btn-flat">register</a>
                    </li>
                </nav>
            </header>
            <div class="body-main">
                <header class="main-body-header">
                <div class="body-header-wrapper">
                    <a href="" class="ul-a">our services</a>
                    <a href="" class="ul-a">contact us</a>
                    <a href="" class="ul-a">about us</a>
                    <a href="" class="ul-a">customer support</a>
                </div>
                </header>
                <div class="main-body-content-wrapper">
                    <div class="circles-div">
                        <div class="circles first-circle"></div>
                        <div class="circles second-circle"></div>
                        <div class="circles third-circle"></div>
                    </div>
                    <!-- the welcomw message -->
                    <section class="welcome-text">
                    <h2 class="large-text">
                        Hello, Welcome to UBX - SAMS
                        <span class="welcome-span">
                            Let us serve you with Our affordable Saccos Services
                        </span>
                    </h2>
                    </section>

                </div>                
            </div>
        </div>
        <footer class="body-footer page-footer">
  <div class="footer-nav">
  <div class="container clearfix">

    <div class="footer-nav__col footer-nav__col--info">
      <div class="footer-nav__heading">Information</div>
      <ul class="footer-nav__list">
        <li class="footer-nav__item">
          <a href="about.php" class="footer-nav__link">The brand</a>
        </li>
        <li class="footer-nav__item">
          <a href="localstore" class="footer-nav__link">Local stores</a>
        </li>
        <li class="footer-nav__item">
          <a href="services" class="footer-nav__link">Our services</a>
        </li>			  
        <li class="footer-nav__item">
          <a href="terms.php" class="footer-nav__link">Terms &amp; Conditions</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Site map</a>
        </li>
      </ul>
    </div>

    <div class="footer-nav__col footer-nav__col--whybuy">
      <div class="footer-nav__heading">Why buy from us</div>
      <ul class="footer-nav__list">
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Secure shipping</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Testimonials</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Award winning</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Ethical trading</a>
        </li>
      </ul>
    </div>

    <div class="footer-nav__col footer-nav__col--account">
      <div class="footer-nav__heading">Your account</div>
      <ul class="footer-nav__list">
        <li class="footer-nav__item">
          <a href="my_account.php" class="footer-nav__link">Sign in</a>
        </li>
        <li class="footer-nav__item">
          <a href="customer_register.php" class="footer-nav__link">Register</a>
        </li>
        <li class="footer-nav__item">
          <a href="cart" class="footer-nav__link">View cart</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">View lookbook</a>
        </li>
        <li class="footer-nav__item">
          <a href="#" class="footer-nav__link">Track an order</a>
        </li>
        <li class="footer-nav__item">
          <a href="my_account.php?edit_account" class="footer-nav__link">Update information</a>
        </li>
      </ul>
    </div>


    <div class="footer-nav__col footer-nav__col--contacts">
      <div class="footer-nav__heading">Contact details</div>
      <address class="address">
      Head Office: <br>
      Plot 6, Lucy Lameck Street, mikocheni, Dar es salaam, Tanzania.
    </address>
      <div class="phone">
        Telephone:
        <a class="phone__number" href="tel:0764904605">+255 (0) 764 904 605</a>
      </div>
      <div class="email">
        Email:
        <a href="mailto:info@ubx.co.tz" class="email__addr">info@ubx.co.tz</a>
      </div>
    </div>

  </div>
</div>

<div class="banners">
  <div class="ontainer learfix">

    <div class="banner-award">
      <span>Award winner</span><br> UBX-SAMS 2022
    </div>

    <div class="banner-social">
      <a href="#" class="banner-social__link">
      <i class="icon-facebook">facebook</i>
    </a>
      <a href="#" class="banner-social__link">
      <i class="icon-twitter">twitter</i>
    </a>
      <a href="#" class="banner-social__link">
      <i class="icon-instagram">instagram</i>
    </a>
      <a href="#" class="banner-social__link">
      <i class="icon-pinterest-circled">pinterest</i>
    </a>
    <br>    
    <a href="#" class="banner-social__link">
    <img src="{{ url('img/ubx-white.png') }}" alt="ubx" class="brand-logo footer-logo">
    </a>
    </div>

  </div>
</div>

<div class="page-footer__subline">
  <div class="container clearfix">

  <div class="copyright">
    &copy; &trade;
    UBX
  </div>
  
  <div class="developer">
    Dev by :
  </div>
  
  <div class="designby">
    Powered by : UBX
  </div>

  </div>
</footer>
</div>

<!-- the scroll button -->
<div class="scroller fixed-croller">
<button class="back-t-t" id="scrollbutt" title="back to top">
    <i class="fa fa-arrow-up">
        top
    </i>
</button>
</div>

        <!-- the two forms down here -->
        <div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Register New Saccos</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="" action="" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="please enter firstname" required>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="Middlename" class="col-sm-3 control-label">Middlename</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Middlename" name="Middlename" placeholder="please enter middlename" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="please enter lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="please enter email" required>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="Location" class="col-sm-3 control-label">Location</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Location" name="Location" placeholder="please enter location" required>
                    </div>
                </div>       
                
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address" placeholder="please enter address" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact" placeholder="please enter contact" required>
                    </div>
                </div>       
                <div class="form-group">
                    <label for="SaccosName" class="col-sm-3 control-label">Saccos Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="SaccosName" name="SaccosName" placeholder="please enter name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BranchName" class="col-sm-3 control-label">Branch Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="BranchName" name="BranchName" placeholder="please enter branch" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="RegNo" class="col-sm-3 control-label">Registration Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="RegNo" name="RegNo" placeholder="please enter reg no." required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Logo" class="col-sm-3 control-label">Logo (optional)</label>

                    <div class="col-sm-9">
                      <input type="file" id="Logo" name="Logo">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" placeholder="please enter password" required>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="Register"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Login To Saccos</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_edit.php">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="please enter email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" placeholder="please enter password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="please enter firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="please enter lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="saccosId" class="col-sm-3 control-label" required>saccos Identity Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="saccosId" name="saccosId" placeholder="please enter saccos Id no." required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Role" class="col-sm-3 control-label">Role</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="Role" name="Role" placeholder="please enter role" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="Login"><i class="fa fa-check-square-o"></i> Login</button>
              </form>
            </div>
        </div>
    </div>
</div>





        <!-- jquery ajax -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script>
 /*scripts for scrolling to top*/
    function scrolls() {
      $("html, body").animate({
      scrollTop: 0 
    },
    1000);
    //$('#body-main').scrollTop(0);
    }
    $('.scroller').click(function () {
      scrolls();
    });
    /******************************/   
 </script>
    </body>
</html>