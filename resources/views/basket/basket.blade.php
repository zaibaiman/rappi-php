<div id="modal_cart" class="modal right fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">@lang('basket.title')</h5>
            </div>

            <div class="modal-body">
                <div class="order-list">

                    @include('basket.basket-empty')
                    
                    <table class="table" v-if="items.length > 0">
                        <thead>
                            <tr>
                                <th colspan="2"></th>
                                <th></th>
                                <th width="15px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in items">
                                <td class="no-padding-right" style="width: 45px;">
                                    <img :src="item.imageUrl" height="60" class="" alt="">
                                </td>
                                <td>
                                    <span href="#" class="text-semibold">@{{ item.name }}</span>
                                    <div class="text-muted text-size-small">
                                        @{{ item.addons }}
                                    </div>
                                </td>
                                <td class="text-right">
                                    <h6 class="no-margin text-semibold">$@{{ item.price }}</h6>
                                </td>
                                <td>
                                    <span class="btn btn-xs btn-icon btn-flat btn-rounded border-grey text-grey" v-on:click="removeItem(item.id)"><i class="icon-trash"></i></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                @include('basket.basket-total')
            </div>
        </div>
    </div>
</div>