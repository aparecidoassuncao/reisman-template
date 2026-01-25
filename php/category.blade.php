@if(!request()->ajax())
@extends(engine_view('base-novo'))
@section('conteudo')
@section('title', $category->model->name)
@section('page', 'categoria')
@section('metadescription', $category->model->extraFields->get('descricao_da_categoria_para_seo')->values->first()->value  )

@section('meta-name', $category->model->extraFields->get('meta_name_categoria')->values->first()->value)
@section('meta-property', $category->model->extraFields->get('meta_property_categoria')->values->first()->value)

</style>




 
@push('schema')
         <script  type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Reisman",
          "item": "https://www.reisman.com.br/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "{{ $category->model->name }}",
          "item": "{{ url()->current() ? strtok(url()->current(), '?') : '' }}"
        }
      ]
    }
  </script>
@endpush


<div class="bredcrumb-new row container">
    <nav aria-label="Você está aqui:" class="breadcrumb-container">
      <ol class="breadcrumb-new" >
        <li  >
          <a href="https://www.reisman.com.br/" >
            <span>Reisman</span>
          </a>
          <span aria-hidden="true" style="color: #bbb; margin: 0 8px;">|</span>
        </li>
        <li   >
          <a href="{{ url()->current() ? strtok(url()->current(), '?') : '' }}" >
            <span ><strong>{{ $category->model->name }}</strong></span>
          </a>
    
        </li>
      </ol>
    </nav>
</div>
      
<div id="title-categoria" class="text-center font-serif">
  <h1>{{ $category->model->name }}</h1>
</div>

<div class="retangulo"></div>

@if($category->model->extraFields->has('descricao_categoria'))
<div id="desc-categoria" class="text-center">
  {!! $category->model->extraFields->get('descricao_categoria')->values->first()->value !!}
</div>
@endif


 


<div class="filter-categoria row">
  <div class="preco">
    <h3 class="collapse-filtro " id="filtro-abrir-faixa"> Filtrar por preço <img alt="Icon Filtro" src="{{ path('arrow-filter.png') }}"> </h3> 
    
    <div id="filtros-faixa-preco" class="filtros-faixa-preco" >
            <div class="title"><strong>Mínimo</strong><strong>Máximo</strong></div>   
        @foreach($category->extraFields as $filtro)
          @if($filtro->slug == 'faixa_de_preco')
            <div class="filtro" id="filtro-{{ $filtro->slug }}">

                <div class="div-filtros" id="filtro-{{ $filtro->label }}">
      
                    @foreach($filtro->values->sortBy(function($filtro){
                      return $filtro->values;
                    }) as $value)
                    
                    <button type="button" class="item-filtro faixa-{{ $value->value }}" filtro="{{ $filtro->slug }}" item="{{ $value->value }}" value="{{ $value->value }}">
                        {{ $value->value }}
                    </button>
                    @endforeach
                
                </div>
                <div class="text-left">
                        <button type="button" class="filtrar preco" id="limpar">
                            <a href="{{ url()->current() }}">
                            Limpar filtros
                            </a>
                            </button>
                </div>
            </div>
          @endif
        @endforeach
        
    </div>
  </div>
</div>


<div id="produtos-categoria">
  <div class="row text-center" canopus-showcase-infinite-scroll>
@endif
    @foreach($category->collection as $item)
     
              

  <div class="col-lg-3 col-sm-12 coluna-spot-category card-product"
      @if($item->extraFields->has('faixa_de_preco'))
      preco="{{ $item->extraFields->get('faixa_de_preco')->values->first()->value }}"
      @endif
      >
           @include(engine_view('produto-item-novo'))

    
      </div>
    @endforeach
@if(!request()->ajax())    
  </div>
  @if($category->collection->isNotEmpty() && $category->collection->count() >= 12)
  <div class="div-carregar-mais text-center">
    <a href="javascript:;" class="text-center btn"  id="btn-carregar-mais" canopus-showcase-infinite-scroll-more>Carregar mais</a>
  </div>
  @endif
