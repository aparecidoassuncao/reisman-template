<!DOCTYPE html>
<html>
@include(engine_view('head'))
@checkoutHeader()
<style>
    label[for="installments-1-1"] > span{
  display:inline-block;
  padding:10px 16px;
  border-radius:999px;
  background:#FFE8EA;
  color:#C21807;
  font-weight:900;
  font-size:1.2rem;
  letter-spacing:.3px;
  line-height:1;
  box-shadow:0 0 0 2px rgba(194,24,7,.2) inset;
  transition:.15s ease;
}
label[for="installments-1-1"]:hover > span{
  transform:translateY(-1px);
  background:#FFD9DC;
  box-shadow:0 8px 24px rgba(194,24,7,.25), 0 0 0 2px rgba(194,24,7,.3) inset;
}

</style>
    <body>
        <section class="header-checkout">
            <a class="logo" href="/">
                 <img src="{{ path('logo-novo-preto.svg') }}" width="130px" height="25px">
            </a>
        </section>
        <div class="container title-checkout">
            <h2 class="text-center">Meu carrinho</h2>
        </div>
        <div id="fechamento-sucesso" class="center text-center hide">
            <div id="subtitle-fechamento-sucesso">
                Estamos muito felizes em tê-lo como cliente Reisman :)
                <br />
                Assim que o pagamento for realizado e confirmado, daremos início a produção da sua joia.
                <br />
                Você receberá esta confirmação diretamente em seu e-mail, não esqueça de conferir também a caixa de spam ou lixo eletrônico, combinado?
                <br />
                <br />
                Qualquer dúvida, não hesite em nos contatar.
                <br />
                <br />
                <ul>
                    <li>
                        Se você optou pelo pagamento via cartão de crédito, fique atento ao telefone. É possível que o Mercado Pago entre em contato com você para confirmar algumas informações.
                    </li>
                    <li>
                        Na modalidade PIX, geramos automaticamente um QR-CODE para o pagamento que pode ser conferido logo abaixo. Todo o processo é automatizado, basta efetuar o pagamento e instantaneamente será confirmado pela instituição bancária.
                    </li>
                    <li>
                        Caso você tenha selecionado o boleto bancário, lembre-se de efetuar o pagamento até a data do vencimento.
                    </li>
                </ul>
                <br />
                <br />
                <b>Ganhe gratuitamente</b> uma flanela para limpeza de sua joia, preenchendo uma rápida pesquisa.
                <br />Para participar, clique neste link: <a href="https://forms.gle/dEZk6bD9WGWrmACw5" target="_blank">Clique aqui.</a> 
                <br />
                <br />
            </div>
         
            <div class="infoClient checkout-formbox ready">
                <header>
                    Identificação
                </header>
                <div><strong>Nome: </strong><span id="dataName"></span> <span id="dataSobrenome"></span></div>
                <div><strong>Email: </strong><span  id="dataEmail"></span></div>
                <!--<div><strong>Telefone: </strong><span id="dataPhone"></span></div>-->
            </div>
        </div>
        
        @checkoutBody()
        
        <!-- BEGIN GCR Language Code -->
        <script>
            window.___gcfg = {lang: 'pt-BR'};
        </script>
        <!-- END GCR Language Code -->
   
    </body>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{canopus_js()}}"></script>
<script src=" script('gnu.js') }}"></script>
<script type="text/javascript">
  checkPix=setInterval(function(){
    $('payment-payment-option.payment-on-shipping').on('click', function(){
     sessionStorage.setItem('pix','ok');
    })
  },500);
  
  $(document).ready(function() {
    $('button#CopyQrCode').on('click', () => {
      $('.pagament.pix .ui.divQrCode').select();
      document.execCommand('Copy');
      $('.divQrCode').blur();
      $('#CopyQrCode').attr('data-tooltip', 'Copiado1!');
    });
    var myFunc00 = function() {
        var intr00 = setInterval(function() {
            let fieldSaved = false;
            
            if( $('.canopus-cart-container .cart-table .canopus-cart-items').length > 0 && $('#div-observacao').length == 0 && $('.canopus-cart-empty').length == 0) {
              let html = `
                <div id="div-observacao" >
                  <div class="title">Possui alguma observação do pedido?</div>
                  <div class="content">
                    <input type="text" name="observacao" class="form-control" placeholder="Digite aqui ">
                    <a href="javascript:;" id="btn-adicionar">Adicionar</a>
                  </div>
                </div>
              `
                $('.canopus-cart-container .cart-table .canopus-cart-items').append(html)
                
              $('#btn-mostrar').on('click', function(){
                $(this).addClass('hide')
                $('#div-observacao').removeClass('hide')
              })
    
              let $form = $('#btn-adicionar')
              $form.on('click', function(e) {
                if($('input[name="observacao"]').val().length > 0) {
                    $('input[name="observacao"]').prop('disabled', true)
                }
                
                let $observacao = $(this).prev()
    
                if( fieldSaved ) {
                  fetchDest('DELETE', $observacao.val(), () => {
                    fetchDest('POST', $observacao.val(), (data) => {
                      if( data ) {
                        iziToast.success({
                          title: 'Observação atualizada!',
                          timeout: 3000
                        })
                      }
                      fieldSaved = true
                    })
                  })
                } else {
                  fetchDest('POST', $(this).prev().val(), (data) => {
    				if( data ) {
    					iziToast.success({
    						title: 'Observação salva!',
    						timeout: 3000
    					})
    				}
                    fieldSaved = true
                  })
                }
              })
            }
        
            function fetchDest(method, observacao, callback) {
        			let properties = { slug: 'observacao' }
        			method == 'POST' ? properties.value = observacao : false
        
              if( method == 'POST' ) {
                $.post('/checkout/cart/extra-fields', properties).done((data) => callback(data))
              } else {
                $.removeData('/checkout/cart/extra-fields', properties).done((data) => callback(data))
              }
            }
        }, 300)
    }
 
    myFunc00();
    
    var myFunc01 = function() {
     var intr = setInterval(function() {
        var url = window.location.pathname;
        if(url === '/checkout/completed') {
            $('completed-title p.mx-auto').append($('#fechamento-sucesso'))
            $('completed-title p.mx-auto #fechamento-sucesso').removeClass('hide')
    
            clearInterval(intr);
        } 
     }, 500)
    }
    myFunc01();
    
    const myInterval = setInterval(checkInfo, 1000);
    function myStopFunction() {
        clearInterval(myInterval);
    }  

    const myPix = setInterval(checkPix, 1000);
    function checkPix() {
      if (sessionStorage.pix == 'ok') {
          $('.pagament.pix.hide').removeClass('hide')
          setTimeout( ()=>{
              localStorage.removeItem('pix', 'ok');
          },1000)
      } 
    }

    function checkInfo(){
        var nameCheck = sessionStorage.getItem('nameClientCheckout'); 
        if(nameCheck != null) {
           console.log('ja tem um nameSelecionado');
        }else{
           NameClient = $('.canopus-payment-identification span.name.masked.unmasked').text();
           emailClient = $('.canopus-payment-identification span.email.masked.unmasked.small').text();   
           if(NameClient == ''){
            console.log('não foi preenchido')
           }else{
            sessionStorage.setItem('nameClientCheckout',NameClient);
            sessionStorage.setItem('emailClientCheckout',emailClient);
            $('.infoClient span#dataName').html(NameClient)
            $('.infoClient span#dataEmail').html(emailClient)
            function myStopFunction() {
                clearInterval(myInterval);
                console.log('parar a verificacao');
                
            }
            setTimeout(myStopFunction,1000)


           }
        }  
    }
    
  })
</script>
</html>