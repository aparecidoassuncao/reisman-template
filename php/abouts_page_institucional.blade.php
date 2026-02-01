@extends(engine_view('base-novo'))
@section('conteudo')
@section('title', 'Reisman Joias e Alianças')
@section('page', 'home')


@section('metadescription', 'Alianças de Casamento e Anéis de Noivado | Reisman 1967' )


  @foreach($banners->records as $sobre_banners)
            {{ $sobre_banners->sobre_bloco_01_titulo->values->first()->value }}
        @endforeach 


@include(@engine_view('component_svg'))


@endsection