</div>
  
  <script>
         function clickOnScroll() {
    const btn = document.querySelector('.div-carregar-mais.text-center a#btn-carregar-mais');
    if (!btn) return;

    btn.click();
    console.log('Scroll detectado → botão clicado');
  }

  window.addEventListener('scroll', clickOnScroll, { passive: true });
  </script>

  	
@if($category->model->extraFields->has('titulo_blog_cat'))
<div class="div-blog text-center">
    <div class="title-blog">
      {{ $category->model->extraFields->get('titulo_blog_cat')->values->first()->value }}
    </div>
    <div class="retangulo"></div>
    <div class="row">
        @if($category->model->extraFields->has('titulo_materia_1_blog_cat'))
        <div class="col-lg-4 col-sm-12">
          <a @if($category->model->extraFields->has('link_materia_1_blog_cat')) href="{{ $category->model->extraFields->get('link_materia_1_blog_cat')->values->first->value->value }}" @endif>
            <div class="div-materia-blog">
              <div class="title-materia-blog">
                {{ $category->model->extraFields->get('titulo_materia_1_blog_cat')->values->first->value->value }}  
              </div>
              @if($category->model->extraFields->has('data_materia_1_blog_cat'))
              <div class="data-materia-blog">
                {{ $category->model->extraFields->get('data_materia_1_blog_cat')->values->first->value->value }}  
              </div>
              @endif
            </div>
          </a>
        </div>
        @endif
        @if($category->model->extraFields->has('titulo_materia_2_blog_cat'))
        <div class="col-lg-4 col-sm-12">
          <a @if($category->model->extraFields->has('link_materia_2_blog_cat')) href="{{ $category->model->extraFields->get('link_materia_2_blog_cat')->values->first->value->value }}" @endif>
            <div class="div-materia-blog">
              <div class="title-materia-blog">
                {{ $category->model->extraFields->get('titulo_materia_2_blog_cat')->values->first->value->value }}  
              </div>
              @if($category->model->extraFields->has('data_materia_2_blog_cat'))
              <div class="data-materia-blog">
                {{ $category->model->extraFields->get('data_materia_2_blog_cat')->values->first->value->value }}  
              </div>
              @endif
            </div>
          </a>
        </div>
        @endif
        @if($category->model->extraFields->has('titulo_materia_3_blog_cat'))
        <div class="col-lg-4 col-sm-12">
          <a @if($category->model->extraFields->has('link_materia_3_blog_cat')) href="{{ $category->model->extraFields->get('link_materia_3_blog_cat')->values->first->value->value }}" @endif>
            <div class="div-materia-blog">
              <div class="title-materia-blog">
                {{ $category->model->extraFields->get('titulo_materia_3_blog_cat')->values->first->value->value }}  
              </div>
              @if($category->model->extraFields->has('data_materia_3_blog_cat'))
              <div class="data-materia-blog">
                {{ $category->model->extraFields->get('data_materia_3_blog_cat')->values->first->value->value }}  
              </div>
              @endif
            </div>
          </a>
        </div>
        @endif
    </div>
    @if($category->model->extraFields->has('link_botao_ver_mais_cat'))
    <a href="{{ $category->model->extraFields->get('link_botao_ver_mais_cat')->values->first->value->value }} " class="btn btn-ver-mais">
      Ver mais
    </a>
    @endif
</div>
@endif


