  <!-- Main Sidebar Container -->

  <aside class="main-sidebar elevation-4" style="background-color: #6DAFFE;">
      <!-- Brand Logo -->
      <div class="sideba-head" style="background-color: #3ebdc6;">
          <a href="<?= $base_url ?>prwst/index.php?hal=beranda_admin" class="brand-link">
              <img src="<?= $base_url ?>public/assets/dist/img/logojadi.png" alt="AdminLTE Logo" class="brand-image">
              <span class="brand-text text-white"><img src="<?= $base_url ?>public/assets/image/logo/white.png" style="width: 92px; margin: auto;" alt=""></span>
          </a>
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= $base_url ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block text-white">Reporter</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item">
                      <a href="<?= $base_url ?>beranda_reporter" class="nav-link active">
                          <i class="nav-icon fas fa-tv text-white"></i>
                          <p class="text-white">
                              Beranda
                          </p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Buat Naskah
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= $base_url ?>buatNaskahGhi_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Naskah GHI</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $base_url ?>buatNaskahGns_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Naskah GNS</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $base_url ?>buatNaskahHabari_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Naskah Habari</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $base_url ?>buatNaskahSulampa_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Naskah Sulampa</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $base_url ?>buatNaskahDialog_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Naskah Dialog</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $base_url ?>buatNaskahLc_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Naskah Live Cross</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              Data Berita
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= $base_url ?>dataBeritaNaskah_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Naskah</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $base_url ?>dataBeritaRundown_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Rundown</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= $base_url ?>dataBeritaLead_reporter" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Lead</p>
                              </a>
                      </ul>
                  </li>
              </ul>

          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>