<?= $this->relationRender('visitasSeguimiento') ?>
<style>.field-has-seguimientos { display: none !important; }</style>
<div id="has-seguimientos"></div>
<script>
document.addEventListener('page:loaded', function() {
    var hasSeguimientos = <?= $this->formGetModel()->has_seguimientos ? 'true' : 'false' ?>;
    var styleElement = document.createElement('style');
    styleElement.textContent = '.display-control li:not(.active) { display: ' + (hasSeguimientos ? 'block' : 'none') + ' !important; }';
    document.getElementById('has-seguimientos').appendChild(styleElement);
});
</script>