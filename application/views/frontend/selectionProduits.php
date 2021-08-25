<?php $title = "Choix caisse"; ?>

<!-- HEADER -->
<?php ob_start(); ?>

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/util.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">


<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<div class="container">
    <div class="row text-center">
        <h2 style="color:white">Selection de produits</h2>
    </div>
</div>

<div class="container">
    <div class="table100 ver1 m-b-110 mt-5">
        <div class="table100-head">
            <table>
                <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Id</th>
                        <th class="cell100 column2">Nom</th>
                        <th class="cell100 column3">Categorie</th>
                        <th class="cell100 column4">Prix unitaire</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="table100-body js-pscroll" id="listProduit">
            <table id="selectionProduits">
                <tbody>
                    <?php
                    foreach ($listeProduit as $produit) {
                    ?>
                        <tr class="row100 body">
                            <td scope="row"><?= $produit->id ?></td>
                            <td class="cell100 column1"><?= $produit->nom ?></td>
                            <td class="cell100 column2"><?= $produit->idCategorie ?></td>
                            <td class="cell100 column3"><?= $produit->prixUnitaire ?></td>
                            <td class="cell100 column4"> <input style="margin-left:25px;" type="checkbox" name="" id=""> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center" style="margin-top: -50px; margin-bottom: 50px;">
        <form action="<?= site_url() ?>/utilisateur/produitSelectionne" method="POST">
            <input type="text" hidden name="productsId" value="" id="listIdProduit">
            <button id="validate-btn" class="btn btn-outline-light">Passer la commande</button>
            <!-- <input type="submit" class="btn btn-outline-light" id="validate-btn" value="valider"> -->
        </form>
    </div>
</div>






<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
    $(function() {
        $("#validate-btn").hover(function() {
            var ids = "";
            $("#listProduit input[type=checkbox]:checked").each(function() {
                var row = $(this).closest("tr")[0];
                ids += row.cells[0].innerHTML;
                ids += ",";
            });
            document.getElementById("listIdProduit").value = ids;
        });
    });
</script>

<?php $script = ob_get_clean(); ?>

<?php require('template.php'); ?>