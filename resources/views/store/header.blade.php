<div class="media panel panel-body stack-media-on-mobile store">
    <div class="media-left" style="background-image: url('{{ $store->imageUrl }}');">
        <img src="{{ $store->imageUrl }}" width="96" alt="">
    </div>

    <div class="media-body">
        <h2 class="media-heading text-semibold">
            <a class="text-default" href="#">{{ $store->name }}</a>
        </h2>

        <ul class="list-inline list-inline-separate text-light">
            @foreach ($store->tags as $tag)
                <li><span class="text-muted text-size-large">{{ $tag->name }}</span></li>
            @endforeach
        </ul>

        <ul class="list-inline list-inline-separate text-light">
            <li><span class="text-size-large">$25</span></li>
            <li><span class="text-size-large">30 min</span></li>
        </ul>
    </div>
</div>