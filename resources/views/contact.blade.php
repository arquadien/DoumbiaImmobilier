<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link
        rel="stylesheet"
        href=" {{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" />
    <link
        rel="stylesheet"
        href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" />
    <title>File d'actualité</title>
</head>

<body>
    @include('include.navbar')
    <div class="container pcontact">
        <div class="row">
            <div class="col-md-6">
                <div class="contacts">
                    <h4 class="p-3"> contactez-nous et confiez nous votre bien</h4>
                    <p class="mt-3 "> <i class="fa-solid fa-phone me-3"> </i> 0707070707</p>
                    <p> <i class="fa-solid fa-location-dot me-3"> </i> cocody plateau saint jean</p>
                </div>
            </div>

            <div class="col-md-6 form">
                <div>
                    <form action="">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="nom" placeholder="Nom">

                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="prenom" placeholder="Prénoms">

                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" name="numero" placeholder="Numéro">

                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="mail" placeholder="Address Email">

                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="commune" placeholder="Commune">

                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="objet" placeholder="Objet">

                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="" placeholder="Message"></textarea>

                            </div>
                            <div class="text-center">
                                <input type="submit" class="text-center mt-5 mb-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <section>
            <div class="social_link">
                <a style="--color: #384aec">
                    <i class="fa fa-facebook"></i>
                </a>
                <a style="--color: #db4a39">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a style="--color: #0072b1">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a style="--color: #e1306c">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </section>
        <p>
            Signed Arquadien all rights reserved. I remind you that this project is
            done with the aim of putting my skills into practice without marketing
            ambition
        </p>
    </footer>
</body>

</html>