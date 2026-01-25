<style>
.pages-guia-cores .bloco-1 {
  background-color: #F1EFEE;
}
@media screen and (max-width: 1053px) {
  .pages-guia-cores .bloco-1 .container {
    padding: 0;
  }
}
.pages-guia-cores .grid-bloco {
  display: flex;
  flex-direction: row;
}
@media screen and (max-width: 1053px) {
  .pages-guia-cores .grid-bloco {
    flex-direction: column;
  }
}
.pages-guia-cores .grid-bloco > div {
  width: 100%;
}
@media screen and (min-width: 1053px) {
  .pages-guia-cores .grid-bloco > div {
    width: 50%;
  }
}
.pages-guia-cores .grid-bloco .div-img {
  order: -1;
}
@media screen and (min-width: 1053px) {
  .pages-guia-cores .grid-bloco .div-img {
    order: 2;
  }
}
.pages-guia-cores .grid-bloco .div-text {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
@media screen and (max-width: 1053px) {
  .pages-guia-cores .grid-bloco .div-text {
    padding: 41px 24px;
  }
}
.pages-guia-cores .grid-bloco .div-text .context {
  max-width: 400px;
}
.pages-guia-cores .grid-bloco .div-text .context p {
  margin-top: 24px;
  display: block;
  font-family: Spectral, serif;
  color: #727272;
}
.pages-guia-cores .grid-bloco .div-text .context h3 {
  font-family: Magnificent, sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  letter-spacing: 3px;
}
.pages-guia-cores .bloco-2 {
  padding: 73px 0;
}
.pages-guia-cores .bloco-2 h3.title {
  font-family: Magnificent, sans-serif;
  text-align: center;
  font-size: 20px;
  letter-spacing: 3px;
  text-transform: uppercase;
  margin-bottom: 80px;
}
.pages-guia-cores .bloco-2 .grid-column-item {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  row-gap: 56px;
}
@media screen and (max-width: 767px) {
  .pages-guia-cores .bloco-2 .grid-column-item {
    grid-template-columns: repeat(1, 1fr);
  }
}
.pages-guia-cores .bloco-2 .grid-column-item .item-text {
  font-family: Spectral, serif;
  max-width: 254px;
  margin: auto;
}
.pages-guia-cores .bloco-2 .grid-column-item .item-text h4 {
  font-size: 16px;
  color: #1e1613;
  font-weight: 400;
  letter-spacing: 1px;
}
.pages-guia-cores .bloco-2 .grid-column-item .item-text p {
  font-size: 14px;
  font-weight: 400;
  color: #727272;
}
.pages-guia-cores .bloco-4 {
  padding-top: 104px;
  padding-bottom: 104px;
}
.pages-guia-cores .bloco-4 img {
  width: 100%;
}
.pages-guia-cores .bloco-4 .div-text {
  order: 3;
  background-color: #000;
  color: #Fff;
}
.pages-guia-cores .bloco-4 .div-text h3 {
  font-size: 32px;
  color: #fff;
}
.pages-guia-cores .bloco-4 .div-text p {
  color: #fff !important;
  margin-top: 24px;
  margin-bottom: 40px;
}
.pages-guia-cores .bloco-4 .div-text a {
  border: 1px solid #F1EFEE;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 500;
  border-radius: 4px;
  padding: 6px 14px;
}
.pages-guia-cores .bloco-5 h3.title {
  font-size: 32px;
  color: #1E1613;
  text-align: center;
  text-transform: uppercase;
  max-width: 745px;
  margin: auto;
}
.pages-guia-cores .bloco-5 p {
  max-width: 745px;
  margin: auto;
  margin-top: 24px;
  margin-bottom: 104px;
  color: #727272;
  text-align: center;
}
.pages-guia-cores .bloco-5 img {
  width: 100%;
}
.pages-guia-cores .bloco-6 {
  padding: 104px 0;
}
.pages-guia-cores .bloco-6 .grid-bloco {
  gap: 10px;
}
.pages-guia-cores .bloco-6 .grid-bloco .context {
  display: flex;
  flex-direction: column;
  gap: 56px;
  max-width: 456px;
}
.pages-guia-cores .bloco-6 .grid-bloco .content-item {
  text-align: left;
}
.pages-guia-cores .bloco-6 .grid-bloco .content-item p {
  margin: 0;
  text-align: left;
}
.pages-guia-cores .bloco-6 .grid-bloco .content-item h4 {
  font-size: 20px;
  margin-bottom: 24px;
  letter-spacing: 3px;
  color: #1E1613;
  text-transform: uppercase;
}
.pages-guia-cores .bloco-6 .div-text {
  background-color: #F1EFEE;
}
.pages-guia-cores .bloco-6 .grid-bloco.first .div-text {
  order: 3;
}
.pages-guia-cores .bloco-6 .grid-bloco.second {
  padding-top: 10px;
}
.pages-guia-cores .bloco-6 .grid-bloco.second .div-text p {
  margin: 0;
}
.pages-guia-cores h3 {
  font-family: Magnificent, sans-serif !important;
}
.pages-guia-cores .bloco-faq h4.title {
  color: #1E1613;
  font-size: 20px;
  text-transform: uppercase;
  margin-bottom: 40px;
  display: block;
  letter-spacing: 3px;
}
.pages-guia-cores .bloco-faq .faq-content {
  margin-bottom: 16px;
}
.pages-guia-cores .bloco-faq .faq-content .faq-item.is-open .faq-icon svg {
  transform: rotate(180deg);
}
.pages-guia-cores .bloco-faq .faq-content .faq-item button.faq-question {
  background: transparent;
}
.pages-guia-cores .bloco-faq .faq-content .faq-answer {
  max-width: 500px;
  margin-top: 16px;
  color: #727272;
  font-size: 14px;
  letter-spacing: 1px;
}
.pages-guia-cores .bloco-faq .grid-faq {
  display: flex;
  flex-direction: column;
  align-items: center;
}
@media screen and (min-width: 1054px) {
  .pages-guia-cores .bloco-faq .grid-faq {
    flex-direction: row;
  }
  .pages-guia-cores .bloco-faq .grid-faq > div {
    width: 50%;
  }
}
.pages-guia-cores .bloco-video {
  padding-top: 70px;
  padding-bottom: 104px;
}
.pages-guia-cores .bloco-video .video-vimeo {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
  overflow: hidden;
  max-width: 100%;
}
.pages-guia-cores .bloco-video .video-vimeo iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.pages-guia-cores .bredcrumb-new-page {
  padding: 9px 0;
  border-bottom: 1px solid #DEDEDE;
  padding-left: 80px;
  position: absolute;
  z-index: 9999999999999;
  width: 100%;
}/*# sourceMappingURL=colores.css.map */

.pages-guia-cores .link-vitrine {
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.pages-guia-cores .link-vitrine a {
  width: 100%;
  text-align: right;
  color: #1E1613;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 400;
}

</style>

 <div class="pages-guia-cores">
                <div class="bloco-1">
                        <div class="container-1">
                             <div class="bredcrumb-new-page">
                                <nav aria-label="Você está aqui:" class="breadcrumb-container">
                                <ol class="breadcrumb-new">
                                    <li>
                                    <a href="https://www.reisman.com.br/">
                                        <span>Diamantes </span>
                                    </a>
                                    <span aria-hidden="true" style="color: #bbb; margin: 0 8px;">|</span>
                                    </li>
                                    <li>
                                    <a href="#">
                                        <span><strong style="font-weight: 400;color: #1E1613;">Guia para Cores</strong></span>
                                    </a>
                                
                                    </li>
                                </ol>
                                </nav>
                            </div>
                    <div class="grid-bloco">
                        <div class="div-text">
                            <div class="context">
                                <h3>Guia para escala de cores</h3>
                                <p>
                                    Aprenda tudo que você precisa saber sobre a escala de cores de diamantes e escolha o diamante
                                    perfeito para você.
                                </p>
                            </div>
                        </div>
                        <div class="div-img">
                            <img src="https://cdn.awsli.com.br/1736/1736688/arquivos/guia-cores-bloco-1.png"
                                alt="Texto alternativo para a imagem">
                        </div>
                    </div>
                </div>
                </div>
                <div class="bloco-2">
                    <div class="container">
                        <h3 class="title">
                            nesse guia você vai encontrar
                        </h3>
                        <div class="grid-column-item">
                            <div class="item-text">
                                <h4>Entendendo a Cor dos Diamantes</h4>
                                <p>Descubra como a cor influencia o valor e a raridade dos diamantes. </p>
                            </div>
                             <div class="item-text">
                                <h4>Escala de cor dos diamantes (GIA)</h4>
                                <p>Conheça a escala internacional usada para avaliar a cor dos diamantes e sua importância na escolha da joia ideal. </p>
                            </div>
                            <div class="item-text">
                                <h4>Tamanho do diamante</h4>
                                <p>Entenda como o tamanho do diamante pode influenciar a percepção de sua cor e o impacto no brilho. </p>
                            </div>
                            <div class="item-text">
                                <h4>Formato do diamante</h4>
                                <p>Explore como o corte e formato do diamante afetam a percepção da cor e o estilo da joia. </p>
                            </div>
                             <div class="item-text">
                                <h4>Configuração do metal</h4>
                                <p>Descubra como a escolha do metal da joia pode destacar ou suavizar a cor do diamante. </p>
                            </div>
                             <div class="item-text">
                                <h4>Escolhendo a cor ideal</h4>
                                <p>Saiba como equilibrar a cor do diamante com seu gosto pessoal e o design da joia perfeita. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bloco-3">
                    <div class="container">
                        <div class="grid-bloco">
                            <div class="div-text">
                                <div class="context">
                                    <h3>Entendendo a Cor dos Diamantes</h3>
                                    <p>
                                    A cor de um diamante é uma das características mais importantes na sua classificação e valor. Ao contrário do que muitos imaginam, a cor de um diamante se refere, na verdade, à ausência de cor. Quanto mais incolor o diamante, mais raro e valioso ele é. Um diamante perfeito é transparente, como uma gota de água pura. Outros podem apresentar um leve tom amarelado ou até cores mais intensas, como rosa ou azul.
                                    </p>
                                </div>
                            </div>
                            <div class="div-img">
                        <img src="https://cdn.awsli.com.br/1736/1736688/arquivos/guia-cores-bloco-3.png" alt="Texto alternativo para a imagem" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bloco-4">
                    <div class="container">
                        <div class="grid-bloco">
                            <div class="div-text">
                                <div class="context">
                                    <h3>coleção de diamantes certificados reisman</h3>
                                    <p>
                                Explore a nossa coleção exclusiva de diamantes certificados e encontre a joia que reflete seu momento mais especial. Qualidade garantida pelo GIA para um brilho eterno.
                                    </p>

                                    <a href="#">Quero Conhecer</a>
                                </div>
                            </div>
                            <div class="div-img">
                       <img src="https://cdn.awsli.com.br/1736/1736688/arquivos/guia-cores-bloco-4.png" alt="Texto alternativo para a imagem" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bloco-5">
                    <div class="container">
                        <h3 class="title">
                            Escala de Cor dos Diamantes (GIA)
                        </h3>
                        <p>Para padronizar a avaliação da cor dos diamantes, o Gemological Institute of America (GIA) desenvolveu uma escala que vai de D (completamente incolor) até Z (tons amarelados, acinzentados ou marrons). Essa escala é a referência mundial para determinar a qualidade da cor de um diamante.</p>

                        <div class="img-context">
                         <img src="https://cdn.awsli.com.br/1736/1736688/arquivos/guia-cores-bloco-5.png" alt="Texto alternativo para a imagem" >
                    </div>
                </div>
                <div class="bloco-6">
                    <div class="container">
                        <div class="grid-bloco first">
                            <div class="div-text">
                                <div class="context">
                                   <div class="content-item">
                                        <h4>Tamanho do Diamante</h4>
                                        <p>
                                            Diamantes maiores tendem a mostrar mais sua cor. Por exemplo, um diamante de 2 quilates com grau J parecerá mais amarelado que um diamante de 0,5 quilate com a mesma classificação de cor.
                                        </p>
                                   </div>
                                   <div class="content-item">
                                        <h4>Formato do Diamante</h4>
                                        <p>
                                           Formatos com cortes brilhantes, como o redondo, escondem melhor a cor do que formatos com facetas largas, como o corte esmeralda, que pode evidenciar mais a tonalidade do diamante.
                                        </p>
                                   </div>
                                    <div class="content-item">
                                        <h4>Configuração do Metal</h4>
                                        <p>
                                          O metal da joia também influencia a forma como a cor do diamante é percebida. Metais como platina ou ouro branco realçam a pureza dos diamantes incolores (D-F), enquanto o ouro amarelo ou rosé pode complementar as pedras com uma leve coloração, suavizando o contraste.
                                        </p>
                                   </div>
                                </div>
                            </div>
                            <div class="div-img">
                                    <img src="https://cdn.awsli.com.br/1736/1736688/arquivos/guia-cores-bloco-6.png" alt="Texto alternativo para a imagem" >
                            </div>
                        </div>
                        <div class="grid-bloco second">
                             <div class="div-img">
                                 <img src="https://cdn.awsli.com.br/1736/1736688/arquivos/guia-cores-bloco-7.png" alt="Texto alternativo para a imagem" >
                            </div>
                            <div class="div-text">
                                <div class="context">
                                    <h3>Escolhendo a Cor Ideal</h3>
                                    <p>
                                   Ao escolher o diamante perfeito, é importante equilibrar os 4 Cs (cor, corte, quilates e clareza). Os diamantes incolores são considerados os mais raros e cobiçados, mas a preferência pessoal e o estilo da joia desempenham um papel fundamental na escolha. Se você prefere um visual mais clássico e brilhante, os diamantes D-F são ideais. No entanto, se busca um toque mais quente ou vintage, os diamantes com tons suaves também são uma excelente opção.
                                    </p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="bloco-6">
                @include(@engine_view('component_home_product3'))
            </div>
               <div class="bloco-faq">
                    <div class="container">
                        <div class="grid-faq">
                        <div class="bloco-text-faq">
                                <h4 class="title">Dúvidas frequentes</h4>

                                <div class="faq-content">
                                    <div class="faq-item">
                                            <button class="faq-question" aria-expanded="false">
                                                <span>O que é uma aliança de noivado estilo Halo?</span>
                                                <span class="faq-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 6L8 10L12 6" stroke="#1E1613" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
                                            </button>
                                            <div class="faq-answer" hidden>
                                                Uma aliança de noivado estilo Halo é caracterizada por uma pedra central cercada por uma "aura" de pedras menores. Esse design adiciona brilho e destaque à pedra principal, criando um visual sofisticado e encantador que atrai muitos casais.
                                            </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="faq-item">
                                            <button class="faq-question" aria-expanded="false">
                                                <span>Qual a diferença entre uma aliança de noivado Halo e uma solitária?</span>
                                                <span class="faq-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 6L8 10L12 6" stroke="#1E1613" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
                                            </button>
                                            <div class="faq-answer" hidden>
                                                Uma aliança de noivado estilo Halo é caracterizada por uma pedra central cercada por uma "aura" de pedras menores. Esse design adiciona brilho e destaque à pedra principal, criando um visual sofisticado e encantador que atrai muitos casais.
                                            </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="faq-item">
                                            <button class="faq-question" aria-expanded="false">
                                                <span>Qual a diferença entre uma aliança de noivado Halo e uma solitária?</span>
                                                <span class="faq-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 6L8 10L12 6" stroke="#1E1613" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
                                            </button>
                                            <div class="faq-answer" hidden>
                                                Uma aliança de noivado estilo Halo é caracterizada por uma pedra central cercada por uma "aura" de pedras menores. Esse design adiciona brilho e destaque à pedra principal, criando um visual sofisticado e encantador que atrai muitos casais.
                                            </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="faq-item">
                                            <button class="faq-question" aria-expanded="false">
                                                <span>Qual a diferença entre uma aliança de noivado Halo e uma solitária?</span>
                                                <span class="faq-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 6L8 10L12 6" stroke="#1E1613" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
                                            </button>
                                            <div class="faq-answer" hidden>
                                                Uma aliança de noivado estilo Halo é caracterizada por uma pedra central cercada por uma "aura" de pedras menores. Esse design adiciona brilho e destaque à pedra principal, criando um visual sofisticado e encantador que atrai muitos casais.
                                            </div>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="faq-item">
                                            <button class="faq-question" aria-expanded="false">
                                                <span>Qual a diferença entre uma aliança de noivado Halo e uma solitária?</span>
                                                <span class="faq-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 6L8 10L12 6" stroke="#1E1613" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
                                            </button>
                                            <div class="faq-answer" hidden>
                                                Uma aliança de noivado estilo Halo é caracterizada por uma pedra central cercada por uma "aura" de pedras menores. Esse design adiciona brilho e destaque à pedra principal, criando um visual sofisticado e encantador que atrai muitos casais.
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="bloco-faq-img">
                            <img src="https://cdn.awsli.com.br/1736/1736688/arquivos/guia-cores-bloco-8.png" alt="Texto alternativo para a imagem" >
                        </div>
                        </div>
                    </div>
                </div>
                <div class="bloco-video">
                    <div class="container">
                        <div class="video-vimeo">
                        <iframe 
                            src="https://player.vimeo.com/video/76979871" 
                            frameborder="0" 
                            allow="autoplay; fullscreen; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                        </div>



                    </div>
                </div>
            
</div>            