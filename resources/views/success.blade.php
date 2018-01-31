@extends('app', ['hideCart' => TRUE])

@section('scripts')
    <script type="text/javascript">
        $(function() {
            successPage.clearBasket();
        });
    </script>
@endsection

@section('content')
    <div id="success_page" class="content">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel">
                    <div class="panel-body text-center">
                        <div class="icon-object border-success text-success"><i class="icon-checkmark4"></i></div>
                        <h5 class="text-semibold">@lang('success.msg_1')</h5>
                        <p class="mb-15">@lang('success.msg_2')</p>
                        <a href="/" class="btn bg-success-400">@lang('success.continue')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
