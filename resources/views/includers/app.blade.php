<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title')</title>

    @include('includers.head')
    

</head>
<body class="preload">
    <div class="overlay_first"></div>

    <header class="header">
        <button class="header__button" id="btnNav" type="button">
            <span class="uil uil-bars"></span>
        </button>
        <div class="logo">Mac <span>Bench</span></div>
    </header>

    @include('includers.nave')
 

    <div class="mainColor">

        <section class="home" id="home">

            @stack('home')

           {{--@stack('home')

            @push()
            @endpush
                
            @endpush --}}

           

           {{--  @yield('section')

            @section('section')

            @endsection --}}

            

        </section>

        <!-- home section ends -->





        <section>

           
            @stack('home_parte_2')


        </section>

        <!--MODAL-->
        <div class="modal" id="modal">
            <div class="modal-content">
                <h2 class="modal-title">CONTEÚDO INDISPONÍVEL!</h2>
                <div id="mainIframe1">
                    <div class="responsive">
                        <img src="img/no-content.png" height="496" width="504" alt="doubt">
                        </img>

                    </div>
                </div>

                <p class="modal-description"> <br>O Conteúdo que deseja acessar encontra-se
                    indisponível neste momento <br> <br> Por favor, tente consultar mais tarde!
                    <br> <br>
                </p>
                <div class="btn-ok">
                    <a href="#index.html" class="modal-link">Ok</a>
                </div>
            </div>

        </div>
        @include('includers.footer')

    </div>


    @include('includers.script')

</body>
</html>