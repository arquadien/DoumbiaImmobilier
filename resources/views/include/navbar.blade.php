<nav>
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fa fa-bars"></i>
    </label>
    <label class="logo">
      <i id="logo"><img
          src="{{asset('assets/logo_immo-removebg-preview.png')}}"
          height="100px"
          alt="logo" /></i>
      <i class="fa fa-braille" aria-hidden="true" id="logo_name"></i>
      DOUMBIA
    </label>
    <ul>
      <li><a href="{{asset(route('index'))}}">Home</a></li>
      <li><a href="{{asset(route('catalogue'))}}">Nos biens</a></li>
      <li><a href="{{ asset(route ('actualite'))}}">Actualité & offres</a></li>
      <li><a href="{{ asset('') }}">Prendre RDV</a></li>
      <li><a href="{{ asset(route('contact'))}}">Contacts</a></li>
    </ul>
  </nav>