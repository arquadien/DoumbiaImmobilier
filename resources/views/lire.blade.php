@extends('include.app')
   @section('content')

    <div class="photo">
        <img src="imag/WhatsApp Image 2024-05-19 at 16.22.11.jpeg" alt="" width="100%" height="90%">
    </div>
    <div class="container p-5" style="position: relative; padding:6rem 20rem 4rem 20rem;">
        <button style="margin : 20px;" id="_3btn" class="mb-5" type="button"><a href="{{ asset(route ('actualite'))}}"><i class="fa-solid fa-arrow-left"></i> Retour</a></button>
        <div class="entete text-center mb-5">
            <h2> la collaboration inter-agences</h2>
            <p>un devoir citoyen pour l'interet collectif</p>
        </div>

        <p class="contenue">Lorem ipsum dolor sit amet consectetur adipisicing elit. <strong>furhgir"hgirhgirgir</strong>Sapiente rem cupiditate inventore? Ab reprehenderit sed corporis tempore ad dolores iusto perspiciatis magni
            distinctio? Nulla optio blanditiis, consequuntur voluptatum voluptate id!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem cupiditate inventore? Ab reprehenderit sed corporis tempore ad dolores iusto perspiciatis magni
            distinctio? Nulla optio blanditiis, consequuntur voluptatum voluptate id!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem cupiditate inventore? Ab reprehenderit sed corporis tempore ad dolores iusto perspiciatis magni
            distinctio? Nulla optio blanditiis, consequuntur voluptatum voluptate id!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem cupiditate inventore? Ab reprehenderit sed corporis tempore ad dolores iusto perspiciatis magni
            distinctio? Nulla optio blanditiis, consequuntur voluptatum voluptate id!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem cupiditate inventore? Ab reprehenderit sed corporis tempore ad dolores iusto perspiciatis magni
            distinctio? Nulla optio blanditiis, consequuntur voluptatum voluptate id!
        </p>
        <p class="mt-5 contenue" style="margin: 4rem 0px;">Publier le 18/02/2025</p>
    </div>
@endsection