@if($category->model->extraFields->has('pergunta_1') || $category->model->extraFields->has('pergunta_2') || $category->model->extraFields->has('pergunta_3') || $category->model->extraFields->has('pergunta_4') || $category->model->extraFields->has('pergunta_5'))
  <div id="div-faq">
    <div class="title text-center">Dúvidas frequentes</div>
    <div class="retangulo"></div>
    <div id="div-perguntas">
        @if($category->model->extraFields->has('pergunta_1'))
        <div>
          <h2 id="pergunta-1065-{{ $category->model->name }}" class="div-pergunta";">
            {{ $category->model->extraFields->get('pergunta_1')->values->first()->value }}
            <img src="{{ path('icon-plus-faq.svg') }}" alt="Ícone da FAQ na categoria {{ $category->model->name }} - Pergunta 1">
          </h2>
          @if($category->model->extraFields->has('resposta_1'))
          <div id="resposta-1065-{{ $category->model->name }}" class="div-resposta hide">
            {!! $category->model->extraFields->get('resposta_1')->values->first()->value !!}
            {{--@if($faq->imagem_resposta != null)
            <div class="div-img-resposta">
              <img src="https://assets.betalabs.net/production/reisman/{{ $faq->imagem_resposta->values->first->source->file_path }}">
            </div>
            @endif--}}
          </div>
          @endif
        </div>
        @endif
        @if($category->model->extraFields->has('pergunta_2'))
        <div>
          <h2 id="pergunta-1066-{{ $category->model->name }}" class="div-pergunta";">
            {{ $category->model->extraFields->get('pergunta_2')->values->first()->value }}
            <img src="{{ path('icon-plus-faq.svg') }}" alt="Ícone da FAQ na categoria {{ $category->model->name }} - Pergunta 2">
          </h2>
          @if($category->model->extraFields->has('resposta_2'))
          <div id="resposta-1066-{{ $category->model->name }}" class="div-resposta hide">
            {!! $category->model->extraFields->get('resposta_2')->values->first()->value !!}
          </div>
          @endif
        </div>
        @endif
        @if($category->model->extraFields->has('pergunta_3'))
        <div>
          <h2 id="pergunta-1067-{{ $category->model->name }}" class="div-pergunta";">
            {{ $category->model->extraFields->get('pergunta_3')->values->first()->value }}
            <img src="{{ path('icon-plus-faq.svg') }}" alt="Ícone da FAQ na categoria {{ $category->model->name }} - Pergunta 3" >
          </h2>
          @if($category->model->extraFields->has('resposta_3'))
          <div id="resposta-1067-{{ $category->model->name }}" class="div-resposta hide">
            {!! $category->model->extraFields->get('resposta_3')->values->first()->value !!}
          </div>
          @endif
        </div>
        @endif
        @if($category->model->extraFields->has('pergunta_4'))
        <div>
          <h2 id="pergunta-1068-{{ $category->model->name }}" class="div-pergunta";">
            {{ $category->model->extraFields->get('pergunta_4')->values->first()->value }}
            <img src="{{ path('icon-plus-faq.svg') }}" alt="Ícone da FAQ na categoria {{ $category->model->name }} - Pergunta 4">
          </h2>
          @if($category->model->extraFields->has('resposta_4'))
          <div id="resposta-1068-{{ $category->model->name }}" class="div-resposta hide">
            {!! $category->model->extraFields->get('resposta_4')->values->first()->value !!}
          </div>
          @endif
        </div>
        @endif
        @if($category->model->extraFields->has('pergunta_5'))
        <div>
          <h2 id="pergunta-1069-{{ $category->model->name }}" class="div-pergunta";">
            {{ $category->model->extraFields->get('pergunta_5')->values->first()->value }}
            <img src="{{ path('icon-plus-faq.svg') }}" alt="Ícone da FAQ na categoria {{ $category->model->name }} - Pergunta 5">
          </h2>
          @if($category->model->extraFields->has('resposta_5'))
          <div id="resposta-1069-{{ $category->model->name }}" class="div-resposta hide">
            {!! $category->model->extraFields->get('resposta_5')->values->first()->value !!}
          </div>
          @endif
        </div>
        @endif
    </div>
  </div>
@endif

<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.div-pergunta').forEach(function(pergunta) {
    let resposta = pergunta.nextElementSibling;

    // Garante que é a .div-resposta
    while (resposta && !resposta.classList.contains('div-resposta')) {
      resposta = resposta.nextElementSibling;
    }

    if (resposta) {
      pergunta.addEventListener('click', function(e) {
        resposta.classList.toggle('hide'); // exibe ou oculta a resposta
      });
    }
  });
});
</script>



@endsection
@endif