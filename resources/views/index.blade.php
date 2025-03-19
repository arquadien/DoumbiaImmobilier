@extends('include.app')

@section('content')
<main>
  <section class="cards" id="first_card">
    <div id="card_of_presentation">
      <div>
        <h1>DOUMBIA IMMOBILIER</h1>
        <p>
          La reférence de l'immobilier en Côte d'Ivoire
        </p>

        <button class="btn">
          <p><a href="#">Visite guidée ?</a></p>
        </button>
      </div>
      <img src="{{ asset('assets/sg.png')}}" alt="">

    </div>
  </section>
  <div class="apropos-card">
        <div class="image-section">
            <div class="image-wrapper">
                <img src="{{ asset('assets/imageabout.jpg')}}" alt="Graphiques financiers" class="graph-image main-image">
                <img src="{{ asset('assets/contrat.png')}}" alt="Personne devant écran" class="overlay-image">
            </div>
        </div>
        <div class="text-section">
            <h1 id="animated-title"></h1>
            <p>Basée à Abidjan, Angré et régie par les textes et lois en vigueur en Côte d'Ivoire et dans la zone UEMOA, DOUMBIA Immobilier est une Société de Gestion et d’Intermédiation opérant sous le numéro d’agrément n° SGI / DA/2016/60 recu du Conseil Régional du District Autonome des Lagunes et des Marchés Financier en date du 30 Mars 2016.</p>
            <p>Membre de l’Association Professionnelle des Sociétés de Gestion et d’Intermédiation de l'Immobilier en Côte d'Ivoire, DOUMBIA Immobilier est donc soumise au règlement intérieur et instructions mis en place par les différents organes de contrôle du marché immobilier.</p>
            <button>En savoir plus...</button>
        </div>
    </div>
  <div>
    <div class="container  text-center">
      <a href="" class="btn btn-primary" id="btn2">Nos engagements</a>
    </div>
    <div class="boule">
      <div class="boule1">
        <img src="{{asset('assets/item1.jfif')}}" alt="" width="100%" height="100%" />
      </div>
      <div class="boule2">
        <img src="{{asset('assets/acheter.jpg')}}" alt="" width="100%" height="100%" />
      </div>
      <div class="boule3">
        <img src="{{asset('assets/signature-mandat.jpg')}}" alt="" width="100%" height="100%" />
      </div>
    </div>
    <div class="partie">
      <div class="partie1">
        <h6>engagements en vers nos clients acheteurs</h6>
        <br />
        <p>
          <i class="fa-solid fa-caret-right"> </i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
        <p>
          <i class="fa-solid fa-caret-right"> </i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
      </div>
      <div class="partie2">
        <h6>engagements en vers nos clients vendeurs</h6>
        <br />
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit..
        </p>
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit. .
        </p>
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
        <p>
          <i class="fa-solid fa-caret-right"></i> Lorem ipsum, dolor sit amet
          consectetur adipisicing elit.
        </p>
      </div>
    </div>
  </div>
  <section class="cards" id="secend_card">
    <!-- proprietes -->
    <div class="propriete mt-5">
      <h4 class="text-center ">
        Nos proprietes les plus récentes
      </h4>
      <p class="tiret"></p>
    </div>
    <div class="grille"> 
      @foreach($proprietes as $propriete)
      <div class="grille_items">
        <img src="./storage/{{$propriete->image_path}}" alt="photo" />
        <h3><u><a href="{{asset(route('detail',$propriete->id))}}">{{$propriete->titre}}</a></u></h3>
        <p>{{ Str::limit($propriete->description, 160, '...') }} </p>
        <span>{{$propriete->prix}} F</span>
      </div>
      @endforeach
    </div>
  </section>
  <!-- recommandations -->
  <div id="recommandation" class="mt-5">
    <div class="container-fluid">
      <h4 id="" class="text-center fw-bold">
        Les meilleures recommandations sont celles de nos <br />
        clients
      </h4>
      <p class="tirets"></p>
      <p class="fw-bold text-center mt-5 consulter">
        <b>Consulter les 56 087 avis des clients</b>
      </p>

      <div class="row">
        <div class="col-md-3 ronP">
          <div class="mt-2">
            <div class="rond text-center">
              <h4 class="fw-bold">4,8</h4>
              <div class="etoile">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <img src="{{ asset('assets/avis.png') }}" alt="" class="mt-2" />
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="row avis">
            <div class="col-md-4 mt-2">
              <div class="avis">
                <div class="etoile">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p class="mt-2">
                  "prise de rendez-vous rapide, et le technicien m'a tout bien
                  expliqué"
                </p>
                <h6>bellion k. le 25/10/2024</h6>
                <span>intervention le 30.09.17</span>
              </div>
            </div>

            <div class="col-md-4 mt-2">
              <div class="avis">
                <div class="etoile">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <p class="mt-2">
                  "prise de rendez-vous rapide, et le technicien m'a tout bien
                  expliqué"
                </p>
                <h6>bellion k. le 25/10/2024</h6>
                <span>intervention le 30.09.17</span>
              </div>
            </div>

            <div class="col-md-4 mt-2">
              <div class="avis">
                <div class="etoile">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p class="mt-2">
                  "prise de rendez-vous rapide, et le technicien m'a tout bien
                  expliqué"
                </p>
                <h6>bellion k. le 25/10/2024</h6>
                <span>intervention le 30.09.17</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center voir mt-2">
        <a id="btnvoir" href="" class="btn btn-light fw-bold mb-2">voir tous les avis</a>
        <br />
        <a href="" style="color: rgb(79, 71, 71)" class="mb-3">Avis soumis a un controle
          <i class="fa-solid fa-circle-exclamation"></i>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection