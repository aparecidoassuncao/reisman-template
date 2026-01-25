<nav class="menu-new" aria-label="Menu principal">
  <ul class="menu-box-new">
    <li class="menu-top-new com-filhos text-center">
      <a href="/aliancas-de-casamento">Alianças</a>
        <!--@if(!starts_with(request()->path(), 'aliancas-de-casamento'))-->
        <!--    @include(@engine_view('menu_alianca'))-->
        <!--@endif    -->
    </li>
    <li class="menu-top-new com-filhos text-center">
      <a href="/aneis-de-noivado">Anéis de Noivado</a>
        <!--@if(!starts_with(request()->path(), 'aliancas-de-casamento'))-->
        <!--    @include(@engine_view('menu_aneis_noivado'))-->
        <!--@endif    -->
    </li>
    <li class="menu-top-new com-filhos text-center">
      <a href="/joias">Joias</a>
      <!--@if(!starts_with(request()->path(), 'aliancas-de-casamento'))-->
      <!--  @include(@engine_view('menu_joias'))-->
      <!--@endif  -->
    </li>
    <li class="menu-top-new com-filhos text-center">
      <a href="/aparadores-de-aliancas">Aparadores</a>
    </li>
    <li class="menu-top-new text-center">
      <a href="/loja-em-sao-paulo">Showroom</a>
    </li>
  </ul>
</nav>




