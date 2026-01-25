<div class="product-block custom-css">
                            <a @if($item->urls->first()) href="{{url($item->urls->first()->url)}}" @endif>
                                <figure class="img-card image -vertical">
                                     @include(@engine_view('component_flag_categoria'))
                                    <img class="principal"
                                        @if($item->extraFields->has('thumb_produto'))
                                    src="https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                                    @else
                                    src="{{ thumb($item->main_image->source) }}"
                                    @endif
                                
                                        alt="{{ ($cat = collect($item->categories)
        ->sortBy('id')
        ->filter(fn($cat) => 
            ($cat->depth == 0 && in_array($cat->id, [1,2,3,6,45]))
            || ($cat->depth == 1 && $cat->id == 55)
        )
        ->first()
    )
    ? (
        $cat->id == 1 
            ? 'Elegância das ' . $item->identification->first()->name . ' com visual moderno e detalhes refinados'
        : (
            $cat->id == 2 
                ? 'Exclusividade do ' . $item->identification->first()->name . ' com visual único e detalhes sofisticados'
            : (
                $cat->id == 3 
                    ? 'Destaque para ' . $item->identification->first()->name . ' com design sofisticado e acabamento elegante'
                : (
                    $cat->id == 6 
                        ? 'Sofisticação do ' . $item->identification->first()->name . ' com toque elegante e acabamento diferenciado'
                    : (
                        $cat->id == 45 
                            ? 'Texto para categoria 45 mais ' . $item->identification->first()->name . '.'
                        : (
                            $cat->id == 55 
                                ? 'Beleza do ' . $item->identification->first()->name . ' com brilho marcante e design contemporâneo'
                            : 'Imagem do Produto ' . $item->identification->first()->name . ' '
                        )
                    )
                )
            )
        )
    )
    : 'Imagem do Produto ' . $item->identification->first()->name . ' '
}}" style="opacity: 1 !important;" >

                                 
                           
</figure>
                            </a>
                            <div class="description">
                            <div class="receiveImgs">

@if($item->extraFields->has('agrupamentos_de_produtos_1') && $item->extraFields->get('agrupamentos_de_produtos_1') !== null)
<div class="outlineColorImage active main-image"
    rel="canonical"
    data-link="@if($item->extraFields->has('thumb_produto')) https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }} @else {{ thumb($item->main_image->source) }} @endif"
    data-url="@if($item->urls->first()) {{url($item->urls->first()->url)}} @endif"
    data-name="{{ $item->identification->first()->name }}"
    data-nameColor="{{ $item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
    data-imagens-second="@if($item->extraFields->has('imagem_produto_02') && $item->extraFields->get('imagem_produto_02')->values->isNotEmpty())
    {{ $item->extraFields->get('imagem_produto_02')->values->first()->source }}
