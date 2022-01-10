<section class="navBar">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      
      <a class="navbar-brand {{(Route::currentRouteName() == 'index') ? 'active nav-color-active' : ''}}" href="{{route('index')}}"><i class="fas fa-home fa nav-color" id="home"></i></a>
   
      <button class="navbar-toggler nav-btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link nav-color {{(Route::currentRouteName() == 'about us') ? 'active nav-color-active' : ''}}" href="{{route('about us')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName() == 'services') ? 'active nav-color-active' : ''}}" href="{{route('services')}}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{(Route::currentRouteName() == 'contact') ? 'active nav-color-active' : ''}}" href="{{route('contact')}}">Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>