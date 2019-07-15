<!DOCTYPE html>
<html lang="en">
  @include('templates.partials._head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Sistem Informasi</span></a>
            </div>

            <div class="clearfix"></div>

           @include('templates.partials._profile')
            <br />

           @include('templates.partials._sidebar')       

            @include('templates.partials._footer-menu')


        @include('templates.partials._top-nav')
        

        <!-- page content -->
        <div class="right_col" role="main">
         @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistem Informasi Puskesmas - by <a href="https://colorlib.com">Megawati Ayu P</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    @include('templates.partials._scripts')
	
  </body>
</html>
