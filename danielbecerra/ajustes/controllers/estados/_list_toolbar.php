<div data-control="toolbar">
    <a
        href="<?= Backend::url('danielbecerra/ajustes/estados/create') ?>"
        class="btn btn-primary oc-icon-plus">
        <?= e(trans('backend::lang.form.create')) ?> Estado
    </a>
    <button
        class="btn btn-default oc-icon-trash-o"
        data-request="onDelete"
        data-request-confirm="<?= e(trans('backend::lang.list.delete_selected_confirm')) ?>"
        data-list-checked-trigger
        data-list-checked-request
        data-stripe-load-indicator>
        <?= e(trans('backend::lang.list.delete_selected')) ?>
    </button>
    <a
        href="<?= Backend::url('danielbecerra/ajustes/estadoscategorias') ?>"
        class="btn btn-primary oc-icon-plus">
        Ver Categorías
    </a>
</div>
