@extends(engine_view('base'))
@section('conteudo')
@section('title', 'Dúvidas frequentes')
@section('metadescription', 'Dúvidas frequentes da nossa loja - Reisman ')
@if($duvidasfrequentesproduto->records->count() > 0)
  <div id="div-faq" style="padding-top: 30px">
    <div class="title text-center">
        <h1 style="font-size: 30px;">Dúvidas frequentes</h1>
    </div>
    <div class="retangulo"></div>
    <div id="div-perguntas">
      @foreach($duvidasfrequentesproduto->records as $faq)
        @if($faq->pergunta != null && $faq->resposta != null)
        <div>
          <h2 id="pergunta-{{ $faq->id }}" class="div-pergunta" style="all: unset; display: flex; align-items: center;">
            {{ $faq->pergunta->values->first->value->value }}
            <img src="{{ path('icon-plus-faq.svg') }}">
          </h2>
          <div id="resposta-{{ $faq->id }}" class="div-resposta hide">
            {!! $faq->resposta->values->first->value->value !!}
            @if($faq->imagem_resposta != null)
            <div class="div-img-resposta">
              <img src="https://assets.betalabs.net/production/reisman/{{ $faq->imagem_resposta->values->first->source->file_path }}">
            </div>
            @endif
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
@endif

@push('scripts')
<script>
    $('.div-pergunta').each(function(){
        $(this).on('click', function(){
            var numeroPergunta = $(this).attr('id').replace('pergunta-', '');
            var perguntaCorrespondente = $('#resposta-'+numeroPergunta);
            perguntaCorrespondente.toggleClass('hide');
            if(perguntaCorrespondente.hasClass('hide')) {
                $(this).find('img').attr('src', 'https://assets.betalabs.net/production/reisman/fonts/stores/1/icon-plus-faq.svg');
                perguntaCorrespondente.css('border-bottom', 'none');
                $(this).css('border-bottom', '1px solid #dededf');
            } else {
                $(this).find('img').attr('src', 'https://assets.betalabs.net/production/reisman/fonts/stores/1/icon-minus-faq.svg');
                perguntaCorrespondente.css('border-bottom', '1px solid #dededf');
                $(this).css('border-bottom', 'none');
            }
        });
    });
</script>
@endpush

@endsection