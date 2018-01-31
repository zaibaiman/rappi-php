<div class="modal-footer" v-if="items.length > 0">
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left pl-5 pb-5">
                        <h4 class="text-semibold">@lang('basket.total')</h4>
                    </td>
                    <td class="text-right pb-5">
                        <h6 class="no-margin text-semibold">$@{{ total }}</h6>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="/checkout" class="btn btn-primary">@lang('basket.checkout')</a>
</div>