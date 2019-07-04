<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" class="form-horizontal" data-toggle="validater">
                {{ csrf_field() }} {{ method_field() }}
            </form>
        </div>
    </div>
</div>