@else
@if($item->extraFields->has('thumb_produto')) https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }} @else {{ thumb($item->main_image->source) }} @endif
@endif"
    data-price="@if($item->extraFields->has('valor_base')) {{ $item->extraFields->get('valor_base')->values->first()->value }} @else 10x R$ {{ number_format($item->prices->first()->price / 10, 2, ',', '.') }} @endif">
    <div
        class="imageItem {{ ltrim(str_replace(['-18k', 'ouro'], ['', ''], str_replace(' ', '-', strtolower($item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))), '-') }}">

    </div>
    <div class="nameItem">
        <span>
            @if($item->extraFields->get('selecionar_cor_do_ouro') && $item->extraFields->get('selecionar_cor_do_ouro')->values->isNotEmpty())
    {{ $item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
@endif

        </span>
    </div>
</div>
@else

@endif


@if($item->extraFields->has('agrupamentos_de_produtos') && $item->extraFields->get('agrupamentos_de_produtos') !== null)


@foreach($item->extraFields->get('agrupamentos_de_produtos')->values as $value)
@if (is_string($value) && !empty($value))
<div style="display: none">
    {{ $value }}
</div>
@endif

@if ($item->extraFields && $value->record && $value->record->extraFields && $value->record->extraFields->has('thumb_produto'))
<div class="outlineColorImage {{ url($value->record->urls->first()->url) === url($item->urls->first()->url) ? 'active' : '' }}"
    rel="canonical"
    data-link="https://assets.betalabs.net/production/reisman/{{ $value->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
    data-url="{{ url($value->record->urls->first()->url) }}"
    data-imagens-second="
@if($value->record->extraFields->has('fotos_novas') && $value->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim')
    @if($value->record->extraFields->has('imagem_produto_05'))
        {{ $value->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_04'))
        {{ $value->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_03'))
        {{ $value->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_02'))
        {{ $value->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_01'))
        {{ $value->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas
    @endif
@else
    não tem imagens novas
@endif
"
    data-name="{{ $value->record->identification->first()->name }}"
    data-nameColor="{{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
    data-price="{{ $value->record->extraFields->get('valor_base')->values->first()->value  }}">
    <div
        class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
    </div>
    <div class="nameItem">
        <span>

            {{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}

        </span>
    </div>
</div>
@endif
@endforeach



@else
<!-- Trate o caso em que 'agrupamentos_de_produtos' não está definido ou é null -->
@endif
@if($item->extraFields->has('agrupamentos_de_produtos_1') && $item->extraFields->get('agrupamentos_de_produtos_1') !== null)


@foreach($item->extraFields->get('agrupamentos_de_produtos_1')->values as $value)
@if (is_string($value) && !empty($value))
<div style="display: none">
    {{ $value }}
</div>
@endif

@if ($item->extraFields && $value->record && $value->record->extraFields && $value->record->extraFields->has('thumb_produto'))
<div class="outlineColorImage {{ url($value->record->urls->first()->url) === url($item->urls->first()->url) ? 'active' : '' }}"
    rel="canonical"
    data-link="https://assets.betalabs.net/production/reisman/{{ $value->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
    data-imagens-second="
@if($value->record->extraFields->has('fotos_novas') && $value->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim')
    @if($value->record->extraFields->has('imagem_produto_05'))
        {{ $value->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_04'))
        {{ $value->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_03'))
        {{ $value->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_02'))
        {{ $value->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_01'))
        {{ $value->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas
    @endif
@else
    não tem imagens novas
@endif
"

    data-url="{{ url($value->record->urls->first()->url) }}"
    data-name="{{ $value->record->identification->first()->name }}"
     data-nameColor="{{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
    data-price="{{ $value->record->extraFields->get('valor_base')->values->first()->value  }}">
    
    <div
        class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
    </div>
    <div class="nameItem">
        <span>
            {{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
        </span>
    </div>
</div>
@endif
@endforeach



@else
<!-- Trate o caso em que 'agrupamentos_de_produtos_1' não está definido ou é null -->
@endif
@if($item->extraFields->has('agrupamentos_de_produtos_2') && $item->extraFields->get('agrupamentos_de_produtos_2') !== null)


@foreach($item->extraFields->get('agrupamentos_de_produtos_2')->values as $value)
@if (is_string($value) && !empty($value))
<div style="display: none">
    {{ $value }}
</div>
@endif

@if ($item->extraFields && $value->record && $value->record->extraFields && $value->record->extraFields->has('thumb_produto'))
<div class="outlineColorImage {{ url($value->record->urls->first()->url) === url($item->urls->first()->url) ? 'active' : '' }}"
    rel="canonical"
    data-link="https://assets.betalabs.net/production/reisman/{{ $value->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
    data-imagens-second="
@if($value->record->extraFields->has('fotos_novas') && $value->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim')
    @if($value->record->extraFields->has('imagem_produto_05'))
        {{ $value->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_04'))
        {{ $value->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_03'))
        {{ $value->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_02'))
        {{ $value->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_01'))
        {{ $value->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas
    @endif
@else
    não tem imagens novas
@endif
"
    data-url="{{ url($value->record->urls->first()->url) }}"
    data-name="{{ $value->record->identification->first()->name }}"
     data-nameColor="{{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
    data-price="{{ $value->record->extraFields->get('valor_base')->values->first()->value  }}">
    <div
        class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
    </div>
    <div class="nameItem">
        <span>
            {{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
        </span>
    </div>
</div>
@endif
@endforeach



@else
<!-- Trate o caso em que 'agrupamentos_de_produtos_2' não está definido ou é null -->
@endif

</div>
                                <h3 class="nome-produto-spot">
                                    {{ str_replace(['ouro', '18k'], '', $item->identification->first()->name) }}
                                </h3>
                           
                                <div class="name-color-product">
                                    <span>
                                       @if($item->extraFields->get('selecionar_cor_do_ouro') && $item->extraFields->get('selecionar_cor_do_ouro')->values->isNotEmpty())
    {{ $item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
@endif

                                    </span>
                                </div>
                                
                                <div class="preco-produto-spot1">
                                    @if($item->extraFields->has('valor_base') && strpos($item->extraFields->get('valor_base')->values->first()->value, ' ou ') !== false)
                                        
                                        <div style="display: flex; flex-direction: column; align-items: flex-start; line-height: 1; margin-top: 10px; font-family: 'Spectral', serif;">
                                            
                                            <div style="color: #555; display: flex; align-items: baseline;">
                                                {{-- R$ --}}
                                                <span style="font-size: 18px; font-weight: 600; margin-right: 1px; color: #2C9E16;">R$</span>
                                                
                                                {{-- Valor Grande --}}
                                                <span style="font-size: 19px; font-weight: 600; color: #2C9E16;">
                                                    {{ trim(str_replace(['R$', ' à vista'], '', explode(' ou ', $item->extraFields->get('valor_base')->values->first()->value)[1])) }}
                                                </span>
                                                
                                                {{-- NO PIX --}}
                                                <span style="font-size: 14,5px; letter-spacing: 1px; margin-left: 8px; color: #2C9E16; font-weight: 400;">no pix</span>
                                            </div>

                                            {{-- Linha 2: Parcelamento --}}
                                            <div style="font-size: 14px; color: #888; font-weight: 300; margin-top: 4px;">
                                                ou em {{ explode(' ou ', $item->extraFields->get('valor_base')->values->first()->value)[0] }} no cartão
                                            </div>

                                        </div>

                                    @else
                                        <div style="font-family: 'Spectral', serif; font-size: 18px; color: #666; margin-top: 10px;">
                                            @if($item->extraFields->has('valor_base'))
                                                {{ $item->extraFields->get('valor_base')->values->first()->value }}
                                            @else
                                                10x R$ {{ number_format($item->prices->first()->price / 10, 2, ',', '.') }}
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>


                        </div>