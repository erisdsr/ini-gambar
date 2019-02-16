<!-- begin .app-container -->
<div class="app-container">
  <!-- begin .app-side -->
  <aside class="app-side">
    <!-- begin .side-content -->
    <div class="side-content">
      <!-- begin user-panel -->
      <div class="user-panel">
        <div class="user-image">
          <a href="#">
            <img class="img-circle" src="<?= base_url('assets/images/user.png') ?>" alt="John Doe">
          </a>
        </div>
        <div class="user-info">
          <h5>Eris DSR</h5>
              <p class="text-turquoise small dropdown-toggle bg-transparent">
                <i class="fa fa-fw fa-circle"></i> Online
              </p>
        </div>
      </div>
      <!-- END: user-panel -->
      
      <!-- begin .side-nav -->
      <nav class="side-nav">
        <!-- BEGIN: nav-content -->
        <ul class="metismenu nav nav-inverse nav-bordered nav-stacked" data-plugin="metismenu">

          <li class="nav-header">MENU ADMINISTRATOR</li>
          <li>
            <a class="<?= $title_page == 'Dashboard'? 'active' : '' ?>" href="<?= base_url() ?>">
              <span class="nav-icon"><i class="fa fa-fw fa-home"></i></span>
              <span class="nav-title">Beranda</span>
            </a>
          </li>

          <li>
            <a class="<?= $title_page == 'Kuis'? 'active' : '' ?>" href="<?= base_url('quiz') ?>">
              <span class="nav-icon"><i class="fa fa-fw fa-puzzle-piece"></i></span>
              <span class="nav-title">Kuis</span>
            </a>
          </li>

          <li>
            <a class="<?= $title_page == 'Kontributor'? 'active' : '' ?>" href="<?= base_url('contributor') ?>">
              <span class="nav-icon"><i class="fa fa-fw fa-user"></i></span>
              <span class="nav-title">Kontributor</span>
            </a>
          </li>

        </ul>
        <!-- END: nav-content -->
      </nav>
      <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
  </aside>
  <!-- END: .app-side -->

  <!-- begin side-collapse-visible bar -->
  <div class="side-visible-line hidden-xs" data-side="collapse">
    <i class="fa fa-caret-left"></i>
  </div>
  <!-- begin side-collapse-visible bar -->