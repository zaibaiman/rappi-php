@extends('app', ['hideCart' => true])

@section('content')
    <div id="checkout_page" class="content">
        <div class="row">
            @include('checkout.resume')
            
            <div class="col-lg-5">
                <div class="panel panel-flat mt-20">
                    <div class="panel-heading">
                        <h6 class="panel-title">@lang('checkout.shipping_info')</h6>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="/checkout" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="item-count" v-bind:value="items.length">
                            <div v-for="(item, index) in items">
                                <input type="hidden" :name="'item-id-' + index" v-bind:value="item.id">
                                <input type="hidden" :name="'item-name-' + index" v-bind:value="item.name">
                                <input type="hidden" :name="'item-description-' + index" v-bind:value="item.description">
                                <input type="hidden" :name="'item-price-' + index" v-bind:value="item.price">
                            </div>
                            <fieldset class="content-group">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">@lang('checkout.address')</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="street-1" class="form-control" placeholder="@lang('checkout.street_1')" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2"></label>
                                    <div class="col-lg-10">
                                        <input type="text" name="street-2" class="form-control" placeholder="@lang('checkout.street_2')" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">@lang('checkout.phone')</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="phone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">@lang('checkout.payment_method')</label>
                                    <div class="col-lg-10">
                                        <select name="payment-method" class="form-control">
                                            <option value="cash">@lang('checkout.payment_method_opt_cash')</option>
                                            <option value="credit-card">@lang('checkout.payment_method_opt_card')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">@lang('checkout.coupon')</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="coupon" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary" style="width: 100%">@lang('checkout.make_order') 
                                    <i class="icon-arrow-right14 position-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection