        <!-- parte del footer  -->

        <div class="footermenu">
            <img src="{{asset("img/design/logo.png")}}" alt="" width="200px">
            <ul>
                <li><a href="{{ route('front.index') }}">Home</a></li>
                <li><a href="{{ route('front.soluciones') }}">Soluciones</a></li>
                <li><a href="{{ route('front.vacantes') }}">Vacantes</a></li>
                <li><a href="{{ route('front.aboutus') }}">Nosotros</a></li>
                <li><a href="{{ route('front.contacto') }}">Contactos</a></li>
            </ul>
        </div>

        <!-- parte del footer  -->

    </div>
    <!-- contenido final de la pagina -->




    <!-- footer  -->
    <div class="container">
        <footer class="footerIni" style="letter-spacing: 3px">
            <p>TODOS LOS DERECHOS RESERVADOS SEKTOR 2022 DISEÑO POR WOZIAL MARKETING LOVERS</p>
            
        </footer>
        <!-- footer  -->
    

    </div>
    <div class="RedesFooter">
        <a href="{!!$config->whatsapp!!}"><img src="{{asset("img/design/whats.png")}}" alt="" width="24px"></a>
        <a href="{!!$config->instagram!!}"><img src="{{asset("img/design/insta.png")}}" alt="" width="24px"></a>
        <a href="{!!$config->facebook!!}"><img src="{{asset("img/design/fb.png")}}" alt="" width="24px"></a>
    </div>
    