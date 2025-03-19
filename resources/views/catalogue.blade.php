@extends('include.app')
@section('content')
<div id="section-catalogue">
  <h1 class="intro_h1">Catalogue photo</h1>
  <p class="intro_p">
    vous trouverez dans ce catalogue des photos de maison que nous proposons
  </p>
  <section class="cards" id="secend_card">
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
</div>
@endsection