<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title></title>
      <link rel="stylesheet" href="{{ asset('dashboard.css') }}" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo" >
              <img src="{{asset('assets/logo_immo-removebg-preview.png')}}" alt="logo" />
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="{{asset(route('dashboard'))}}">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Dashboard</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-database"></i>
              <span class="nav-item">Registre de Vente</span>
            </a></li>
            <li><a href="{{asset(route('ajout_bien'))}}">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Ajout de Prorpiété</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Ajout d'actualité</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Paramètres
    
            <li><a href="#" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Déconnexion</span>
            </a></li>
          </ul>
        </nav>   
        <section class="main">
          <div class="main-top">
            <h1>DOUMBIA IMMOBILIER</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          @yield('content')
          </section>
        </section>
      </div>
    </body>
    </html>
    </span>