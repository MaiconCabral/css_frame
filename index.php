<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="mit" content="2018-09-25T11:18:52-03:00+29415">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>framework css</title>

        <link rel="stylesheet" href="css/boot.css"/>
        <link rel="stylesheet" href="css/style.css"/>
       <!-- <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">-->

    </head>
    <body>
      <main class="container">

       <!-- modal 1 -->
            <div class="dialog">
                <div class="modal-one editcambio">
                  <a href="#" class="closemodal-one j_close_edituser">X</a>
                  <form class="form-editcambio j_edit_cambio jwc_form" name="PostForm" action="" method="post" enctype="multipart/form-data">
                    <label class="">
                              <span class="field">Nome:</span>
                              <input type="hidden" name="callback_action" value="updatecambio"/>
                              <input type="hidden" name="cambio_id" value=""/>               
                              <input type="text" name="cambio_name" value=""/>
                          </label>
                        
                          <label class="">
                              <span class="field">País:</span>
                              <input type="text" name="cambio_country" value=""/>
                          </label>
                    
                    <label style="margin-top:3%;" class="">
                              <span class="field">Valor da moeda:</span>
                              <input type="number" placeholder="0.00" min="0" max="10000" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" name="cambio_value" value=""/>
                      </label>
                        
                        <label class="field">
                              <span class="field">ISO:</span>
                              <input type="text" name="cambio_iso" value=""/>
                           </label>
                    
                    <label class="">
                            <button style="margin-top: 3%;" class="btn green">Atualizar Cambio</button>
                            <img class="form_load" src="img/loader.gif" alt="[CARREGANDO...]" title="CARREGANDO..."/>   
                      <div class="trigger-box" style="margin-top:5px;"></div> 
                          </label>
                  </form>
                 </div>
            </div> 
        <!-- fim modal 1 --> 

        <!-- modal 2 -->
            <div class="dialog-two">
                <div class="modal-two editcambio">
                  <div class="modal-content">
                    <div class="modal-header">

                      <div class="modal-bl">
                        <h2 class="p-desc al-left"> Titulo da Modal</h2>
                      </div>
                      <div class="modal-bl">
                        <a href="#" class="closemodal-two j_close_edituser">X</a>
                      </div>   
                    </div>
                    
                  </div> 
                  
                 
                 </div>
            </div> 
        <!-- fim modal 2 -->


        <!-- modal 3 -->
            <div class="dialog-three">
                <div class="modal-three editcambio">
                  <a href="#" class="closemodal-three j_close_edituser">X</a>
                  <div class="modal-content">
                    <div class="modal-header">

                        
                      </div>   
                    </div>
                    
                  </div>                   
                 
                 </div>
            </div> 
        <!-- fim modal 3 -->

     <!-- Formatação de content-->   
      <h1 class="large-title al-center" style="color:#333;margin-bottom: 1%;margin-top: 1%;">MINI Framework css</h1>   
        <section class="content bg-black" style="margin-bottom: 2%;">
           <h1 class="large-title al-center" style="color:#fff;">content</h1>
           <div class="clear"></div>
        </section>

         <section class="content-lg bg-dkblue" style="margin-bottom: 2%;">
           <h1 class="large-title al-center" style="color:#fff;">content-lg</h1>
           <div class="clear"></div>
        </section>

         <section class="content-sm bg-grey" style="margin-bottom: 2%;">
            <h1 class="large-title al-center" style="color:#fff;">content-sm</h1>
            <div class="clear"></div>
        </section>
      <!-- FIM Formatação de content-->
      
      <!-- Formatação de ARTICLE BOX DIV-->  
        <section class="content bg-white">
              <header>
                <h1 class="large-title al-center" style="color:#333;">Formatação de article/box/div</h1> 
              </header>

              <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;">
                 <h1 class="small-title"> class col-full </h1>
              </article>

              <?php for ($i = 1; $i <= 2; $i++): ?>
              <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;">
                 <h1 class="small-title"> class col-large </h1>
              </article>
            <?php endfor; ?>

            <?php for ($i = 1; $i <= 3; $i++): ?>
              <article class="col-medium" style="margin-bottom: 2%;border:1px solid #c6c7cc;">
                 <h1 class="small-title"> class col-medium </h1>
              </article>
            <?php endfor; ?>

            <?php for ($i = 1; $i <= 4; $i++): ?>
              <article class="col-small" style="margin-bottom: 2%;border:1px solid #c6c7cc;">
                 <h1 class="small-title"> class col-small </h1>
              </article>
            <?php endfor; ?>

        </section>
      <!-- FIM Formatação de ARTICLE BOX DIV--> 

       <!-- Formatação de TEXTOS--> 
        <section class="content" style="margin-bottom: 2%;">
          <h1 class="large-title al-center" style="color:#333;">Formatação de texto</h1>  
          
          <article class="col-full bg-white" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
            <h1 class="full-title"> <span class="note-grey">class full-title </span>Where does it come from? </h1>
            <h1 class="large-title"> <span class="note-grey">class full-title </span>Where does it come from? </h1>
              <h1 class="medium-title"> <span class="note-grey">class medium-title </span>  Where does it come from? </h1>
                <h1 class="small-title"> <span class="note-grey">class small-title </span> Where does it come from? </h1>

             <p class="p-desc"> <span class="note-grey">class p-desc </span> Where does it come from? </p>
             <p class="p-content"> <span class="note-grey">class p-content </span> Where does it come from? </p>
          </article> 

             <div class="clear"></div>
        </section>
      <!-- FIM Formatação de TEXTOS --> 

      <!-- Formatação de triggers--> 
        <section class="content" style="margin-bottom: 2%;">
          <h1 class="large-title al-center" style="color:#333;">Formatação de triggers/ MENSAGENS DO SISTEMA</h1>  
         <!-- trigger 1--> 
          <article class="col-full bg-white" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger error"><span class="note-dark">ERROR:</span>resposta</div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger alert"><span class="note-dark">ERROR:</span>resposta</div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger infor"><span class="note-dark">ERROR:</span>resposta</div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger accept"><span class="note-dark">ERROR:</span>resposta</div>
            </div> 
          </article> 
          <!-- trigger 2-->
          <article class="col-full bg-white" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
             <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger danger"><span class="note-error">ERROR:</span>resposta</div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger warning"><span class="note-alert">ERROR:</span>resposta</div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger info"><span class="note-infor">ERROR:</span>resposta</div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger success"><span class="note-accept">ERROR:</span>resposta</div>
            </div> 
          </article> 
          <!-- trigger 3-->
           <article class="col-full bg-white" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
             <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger errado"><span class="note-white">ERROR: resposta</span></div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger alerta"><span class="note-white">ERROR: resposta</span></div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger informacao"><span class="note-white">ERROR: resposta</span></div>
            </div> 

            <div class="trigger-box" style="margin-top:5px;">
              <div class="trigger sucesso"><span class="note-white">ERROR: resposta</span></div>
            </div> 
          </article> 

             <div class="clear"></div>
        </section>
      <!-- FIM Formatação de TEXTOS --> 

      <!-- Formatação de imagens -->
        <section class="content bg-white">

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
            <h1 class="small-title al-center" style="margin-bottom: 2%;"> img-full </h1>
            <img class="img-full" src="img/bg-1.jpg">
          </article>

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
            <h1 class="small-title al-center" style="margin-bottom: 2%;"> img-large </h1>
            
            <?php for ($i = 1; $i <= 2; $i++): ?>
              <img class="img-large" src="img/bg-1.jpg">
            <?php endfor; ?>

          </article>

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
            <h1 class="small-title al-center" style="margin-bottom: 2%;"> img-medium </h1>
            
            <?php for ($i = 1; $i <= 3; $i++): ?>
              <img class="img-medium" src="img/bg-1.jpg">
            <?php endfor; ?>

          </article>

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
            <h1 class="small-title al-center" style="margin-bottom: 2%;"> img-small </h1>
            
            <?php for ($i = 1; $i <= 4; $i++): ?>
              <img class="img-small" src="img/bg-1.jpg">
            <?php endfor; ?>

          </article>
          <div class="clear"></div>
        </section>
      <!-- FIM Formatação de imagens -->

      <!-- Formatação de videos -->
        <section class="content">
          <h1 class="large-title al-center" style="color:#333;">Formatação de botões</h1>

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
            <h1 class="small-title al-center" style="margin-bottom: 2%;"> ratiohd</h1>

            <div class="ratiohd">
             <iframe class="ratio_el" width="560" height="315" src="https://www.youtube.com/embed/Fn9adh4HWUU" frameborder="0" allowfullscreen=""></iframe>
            </div> 
          </article>
          <div class="clear"></div>
        </section>  
      <!-- FIM Formatação de videos -->

      <!-- Formatação de BOTÕES -->
        <section class="content">
          <h1 class="large-title al-center" style="color:#333;">Formatação de botões</h1> 

              <article class="col-medium bg-white" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
                 <h1 class="small-title"> class btn-default </h1>

                 <div style="margin-bottom: 2%;">
                  <span class="note">tamanho padrao</span> <button class="btn-default">button</button> 
                 </div>
                
                 <div> 
                 <span class="note">tamanho full </span> <button class="btn-default btn-full">button</button>
                </div>
              </article>

               <article class="col-medium bg-white" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
                 <h1 class="small-title"> class btn-bottom </h1>

                 <div style="margin-bottom: 2%;">
                  <span class="note">tamanho padrao </span> <button class="btn-bottom">button</button>
                 </div>
                 
                 <div style="margin-bottom: 2%;">
                  <span class="note">tamanho full </span> <button class="btn-bottom btn-full">button</button>
                 </div>


              </article>

               <article class="col-medium bg-white" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
                 <h1 class="small-title"> class btn-border </h1>

                <div style="margin-bottom: 2%;">
                 <span class="note">tamanho padrao </span> <button class="btn-border">button</button>
                </div>

                <div style="margin-bottom: 2%;">
                 <span class="note">tamanho full </span> <button class="btn-border btn-full">button</button>
                </div>

              </article>
              <div class="clear"></div>
        </section>
      <!-- FIM Formatação de BOTÕES -->

      <!-- Formatação de PAGINAÇÃO -->
        <section class="content">
          <h1 class="large-title al-center" style="color:#333;">Formatação de paginação</h1> 
          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="paginator">
                <a class="btn-pag" href="#">Primeira Página</a>
                <a class="pag" href="#">1</a>
                <a class="pag" href="#">2</a>
                <span class="atv">3</span>
                <a class="pag" href="#">4</a>
                <a class="pag" href="#">5</a> 
                <a class="btn-pag" href="#">Última Página</a>
              </div>
              <div class="clear"></div>
          </article>

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="paginator">
                <a class="btn-pag-rectangle" href="#">Primeira Página</a>
                <a class="pag-rectangle" href="#">1</a>
                <a class="pag-rectangle" href="#">2</a>
                <span class="atv-rectangle">3</span>
                <a class="pag-rectangle" href="#">4</a>
                <a class="pag-rectangle" href="#">5</a> 
                <a class="btn-pag-rectangle" href="#">Última Página</a>
              </div>
              <div class="clear"></div>
          </article>

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="paginator">
                <a class="btn-pag-cycle" href="#">Primeira Página</a>
                <a class="pag-cycle" href="#">1</a>
                <a class="pag-cycle" href="#">2</a>
                <span class="atv-cycle">3</span>
                <a class="pag-cycle" href="#">4</a>
                <a class="pag-cycle" href="#">5</a> 
                <a class="btn-pag-cycle" href="#">Última Página</a>
              </div>
              <div class="clear"></div>
          </article>

          <article class="col-full" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="paginator-box">
                <a class="btn-pag-box" href="#">Primeira Página</a>
                <a class="pag-box" href="#">1</a>
                <a class="pag-box" href="#">2</a>
                <span class="atv-box">3</span>
                <a class="pag-box" href="#">4</a>
                <a class="pag-box" href="#">5</a> 
                <a class="btn-pag-box" href="#">Última Página</a>
              </div>
              <div class="clear"></div>
          </article>


          <div class="clear"></div>
        </section>
      <!-- FIM Formatação de PAGINAÇÃO -->

      <!-- Formatação de MOdais-->
      <section class="content">
        <h1 class="large-title al-center" style="color:#333;margin-top:1%;margin-bottom:1%;">Formatação de modais</h1>
        
        <article class="col-medium" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="al-center">
                <a class="btn-default  j_modal-one"> modal-1</a>
              </div>
         <div class="clear"></div>   
        </article>

        <article class="col-medium" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">        
            <div class="al-center">
                <a class="btn-default j_modal-two"> modal-2</a>
            </div>
        <div class="clear"></div>    
        </article>

        <article class="col-medium" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
          <div class="al-center">
                <a class="btn-default j_modal-three"> modal-3</a>
              </div>
         <div class="clear"></div>   
        </article>

      </section>
      <!-- FIM Formatação de Modais-->

       <!-- Formatação BOX SHADOWNs-->
        <section class="content">
           <h1 class="large-title al-center" style="color:#333;margin-top:1%;margin-bottom:1%;">Formatação de box shadows</h1>

           <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect1">
                <h3>Effect 1 check</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect2">
                <h3>Effect 2</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect3">
                <h3>Effect 3</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect4">
                <h3>Effect 4</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect5">
                <h3>Effect 5</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect6">
                <h3>Effect 6</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect7">
                <h3>Effect 5</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect8">
                <h3>Effect 6</h3>
              </div>
          </article>

          <article class="col-large" style="margin-bottom: 2%;border:1px solid #c6c7cc;padding: 1%;">
              <div class="box effect9">
                <h3>Effect 9 alura check</h3>
              </div>
          </article>
          <div class="clear"></div>
        </section>
      <!-- FIM Formatação BOX SHADOWNs-->

      </main>
 
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <!--<script src="js/owl.carousel.min.js"></script>-->
    </body>
</html>