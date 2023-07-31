   <!--MENU HERE-->

   <nav class="nav">
    <div class="nav__links">
        <div class="nav__links">
            <div class="fundo-menu">
                <i class="uil uil-times voltar"></i>
            </div>

            <a href="{{url("/")}}" class="nav__link" id="homePage">
                <i class="uil uil-estate"></i>
                <h3>Home</h3>
            </a>
            <a href="#" class="nav__link" id="homePage">
                <i class="uil uil-user-circle"></i>
                <h3>Perfil</h3>
            </a>



            <!--Modulos >> MENU HERE-->

            <div class="nav__link">
                <div class="li">
                    <label for="btn-3" class="second">
                        <i class="uil uil-books"></i>
                        <h3>Manuais</h3>
                        <span class="uil uil-angle-up setmanual"></span>
                    </label>

                    <input type="checkbox"  id="btn-3">

                    <div class="ul1 modulos">
                        <div class="li">
                            <a href="#modal">
                                <i class="uil uil-book-alt"></i>
                                <h3>Finanças</h3>
                            </a>
                        </div>
                        <div class="li">
                            <a href="#modal" class="segundo" id="mb">
                                <i class="uil uil-book-alt"></i>
                                <h3>Auditoria</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--End Modulos >> MENU HERE-->



          
          
<!--Star EXPLORE Modulos >> MENU HERE-->

        <div class="nav__link">
                <div class="li">
                    <label for="btn-4" class="third">
                        <i class="uil uil-apps"></i>
                        <h3>Explorar</h3>
                        <span class="uil uil-angle-up setmanual"></span>
                    </label>

                    <input type="checkbox" id="btn-4">

                    <div class="ul2 modulos">
                        <div class="li">
                            <a href="#">
                                <i class="uil uil-chart-pie-alt"></i>
                                <h3>Apurar a D'R</h3>
                            </a>
                        </div>

                        <div class="li">
                            <a href="planoDeContas/plano.html">
                                <i class="uil uil-list-ui-alt"></i>
                                <h3>Plano de Contas</h3>
                            </a>
                        </div>
                        <div class="li">
                            <a href="#modal" class="segundo" id="mb">
                                <i class="uil uil-files-landscapes-alt"></i>
                                <h3>Mapas de DF's</h3>
                            </a>
                        </div>
                      <div class="li">
                            <a href="#modal" class="segundo" id="mb">
                                <i class="uil uil-file-question-alt"></i>
                                <h3>Exercícios</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<!--END EXPLORE Modulos >> MENU HERE-->

          


            <a class="nav__link" href="#">
                <i class="uil uil-question-circle"></i>
                <h3>Sobre nós</h3>
            </a>

            <a class="nav__link logout" href="{{url("/apoio")}}">
                <i class="fa-regular fa-handshake"></i>
                <h3>Apoiar o projecto</h3>
            </a>

        </div>
        <div class="nav__overlay"></div>
</nav>
