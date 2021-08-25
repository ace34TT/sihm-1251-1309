<?php $title = "Choix caisse"; ?>

<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<table class="table" id="listeProduit">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prix Unitaire</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($produitSelectionnee as $produit) { ?>
            <?php
            // echo '<pre>', var_dump($produit), '</pre>';
            ?>
            <tr>
                <th scope="row"><?= $produit[0]->id ?></th>
                <td><?= $produit[0]->nom ?></td>
                <td><?= $produit[0]->prixUnitaire ?></td>
                <td><span onclick="dicrease(<?= $i ?>)">-</span> </td>
                <td>1</td>
                <td><span onclick="increase(<?= $i ?>)">+</span></td>
                <td><?= $produit[0]->prixUnitaire ?></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
</table>

<span>Total :</span> <span id="total" on></span>

<form action="<?= site_url() ?>/utilisateur/validerAchat" method="POST">
    <input type="text" value="" name="id_qnt" id="id_qnt">
    <input type="submit" value="valider" onmouseover="idQuantite()">
</form>

<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>
<script>
    window.onload = function() {
        total();
    };

    function dicrease(row) {
        var myTab = document.getElementById('listeProduit');
        var cells = myTab.rows.item(row).cells;
        var quantite = parseInt(cells.item(4).innerHTML) - 1;
        var prxUnitaire = parseFloat(cells.item(2).innerHTML);
        cells[6].innerHTML = quantite * prxUnitaire;
        cells[4].innerHTML = quantite;
        total()
    }

    function increase(row) {
        var myTab = document.getElementById('listeProduit');
        var cells = myTab.rows.item(row).cells;
        var quantite = parseInt(cells.item(4).innerHTML) + 1;
        var prxUnitaire = parseFloat(cells.item(2).innerHTML);
        cells[6].innerHTML = quantite * prxUnitaire;
        cells[4].innerHTML = quantite;
        total()
    }

    function total() {
        var total = document.getElementById('total');
        var myTab = document.getElementById('listeProduit');
        var coutTotal = 0
        for (i = 1; i < myTab.rows.length; i++) {
            var objCells = myTab.rows.item(i).cells;
            coutTotal = coutTotal + parseInt(objCells.item(6).innerHTML)
        }
        total.innerHTML = coutTotal;
    }

    function idQuantite() {
        var valeur = document.getElementById('id_qnt');
        var resultat = ''
        var myTab = document.getElementById('listeProduit');
        for (i = 1; i < myTab.rows.length; i++) {
            var objCells = myTab.rows.item(i).cells;
            resultat += objCells.item(0).innerHTML + "@" + objCells.item(4).innerHTML + "/"
        }
        valeur.value = resultat;
    }
</script>


<?php $script = ob_get_clean(); ?>

<?php require('template.php'); ?>