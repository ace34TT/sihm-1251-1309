<?php $title = "Client-Choix caisse"; ?>

<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>

<div class="container text-center">
    <div class="row">
        <!-- <div class="col-6">
            <img height="250px" width="250px" src="<?= base_url() ?>assets/images/checkout.png" onclick="decrease()" alt="not found">
        </div> -->
        <div class="col-12">
            <h1 style="color:white">Choississez un numero de caisse</h1>
            <img height="100px" width="100px" src="<?= base_url() ?>assets/images/upArrow.png" onclick="increase()" alt="not found">
            <h1 style="font-size: 150px;color: white;" id="numeroCaisse">1</h1>
            <img height="100px" width="100px" src="<?= base_url() ?>assets/images/downArrow.png" onclick="decrease()" alt="not found">
            <br>
            <button class="btn btn-outline-light" onclick="nextStep()">Suivant</button>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>
<script>
    function increase() {
        if ((parseInt(document.getElementById("numeroCaisse").textContent) + 1) <= 3) {
            document.getElementById("numeroCaisse").innerHTML = parseInt(document.getElementById("numeroCaisse").textContent) + 1;
        }
    }

    function decrease() {
        if ((parseInt(document.getElementById("numeroCaisse").textContent) - 1) >= 1) {
            document.getElementById("numeroCaisse").innerHTML = parseInt(document.getElementById("numeroCaisse").textContent) - 1;
        }
    }

    function nextStep() {
        console.log("calling function")
        window.location.href = "<?= site_url("utilisateur/caisse/") ?>" + document.getElementById("numeroCaisse").textContent;
    }
</script>
<?php $script = ob_get_clean(); ?>

<?php require('template.php'); ?>