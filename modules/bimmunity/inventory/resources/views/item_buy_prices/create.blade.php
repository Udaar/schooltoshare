@extends('layouts.app')

@section('head')
@endsection

@section('content')
<section class="item-buy-price-create-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block captilize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJESURBVEhLzZTNS1RhFMavH4mKNQVmCIGrINoHUlItFDfqQpsYS5nmzvfkJUZcBCKDENIqd4Vtok2oCxE/sBbpQJHhyl3/Qev+BH/net7btZm5XW0WPvBw3vOc8z7nvZ9WvZBOp+9nMhlH07MhHo+3YvIMsxkYY91n23ZPNBptIZ8ij2rr6cHmdkx21GiYmCe+JH4gfiEeEg+IS47jXNJt4eAzH1GpAsVisU0iPSk444phEMacnhXpIb4m2nAXTsHn2lIdYg4/wWGVKsAzuIjRhqyJh3AW/sxmsw+Jd9ymaghjboDRK/rKxEnN99xCLQSZp1KpXnSHeJ1T3oW3tOQhcMA/zJ+irxEfYfIdfiOPaNkD2mahUOjQ9A8o1DQvlUqN6Pu8802c+gHmWRnCt3FZWzygv6X3pqbHCDI3YOMPTj9ETxlG4LwM07IH+uZgv6bB5qLRPCZrzAfJf5N3a+3d37cC7QL1bQbfUMlqQNyECxQq3nW0j/JAifKvWSU+hrNaPgExhyswoZJlJZPJa2z4LBspdBJva8kF5kjpZWrmtvSRL2rZA3qluQGinCwG5ZTzKrvQB/oLvoFj1PflirTsAq22uUD/huswxtvSTGM5kUhclRqaTR4hjhCnc7lcl7tJgRZsbuAfIidkwz0x1XJVhDY38A+B8kwiDOvV8gmc2tzAP4T7P4DBC/nItOzizOYG/iG6/prP569I7b/NDcwQrmKc2M2tko9stC7mBv4hmE6w3qqbuYEMwfQ9POAqnqh8XmBZR3ZJVt2kaKnVAAAAAElFTkSuQmCC">
                    Add Item Buy Price
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'itemBuyPrices.store']) !!}
                    @include('inventory::item_buy_prices.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
{{--  <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">ItemBuyPrice</span>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'itemBuyPrices.store']) !!}

                    @include('inventory::item_buy_prices.fields')

                 {!! Form::close() !!}
            </div>
        </div>
</div>  --}}
@endsection
