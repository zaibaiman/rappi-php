<div class="col-lg-5 col-lg-offset-1">
    <div class="panel panel-flat mt-20">
        <div class="panel-heading">
            <h6 class="panel-title">@lang('checkout.resume')</h6>
        </div>
        <table class="table" v-cloak>
            <thead>
                <tr>
                    <th colspan="2">@lang('checkout.product')</th>
                    <th class="text-right">@lang('checkout.price')</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in items">
                    <td class="no-padding-right" style="width: 45px;">
                        <img :src="item.imageUrl" height="60" class="" alt="">
                    </td>
                    <td>
                        <span class="text-semibold">@{{ item.name }}</span>
                        <div class="text-muted text-size-small">
                            @{{ item.addons }}
                        </div>
                    </td>
                    <td class="text-right">
                        <h6 class="no-margin text-semibold">$@{{ item.price }}</h6>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>