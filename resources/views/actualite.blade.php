@extends('include.app')
@section('content')
<section class="actualite">
</section>
<section class="actualite_info">
    <h2>Découvrez les opportunités autours de vous </h2>
    <div id="article">
        <article>
            <img src="{{asset('/assets/actualite/image.jpg')}}" alt="">
            <h3>TITRE DE L'ARTICLE</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ipsum, voluptas eligendi quasi ducimus at error exercitationem impedit itaque molestias quo quae repellat nostrum,
                ad saepe quos dolor sint facere vero accusantium voluptates doloribus amet similique! Quam at vero necessitatibus.</p>
            <p><a href="#">service clients</a></p>
            <p><a href="#">Conseiller en investissement</a></p>
            <p class="lirePlus">Publié le 18/02/2025 <span><a href="{{asset(route('lire'))}}">Lire plus...</a></span></p>
        </article>
        <article>
            <img src="{{asset('/assets/actualite/image.jpg')}}" alt="">
            <h3>TITRE DE L'ARTICLE</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ipsum, voluptas eligendi quasi ducimus at error exercitationem impedit itaque molestias quo quae repellat nostrum,
                ad saepe quos dolor sint facere vero accusantium voluptates doloribus amet similique! Quam at vero necessitatibus.</p>
            <p><a href="#">service clients</a></p>
            <p><a href="#">Conseiller en investissement</a></p>
            <p class="lirePlus">Publié le 18/02/2025 <span><a href="#">Lire plus...</a></span></p>
        </article>
        <article>
            <img src="{{asset('/assets/actualite/image.jpg')}}" alt="">
            <h3>TITRE DE L'ARTICLE</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ipsum, voluptas eligendi quasi ducimus at error exercitationem impedit itaque molestias quo quae repellat nostrum,
                ad saepe quos dolor sint facere vero accusantium voluptates doloribus amet similique! Quam at vero necessitatibus.</p>
            <p><a href="#">service clients</a></p>
            <p><a href="#">Conseiller en investissement</a></p>
            <p class="lirePlus">Publié le 18/02/2025 <span><a href="#">Lire plus...</a></span></p>
        </article>
        <article>
            <img src="{{asset('/assets/actualite/image.jpg')}}" alt="">
            <h3>TITRE DE L'ARTICLE</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ipsum, voluptas eligendi quasi ducimus at error exercitationem impedit itaque molestias quo quae repellat nostrum,
                ad saepe quos dolor sint facere vero accusantium voluptates doloribus amet similique! Quam at vero necessitatibus.</p>
            <p><a href="#">service clients</a></p>
            <p><a href="#">Conseiller en investissement</a></p>
            <p class="lirePlus">Publié le 18/02/2025 <span><a href="#">Lire plus...</a></span></p>
        </article>
    </div>

</section>
@endsection