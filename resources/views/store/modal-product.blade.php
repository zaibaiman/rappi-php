<div id="modal_product" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">@{{ (selectedProduct && selectedProduct.name) || ''  }}</h5>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6" style="border-right: 1px solid lightgrey">
                        <div class="panel panel-transparent">
                            <div class="panel-body">
                                <div class="thumb thumb-fixed">
                                    <img :src="(selectedProduct && selectedProduct.imageUrl) || ''" alt="">
                                </div>
                            </div>

                            <div class="text-center mt-10" style="font-size: 16px; padding: 10px;">
                            @{{ (selectedProduct && selectedProduct.description) || '' }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-horizontal ml-10">
                            <fieldset class="content-group">
                                <legend class="text-bold no-border">@lang('store.extras')</legend>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <div class="checkbox">
                                            <span class="pull-right text-success">+$40</span>
                                            <label>
                                                <input type="checkbox" class="styled">
                                                Champiñones
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="styled">
                                                Tocino
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="styled">
                                                Piña
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <legend class="text-bold no-border mt-20">@lang('store.instructions')</legend>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <textarea rows="3" cols="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" v-on:click="add()">@lang('store.add') - $@{{ (selectedProduct && selectedProduct.price) || '' }}</button>
            </div>
        </div>
    </div>
</div>