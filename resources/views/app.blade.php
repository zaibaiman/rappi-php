@extends('main')

@section('root')
    @include('navbar', [
        'hideCart' => isset($hideCart) ? $hideCart : false, 
        'hideAccount' => isset($hideAccount) ? $hideAccount : false
    ])

    <div class="page-container">
        <div class="page-content">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

    @include('basket.basket')
@endsection
