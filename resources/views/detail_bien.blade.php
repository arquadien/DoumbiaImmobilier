@extends('include.app')
@section('content')
<section>
  
  <button class="" style="margin: 80px 24px 24px 24px; padding:4px 8px;">
  @auth()
    <a href="{{asset(route('dashboard'))}}">Retour</a>
  @endauth
  </button>
  
  <div class="presentation_bien">
    <article class="img" style="width: 64%; ">
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          @foreach($albumPaths as $index => $albumPath)
          <div class="carousel-item @if($index === 0) active @endif">
            <img src="{{ asset('storage/' . $albumPath) }}" style="height : 650px" class="d-block w-100" alt="Photo {{ $index + 1 }} de {{ $propriete->titre ?? 'la propriété' }}" />
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
    </article>
    <article class="info_propriete">
      <input value="{{$propriete->titre}}" disabled />
      <input value="Surface : {{$propriete->surface}} m²" disabled />
      <input value="Prix : {{$propriete->prix}} F" disabled />
      <input value="Piece : {{$propriete->piece}}" disabled />
      <input value="Chambre: {{$propriete->chambre}}" disabled />
      <input value="Ville: {{$propriete->ville}}" disabled />
      <input value="Etage : aucun" disabled />
      <input value="Parking" disabled />
      <input value="Garage" disabled />
    </article>
    <div class="description">
      <h2>Description :</h2>
      <p>{{$propriete->description}}</p>
    </div>
  </div>
  <div class="form_visite">
    <div class="container pcontact">
      <div class="row">
        <div class="col-md-6">
          <div class="contacts">
            <h4 class="p-3">Vous êtes interessé ?, contactez-nous</h4>
            <p class="mt-3">
              <i class="fa-solid fa-phone me-3"> </i> 0707070707
            </p>
            <p>
              <i class="fa-solid fa-location-dot me-3"> </i> cocody plateau
              saint jean
            </p>
          </div>
        </div>

        <div class="col-md-6 form">
          <div>
            <form action="">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" name="nom" placeholder="Nom" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="prenom" placeholder="Prénoms" />
                </div>
                <div class="form-group col-md-6">
                  <input type="tel" name="numero" placeholder="Numéro" />
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    name="mail"
                    placeholder="Address Email" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="commune" placeholder="Commune" />
                </div>

                <div class="form-group col-md-6">
                  <input type="text" name="objet" placeholder="Objet" />
                </div>
                <div class="form-group col-md-12">
                  <textarea
                    name="message"
                    id=""
                    placeholder="Message"></textarea>
                </div>
                <div class="text-center">
                  <input type="submit" class="text-center mt-5 mb-2" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection