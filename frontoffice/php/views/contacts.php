
    <main class="container-fluid" id="_scroll">
        <!--BEM VINDO-->
        <div class="row border d-flex author-area" style="margin-left: 7%" >
            <div class="col-3 col-sm-auto">
                <div class="selected-title" style="margin-top: 50px;margin-left: 55px;">Contactos</div>
                <div class="t1" style="margin-left: 55px;">pode contactar-me através de e-mail ou telefone</div>
            </div>
        </div>
        <!--AREA CONTACTOS-->
        <div class="row contact-list ">
            <div class="col-sm-2">
                <div class="contacts-title">Telefone</div>
                <div class="contacts-data"><?=getContacts('phone');?></div>
            </div>
            <div class="col-sm-3">
                <div class="contacts-title">Morada</div>
                <div class="contacts-data"><?=getContacts('address');?></div>
            </div>
            <div class="col-sm-2 ">
                <div class="contacts-title">E-mail</div>
                <div class="contacts-data"><?=getContacts('e-mail');?></div>
            </div>
        </div>
       <div class="row">
        <div class="col">
            <div class="line-contacts"></div>
        </div>
       </div>
       <div class="row d-flex justify-content-center text-center">
        <div class="col-3" style="margin-bottom: 80px;">
            <div class="contacts-title">Horário</div>
            <div class="contacts-data"><?=getContacts('schedule');?></div>
        </div>
       </div>
    </main>
    <script>
        window.onload = function() {
        document.getElementById("_scroll").scrollIntoView();
        };
    </script>
