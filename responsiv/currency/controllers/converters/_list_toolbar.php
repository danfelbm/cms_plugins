<div data-control="toolbar">
    <?= Ui::button("Back", 'responsiv/currency/rates')->icon('icon-arrow-left') ?>
    <a
        href="javascript:;"
        data-control="popup"
        data-handler="onLoadAddPopup"
        class="btn btn-primary oc-icon-plus">
        <?= __("Add Currency Converter") ?>
    </a>

    <?= Ui::ajaxButton("Delete", 'onDelete')
        ->listCheckedTrigger()
        ->listCheckedRequest()
        ->icon('icon-delete')
        ->secondary()
        ->confirmMessage("Are you sure?") ?>
</div>
