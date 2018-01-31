@extends('app')

@section('head_scripts')
    <script type="text/javascript">
        $products = [
            @foreach ($categories as $category => $products)
                @foreach ($products as $product)
                    {
                        id: "{{ $product->id }}",
                        name: "{{ $product->name }}",
                        description: "{{ $product->description }}",
                        price: {{ $product->price }},
                        imageUrl: "{{ $product->imageUrl }}"
                    },
                @endforeach
            @endforeach
        ];   
    </script>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            $(".styled").uniform({
                radioClass: 'choice'
            });
        });
    </script>
@endsection

@section('content')
    <div id="store-page" class="content">
        @include('store.header')

        @php ($index = 0)
        @foreach ($categories as $category => $products)
            <div class="mt-40">
                <h1 class="mb-20">{{ $category }}</h1>
            </div>

            <div class="row equal">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-3">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="thumb thumb-fixed">
                                    <a data-toggle="modal" data-target="#modal_product" onclick="event.preventDefault(); productModal.selected({{ $index++ }})">
                                        <img src="{{ $product->imageUrl }}">
                                        <span class="zoom-image"><i class="icon-plus2"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="panel-body panel-body-accent text-center">
                                <h6 class="text-semibold no-margin"><a href="#" class="text-default">{{ $product->name }}</a></h6>

                                <ul class="list-inline list-inline-separate mb-10">
                                    <li><a href="#" class="text-muted">{{ $product->description }}</a></li>
                                </ul>

                                <h3 class="no-margin text-semibold">${{ $product->price }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    @include('store.modal-product')
@endsection