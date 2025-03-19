<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    rel="stylesheet"
    href="{{asset('style.css')}}" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css')}}" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <title>DOMBIA IMMOBILIER</title>
</head>

<body>
    @include('include.navbar');
    
    @yield('content')

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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
  </script>
  <script src="{{asset('animation.js')}}"></script>
  <!--<script src="https://unpkg.com/@studio-freight/lenis@latest/bundled/lenis.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        console.log("Lenis chargé ?", typeof Lenis); // Vérifie si Lenis est bien chargé

        if (typeof Lenis !== "undefined") {
            const lenis = new Lenis({
                duration: 1.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                direction: 'vertical',
                gestureDirection: 'vertical',
                smooth: true,
                mouseMultiplier: 1,
                smoothTouch: false,
                touchMultiplier: 2,
                infinite: false,
            });

            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);
        } else {
            console.error("⚠️ Lenis n'est toujours pas chargé !");
        }
    });
</script>-->

</body>
