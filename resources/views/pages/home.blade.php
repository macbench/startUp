
@extends('includers.app')

@push('title')
   Home 
@endpush

@push('home')

<div class="swiper-container home-slider">
    <div class="swiper-wrapper wrapper">

        <div class="swiper-slide slide">
            <div class="image">
                <img src="{{asset('assets/img/primavera.jpg')}}" alt="Primavera Branding">
            </div>
        </div>
        <div class="swiper-slide slide">
            <div class="image">
                <img src="{{asset('assets/img/oQueFazContabilista.jpg')}}" alt="link para o video do Sabrae"
                    usemap="#playvideo" />
                <map name="playvideo">
                    <area shape="circle" coords="900,274,118" href="#contabi" />
                </map>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <div class="contentBtn">
                    <a href="modulos/mod-a/exe-1/exe1.html" class="btnJogoEx">Jogar Agora!</a>
                </div>


                <img src="{{asset('assets/img/jogoDivertido.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="swiper-pagination"></div>

</div>
@endpush


@push('home_parte_2')

<h1 class="welcome">Seja muito bem-vindo(a)!</h1>
<h2 class="sub-come">Ao laboratório de contas <i class="uil uil-flask"></i></h2>

<!-- AQUI FICA UM STIKER/ILUSTRAÇÃO-->
<div class="main-txt">
    <div class="txt">
        <div class="main-intro">
            <img src="{{asset('assets/img/budgeting.png')}}" alt="giving wave" class="wave">
            <div class="msg-intro">
                <p>
                    " Explore ao máximo todos os conteúdos essenciais de que precisa saber sobre
                    contabilidade! "
                </p>
            </div>
        </div>

        <div class="videoContabilista" id="contabi">
            <div id="mainIframe">
                <div class="responsive">
                     <iframe src="iframes/videos/oqueFazContabilista.html" height="496" width="504"
                        scrolling='no' frameborder="0" allowfullscreen="" title="Publicação incorporada">
                    </iframe> 
                </div>
                <div class="legenda">
                    O que faz um contabilista?
                </div>

            </div>
        </div>

        <div class="destaque">
            <h2>CONTEÚDOS DIPONÍVEIS </h2> <br>
        </div>

        <div class="paraCentro">
            <div class="secDiv" data-aos="fade-up" data-aos-duration="1100">
                <div>
                    <div>
                        <i class="uil uil-file-search-alt"></i>
                    </div>
                </div>
                <div class="msg-dev">
                    <h2>Plano de Contas</h2>
                    <p>
                        Disponível todas as contas do PGC-NIRF de que procura na secção <strong>"Explorar"</strong>
                    </p>
                </div>
            </div>

            <!---********-->
            <div class="secDiv" data-aos="fade-up" data-aos-duration="1100">
                <div>
                    <div>
                        <i class="uil uil-books"></i>
                    </div>
                </div>
                <div class="msg-dev">
                    <h2>Manuais Disponíveis</h2>
                    <p>
                        Leia conteúdos ligados a sua área de formação ou de profissão.
                    </p>
                </div>
            </div>

            <!---********-->
            <div class="secDiv" data-aos="fade-up" data-aos-duration="1100">
                <div>
                    <div>
                        <i class="uil uil-calculator-alt"></i>
                    </div>
                </div>
                <div class="msg-dev">
                    <h2>Exercícios</h2>
                    <p>
                        Explore exercícios práticos que o ajudarão a ter o domínio da matéria!
                    </p>
                </div>
            </div>


        </div>
        <div class="destaque parce">
            <h2>PARCERIA</h2><br>
            <div class="Boxer">
                <div class="ltBox">
                    <img src="img/workx.png" alt="">
                    <div>Parceiro 1</div>
                </div>
                <div class="ltBox">
            </div>

        </div>




        <a class="main-intro" href="{{url("/apoio")}}">
            <div class="img-to-houver"></div>
            <img src="{{asset('assets/img/i-did-it.jpg')}}" alt="dando uma torcida pelo apoio" class="wave img-front">

            <div class="img-blur">

            </div>

            <div class="infront-img-txt">
                <p>
                    TORNE-SE UM APOIADOR!
                </p>
            </div>
        </a>



    </div>

@endpush