<footer class="container-fluid">
        <!--NAV RODAPE-->
        <div class="row nav-footer">
            <div class="col-12">
                <div class="line-footer mx-auto"></div>
            </div>
            <div class="col-12 d-flex justify-content-around">
                <nav class="navbar navbar-expand-sm py-0">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link menus menus-footer selected" aria-current="page" href="<?=$base_url;?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menus menus-footer <?=($path[0] == "author") ? "selected" : "";?>" <?=($path[0] == "author") ? "href='#_scroll'" : "href=$base_url"."author";?>>Autor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menus menus-footer <?=($path[0] == "book") ? "selected" : "";?>"  onclick="_open()">Livros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menus menus-footer <?=($path[0] == "news") ? "selected" : "";?>" <?=($path[0] == "news") ? "href='#_scroll'" : "href=$base_url"."news";?>>Imprensa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menus menus-footer <?=($path[0] == "contacts") ? "selected" : "";?>" <?=($path[0] == "contacts") ? "href='#_scroll'" : "href=$base_url"."contacts";?>>Contactos</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-12">
                <div class="line-footer mx-auto"></div>
            </div>
        </div>
        <div class="col-12">
            <div class="line-footer-mobile mx-auto"></div>
        </div>
        <!--CONTACTOS-->
        <div class="row d-flex justify-content-center contacts" style="margin-top: 50px; margin-left: 5%; margin-right: 5%;">
            <div class="col-6" style="padding-left: 28px;">
                <div class="t1">Contactos</div>
                <div class="row mt-4">
                    <div class="col-md-4 col-12">
                        <span class="contacts-title">Morada</span> <br> 
                        <span class="contacts-data"><?=getContacts('address');?></span>
                    </div>
                    <div class="col-md-3 col-12" style=" margin-right:15px;">
                        <span class="contacts-title">Telefone</span> <br> 
                        <span class="contacts-data"><?=getContacts('phone');?></span> <br> 
                    </div>
                    <div class="col" >
                        <span class="contacts-title">Email</span> <br> 
                        <span class="contacts-data"><?=getContacts('e-mail');?></span> <br> 
                    </div>
                </div>

                <div class="row contacts-data ralc">
                    <div class="col">
                        <a style="text-decoration: none;" href="#">
                            <img src="images/desktop/svg/livroreclamacoes.svg" style="margin-right: 43px; margin-top: 58px;" alt="">
                        </a>
                        <a style="text-decoration: none;" href="#">
                            <img src="images/desktop/svg/ralc.svg" style="margin-top: 58px" alt="">
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-5 col-12" style="margin-bottom: 70px;">
                <div class="t1 text-center follow-me">siga-me nas redes sociais</div>
                <div class="icon-group text-center">
                    <a style="text-decoration: none;" href="<?=getContacts('instagram');?>">
                        <button class="icon" id="icon-instagram"></button>
                    </a>
                    <a style="text-decoration: none;" href="<?=getContacts('facebook');?>">
                        <button class="icon" id="icon-facebook"></button>
                    </a>
                    <a style="text-decoration: none;" href="<?=getContacts('linkedin');?>">
                        <button class="icon" id="icon-linkedin"></button>
                    </a>
                </div>
                <div class="row contacts-data ralc-mobile">
                    <div class="col">
                        <a style="text-decoration: none;" href="https://www.livroreclamacoes.pt/">
                            <img src="images/desktop/svg/livroreclamacoes.svg" style="margin-right: 43px; margin-top: 58px;" alt="">
                        </a>
                        <a style="text-decoration: none;" href="#">
                            <img src="images/desktop/svg/ralc.svg" style="margin-top: 58px" alt="">
                        </a>
                    </div>
                    
                </div>
                <div class="cookies text-center">
                   <a style="text-decoration: none;" class="p" href="#">Política de Cookies</a>
                </div>
                <div class="text-center p">
                    Copyright 2021 Grupo MediaMaster. Todos os direitos reservados
                 </div>
            </div>
        </div>
    </footer>

  
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- JS BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- JS LOCAL -->
<script src="<?=$base_url;?>frontoffice/js/functions.js"></script>
<script src="<?=$base_url;?>frontoffice/js/main.js"></script>
</body>
</html>