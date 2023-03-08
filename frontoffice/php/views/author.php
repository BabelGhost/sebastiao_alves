
<main class="container-fluid" id="_scroll">
        <!--BEM VINDO-->
        <div  class="row border d-flex author-area" style="margin-left: 7%" >
            <div class="col">
                <div class="selected-title" style="margin-top: 50px;margin-left: 55px;">Autor</div>
                <div class="t1" style="margin-left: 55px;">Sobre mim</div>
            </div>
        </div>
        <!--AREA TEXTO-->
        <div class="row" id="author-desktop" style="margin-left: 6%;margin-right: 6%;">
            <div class="col-12">
                <div class="text-center"><img class="image-author" src="<?=getAuthor('image');?>" alt=""></div>
                
                <div class="p" style="margin-left: 7%;margin-right: 7%; margin-top: 55px;">
                    <?=getAuthor('text');?>
                </div>
            </div>
            <div style="margin-left:7%; margin-top:75px; margin-bottom:75px; ">
                <button onclick="goBack()" class="back" style="width: 132px; height: 30px;"></button>
            </div> 
        </div>
        <div class="row" id="author-mobile">
            <div class="col-12">
                <div class="text-center"><img class="image-author" src="<?=getAuthor('image');?>" alt=""></div>
                
                <div class="p text-mobile" style="margin-left: 7%;margin-right: 7%; margin-top: 55px;">
                    <?=getAuthor('text');?>
                </div>
            </div>
            <div class="text-center mt-4">
                <button onclick="seeMore()" class="see-more" style="width: 132px; height: 30px;"></button><br><br>
                <button onclick="goBack()" class="back" style="width: 132px; height: 30px;"></button>
            </div> 
        </div>
        
      
    </main>
    <script>
        window.onload = function() {
        document.getElementById("_scroll").scrollIntoView();
        };
    </script>