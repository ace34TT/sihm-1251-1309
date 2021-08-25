<?php $title = "Choix caisse"; ?>

<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<?= asset_url() . '/images/upArrow.png' ?>

<div class="container text-center">
    <img src="<?= asset_url() ?>/images/upArrow.png" onclick="increase()" alt="not found">
    <h5 id="numeroCaisse">5</h5>
    <img src="<?= asset_url() ?>/images/downArrow.png" onclick="decrease()" alt="not found">
    <br>
    <button onclick="nextStep()">Suivant</button>
</div>

<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>
<script>
    function increase() {
        document.getElementById("numeroCaisse").innerHTML = parseInt(document.getElementById("numeroCaisse").textContent) + 1;
    }

    function decrease() {
        document.getElementById("numeroCaisse").innerHTML = parseInt(document.getElementById("numeroCaisse").textContent) - 1;
    }

    function nextStep() {
        console.log("calling function")
        window.location.href = "<?= site_url("utilisateur/caisse/") ?>" + document.getElementById("numeroCaisse").textContent;
    }
</script>
<?php $script = ob_get_clean(); ?>

<?php require('template.php'); ?>