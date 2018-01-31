@extends('app')

@section('content')
    <div class="content">
        <div class="row">
            <h1 class="ml-10 mb-20">@lang('stores.category')</h1>
            @foreach ($stores as $store)
                <div class="col-lg-4 col-sm-6 stores">
                    <div class="media panel panel-body stack-media-on-mobile store">
                        <div class="media-left" style="background-image: url('{{ $store->imageUrl }}');">
                            <img src="{{ $store->imageUrl }}" width="96">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading text-semibold">
                                <a class="text-default" href="/stores/{{ $store->id }}">{{ $store->name }}</a>
                            </h4>

                            <ul class="list-inline list-inline-separate text-light">
                                @foreach ($store->tags as $tag)
                                    <li><span href="#" class="text-muted">{{ $tag->name }}</span></li>
                                @endforeach
                            </ul>

                            <ul class="list-inline list-inline-separate text-light">
                                <li>$25</li>
                                <li>30 min</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection