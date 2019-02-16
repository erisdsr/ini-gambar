  <!-- begin .app -->
  <div class="app">
    <!-- begin .app-wrap -->
    <div class="app-wrap">
        <!-- begin .navbar -->
        <nav class="navbar navbar-default navbar-static-top shadow-2dp">
          <!-- begin .navbar-header -->
          <div class="navbar-header">
            <!-- begin .navbar-header-left with image -->
            <div class="navbar-header-left b-r">
              <!--begin logo-->
              <a class="logo" href="<?= base_url() ?>">
                <span class="logo-xs visible-xs">
                  <img src="<?= base_url('assets/images/logo_xs.png') ?>" alt="logo-xs">
                </span>
                <span class="logo-lg hidden-xs">
                  <img src="<?= base_url('assets/images/logo_lg.png') ?>" alt="logo-lg">
                </span>
              </a>
              <!--end logo-->
            </div>
            <!-- END: .navbar-header-left with image -->
            <nav class="nav navbar-header-nav">

              <a class="visible-xs b-r" href="#" data-side=collapse>
                <i class="fa fa-fw fa-bars"></i>
              </a>

              <a class="hidden-xs b-r" href="#" data-side=mini>
                <i class="fa fa-fw fa-bars"></i>
              </a>

            </nav>

            <ul class="nav navbar-header-nav m-l-a">
              <li class="visible-xs b-l">
                <a href="#top-search" data-toggle="canvas">
                  <i class="fa fa-fw fa-search"></i>
                </a>
              </li>

              <li class="dropdown b-l">
                <a class="dropdown-toggle profile-pic" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <img class="img-circle" src="<?= base_url('assets/images/user.png') ?>" alt="Administrator">
                  <b class="hidden-xs hidden-sm">Eris DSR <span class="caret"></span></b>
                </a>
                <ul class="dropdown-menu animated flipInY pull-right">
                  <li>
                    <a href="<?= base_url('change_password') ?>"><i class="fa fa-fw fa-cog"></i> Ganti Password</a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="<?= base_url('login') ?>"><i class="fa fa-fw fa-sign-out"></i> Keluar</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END: .navbar-header -->
        </nav>
        <!-- END: .navbar -->
      </header>
      <!-- END:  .app-heading -->