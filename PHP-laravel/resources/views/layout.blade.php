<head>
<title>Appname @yield('title')</title>

<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<div class="header">
  <a href="#default" class="logo"><i class="fa fa-heartbeat"></i>My Page</a>
  <div class="header-right">
    <a class="active" href="#home">List of Users</a>
 
  </div>
</div>
<hr>
<br><br>
<body>
    @yield('sidebar')
    @yield('content')
    @yield('title')
</body>
  <!-- Site footer -->
  <br><br>
  <hr>
    <footer class="site-footer">       
      <div class="container">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Laborada Grace - PN STUDENT</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
    </footer>