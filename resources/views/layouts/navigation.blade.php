  <!--sidebar wrapper -->
  <div class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
          <div>
              <img src="{{ asset('img/brand.png') }}" class="logo-icon" alt="logo icon">
          </div>
          <div>
              <h4 class="logo-text">Sogebox App</h4>
          </div>
          <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
          </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
          <li>
              <a href="{{ route('dashboard') }}">
                  <div class="parent-icon"><i class='bx bx-home-alt'></i>
                  </div>
                  <div class="menu-title">Dashboard</div>
              </a>
          </li>
          <li class="menu-label">Réception</li>
          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cookie'></i>
                  </div>
                  <div class="menu-title">Oppportunités</div>
              </a>
              <ul>
                  <li>
                      <a href="javascript:;" class="has-arrow">
                          <i class='bx bx-radio-circle'></i>
                          Commandes
                      </a>
                      <ul>
                          <li>
                              <a href="{{ route('commandes.index') }}" class="has-arrow">
                                  <i class='bx bx-radio-circle'></i>
                                  Commandes
                              </a>
                          </li>
                          <li>
                              <a href="{{ route('commandes.create') }}" class="has-arrow">
                                  <i class='bx bx-radio-circle'></i>
                                  Prendre une commande
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Rendez-vous</a>
                  </li>
                  <li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Réservations</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Clients</div>
              </a>
              <ul>
                  <li> <a href="{{ route('clients.create') }}"><i class='bx bx-radio-circle'></i>Ajouter un nouveau
                          client</a>
                  </li>
                  <li> <a href="{{ route('clients.index') }}"><i class='bx bx-radio-circle'></i>Liste des clients</a>
                  </li>
                  <li> <a href="{{ route('clients.contact') }}"><i class='bx bx-radio-circle'></i>Contacter un
                          client</a>
                  </li>
              </ul>
          </li>
          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                  </div>
                  <div class="menu-title">Documents</div>
              </a>
              <ul>
                  <li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Devis</a>
                  </li>
                  <li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Rapports</a>
                  </li>
              </ul>
          </li>

          <li class="menu-label">Ressources humaines</li>
          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                  </div>
                  <div class="menu-title">Employés</div>
              </a>
              <ul>
                  <li> <a href="{{ route('employes.create') }}"><i class='bx bx-radio-circle'></i>Ajouter un nouvel
                          employé</a>
                  </li>
                  <li> <a href="{{ route('employes.index') }}"><i class='bx bx-radio-circle'></i>Liste des employés</a>
                  </li>
              </ul>
          </li>
          @can('view users')
              <li>
                  <a href="{{ route('users.index') }}">
                      <div class="parent-icon">
                          <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                  d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                          </svg>

                      </div>
                      <div class="menu-title">
                          Utilisateurs
                      </div>
                  </a>
              </li>
          @endcan
          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                  </div>
                  <div class="menu-title">Organigramme</div>
              </a>
              <ul>
                  <li> <a href="{{ route('departements.index') }}"><i class='bx bx-radio-circle'></i>Départements</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Manager</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Evaluation</a>
                  </li>
              </ul>
          </li>


          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                  </div>
                  <div class="menu-title">Temps de travail</div>
              </a>
              <ul>
                  <li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Présence</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Horaire de travail</a>
                  </li>
              </ul>
          </li>

          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                  </div>
                  <div class="menu-title">Paiement</div>
              </a>
              <ul>
                  <li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Demande</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Paiement salaire</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Paiement prestation</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Fiche de paie</a>
                  </li>
              </ul>
          </li>

          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                  </div>
                  <div class="menu-title">Congés</div>
              </a>
              <ul>
                  <li><a href="form-elements.html"><i class='bx bx-radio-circle'></i>Demande</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Liste congés</a>
                  </li>
              </ul>
          </li>


          <li class="menu-label">Atélier</li>
          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class="bx bx-lock"></i>
                  </div>
                  <div class="menu-title">Fabrication</div>
              </a>
              <ul>
                  <li><a href="form-elements.html"><i class='bx bx-radio-circle'></i>Ordres des commandes</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Ordres de construction</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Plans de production</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Sous-traitants</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="user-profile.html">
                  <div class="parent-icon"><i class="bx bx-user-circle"></i>
                  </div>
                  <div class="menu-title">Rapports</div>
              </a>
              <ul>
                  <li><a href="form-elements.html"><i class='bx bx-radio-circle'></i>Maintien du matériel</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Mouvement des actifs</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="timeline.html">
                  <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                  </div>
                  <div class="menu-title">Document</div>
              </a>
              <ul>
                  <li><a href="form-elements.html"><i class='bx bx-radio-circle'></i>Point</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Stock Report</a>
                  </li>
                  <li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Prévisions</a>
                  </li>
              </ul>
          </li>
          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class="bx bx-error"></i>
                  </div>
                  <div class="menu-title">Entrepôts</div>
              </a>
          </li>
          <li>
              <a href="{{ route('faq') }}">
                  <div class="parent-icon"><i class="bx bx-help-circle"></i>
                  </div>
                  <div class="menu-title">FAQ</div>
              </a>
          </li>
          <li class="menu-label">Comptabilité</li>
          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class="bx bx-line-chart"></i>
                  </div>
                  <div class="menu-title">Charts</div>
              </a>
              <ul>
                  <li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
                  </li>
                  <li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
                  </li>
                  <li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
                  </li>
              </ul>
          </li>
          <li>
              <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><i class="bx bx-map-alt"></i>
                  </div>
                  <div class="menu-title">Maps</div>
              </a>
              <ul>
                  <li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
                  </li>
                  <li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
                  </li>
              </ul>
          </li>
          <li class="menu-label">Others</li>

          <li>
              <a href="javascript:;">
                  <div class="parent-icon"><i class="bx bx-folder"></i>
                  </div>
                  <div class="menu-title">Documentation</div>
              </a>
          </li>
      </ul>
      <!--end navigation-->
  </div>
  <!--end sidebar wrapper -->
  <!--start header -->
  <header>
      <div class="topbar d-flex align-items-center">
          <nav class="navbar navbar-expand gap-3">
              <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
              </div>
              <div class="search-bar flex-grow-1">
                  <div class="position-relative search-bar-box">
                      <input type="text" class="form-control search-control bg-black"
                          placeholder="Que recherchez-vous?">
                      <span class="position-absolute top-50 search-show translate-middle-y"><i
                              class='bx bx-search'></i></span>
                      <span class="position-absolute top-50 search-close translate-middle-y"><i
                              class='bx bx-x'></i></span>
                  </div>
              </div>
              <div class="top-menu ms-auto">
                  <ul class="navbar-nav align-items-center gap-1">
                      <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                          data-bs-target="#SearchModal">
                          <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                          </a>
                      </li>
                      <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;"
                              data-bs-toggle="dropdown"><img src="{{ asset('assets/images/county/03.png') }}"
                                  width="22" alt="">
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/01.png') }}" width="20"
                                          alt=""><span class="ms-2">English</span></a>
                              </li>
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/02.png') }}" width="20"
                                          alt=""><span class="ms-2">Catalan</span></a>
                              </li>
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/03.png') }}" width="20"
                                          alt=""><span class="ms-2">Français</span></a>
                              </li>
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/04.png') }}" width="20"
                                          alt=""><span class="ms-2">Belize</span></a>
                              </li>
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/05.png') }}" width="20"
                                          alt=""><span class="ms-2">Colombia</span></a>
                              </li>
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/06.png') }}" width="20"
                                          alt=""><span class="ms-2">Spanish</span></a>
                              </li>
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/07.png') }}" width="20"
                                          alt=""><span class="ms-2">Georgian</span></a>
                              </li>
                              <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img
                                          src="{{ asset('assets/images/county/08.png') }}" width="20"
                                          alt=""><span class="ms-2">Hindi</span></a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown dropdown-app">
                          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"
                              href="javascript:;"><i class='bx bx-grid-alt'></i></a>
                          <div class="dropdown-menu dropdown-menu-end p-0">
                              <div class="app-container p-2 my-2">
                                  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/slack.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Slack</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/behance.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Behance</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/google-drive.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Dribble</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/outlook.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Outlook</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/github.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">GitHub</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/stack-overflow.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Stack</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/figma.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Stack</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/twitter.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Twitter</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/google-calendar.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Calendar</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/spotify.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Spotify</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/google-photos.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Photos</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/pinterest.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Photos</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/linkedin.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">linkedin</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/dribble.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Dribble</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/youtube.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">YouTube</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/google.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">News</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/envato.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Envato</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a href="javascript:;">
                                              <div class="app-box text-center">
                                                  <div class="app-icon">
                                                      <img src="{{ asset('assets/images/app/safari.png') }}"
                                                          width="30" alt="">
                                                  </div>
                                                  <div class="app-name">
                                                      <p class="mb-0 mt-1">Safari</p>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>

                                  </div><!--end row-->

                              </div>
                          </div>
                      </li>

                      <li class="nav-item dropdown dropdown-large">
                          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                              data-bs-toggle="dropdown"><span class="alert-count">7</span>
                              <i class='bx bx-bell'></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                              <a href="javascript:;">
                                  <div class="msg-header">
                                      <p class="msg-header-title">Notifications</p>
                                      <p class="msg-header-badge">8 New</p>
                                  </div>
                              </a>
                              <div class="header-notifications-list">
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="user-online">
                                              <img src="{{ asset('assets/images/avatars/avatar-1.png') }}"
                                                  class="msg-avatar" alt="user avatar">
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5
                                                      sec
                                                      ago</span></h6>
                                              <p class="msg-info">The standard chunk of lorem</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="notify bg-light-danger text-danger">dc
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                                                      ago</span></h6>
                                              <p class="msg-info">You have recived new orders</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="user-online">
                                              <img src="{{ asset('assets/images/avatars/avatar-2.png') }}"
                                                  class="msg-avatar" alt="user avatar">
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
                                                      sec ago</span></h6>
                                              <p class="msg-info">Many desktop publishing packages</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="notify bg-light-success text-success">
                                              <img src="{{ asset('assets/images/app/outlook.png') }}" width="25"
                                                  alt="user avatar">
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">Account Created<span class="msg-time float-end">28
                                                      min
                                                      ago</span></h6>
                                              <p class="msg-info">Successfully created new email</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="notify bg-light-info text-info">Ss
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">New Product Approved <span
                                                      class="msg-time float-end">2 hrs ago</span></h6>
                                              <p class="msg-info">Your new product has approved</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="user-online">
                                              <img src="{{ asset('assets/images/avatars/avatar-4.png') }}"
                                                  class="msg-avatar" alt="user avatar">
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">Katherine Pechon <span
                                                      class="msg-time float-end">15
                                                      min ago</span></h6>
                                              <p class="msg-info">Making this the first true generator</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="notify bg-light-success text-success"><i
                                                  class='bx bx-check-square'></i>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">Your item is shipped <span
                                                      class="msg-time float-end">5 hrs
                                                      ago</span></h6>
                                              <p class="msg-info">Successfully shipped your item</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="notify bg-light-primary">
                                              <img src="{{ asset('assets/images/app/github.png') }}" width="25"
                                                  alt="user avatar">
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1
                                                      day
                                                      ago</span></h6>
                                              <p class="msg-info">24 new authors joined last week</p>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center">
                                          <div class="user-online">
                                              <img src="{{ asset('assets/images/avatars/avatar-8.png') }}"
                                                  class="msg-avatar" alt="user avatar">
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6
                                                      hrs
                                                      ago</span></h6>
                                              <p class="msg-info">It was popularised in the 1960s</p>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <a href="javascript:;">
                                  <div class="text-center msg-footer">
                                      <button class="btn btn-light w-100">View All Notifications</button>
                                  </div>
                              </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown dropdown-large">
                          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                              role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                  class="alert-count">8</span>
                              <i class='bx bx-shopping-bag'></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                              <a href="javascript:;">
                                  <div class="msg-header">
                                      <p class="msg-header-title">My Cart</p>
                                      <p class="msg-header-badge">10 Items</p>
                                  </div>
                              </a>
                              <div class="header-message-list">
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/11.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/02.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/03.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/04.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/05.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/06.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/07.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/08.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item" href="javascript:;">
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="position-relative">
                                              <div class="cart-product rounded-circle bg-light">
                                                  <img src="{{ asset('assets/images/products/09.png') }}"
                                                      class="" alt="product image">
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                              <p class="cart-product-price mb-0">1 X $29.00</p>
                                          </div>
                                          <div class="">
                                              <p class="cart-price mb-0">$250</p>
                                          </div>
                                          <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <a href="javascript:;">
                                  <div class="text-center msg-footer">
                                      <div class="d-flex align-items-center justify-content-between mb-3">
                                          <h5 class="mb-0">Total</h5>
                                          <h5 class="mb-0 ms-auto">$489.00</h5>
                                      </div>
                                      <button class="btn btn-light w-100">Checkout</button>
                                  </div>
                              </a>
                          </div>
                      </li>
                  </ul>
              </div>
              <div class="user-box dropdown px-3">
                  <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                      href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img class="w-8 h-8 rounded-full user-img" src="{{ asset('img/profil.jpeg') }}"
                          alt="user avatar">
                      <div class="user-info">
                          <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                          <p class="designattion mb-0">{{ Auth::user()->email }}</p>
                      </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                  class="bx bx-user fs-5"></i><span>Profile</span></a>
                      </li>
                      <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                  class="bx bx-cog fs-5"></i><span>Paramètres</span></a>
                      </li>
                      <li>
                          <div class="dropdown-divider mb-0"></div>
                      </li>
                      <li>
                          <form action="{{ route('logout') }}" method="post">
                              @csrf
                              <a class="dropdown-item d-flex align-items-center" href="javascript:;"
                                  onclick="event.preventDefault(); this.closest('form').submit();">
                                  <i class="bx bx-log-out-circle"></i><span>Se déconnecter</span>
                              </a>
                          </form>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </header>
  <!--end header -->
