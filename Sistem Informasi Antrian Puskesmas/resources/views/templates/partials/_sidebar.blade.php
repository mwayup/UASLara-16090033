 <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               <ul class="nav side-menu">
                  <li><a href="{{ asset('beranda')}}"><i class="fa fa-home"></i> Beranda </a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Entry Data & Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="{{ asset('poli')}}">Data Poli</a></l>
                      <li><a href="{{ asset('pasien')}}">Data Pasien</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-table"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ asset('lappoli')}}">Lap Data Poli</a></li>
                      <li><a href="{{ asset('lappasien')}}">Lap Data Pasien</a></li>

                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                </div>

            </div>
            <!-- /sidebar menu -->