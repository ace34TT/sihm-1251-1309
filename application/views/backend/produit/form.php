<?php $title = "Categorie Form"; ?>
<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<div>
    <h1>insert</h1>
    <?php echo form_open_multipart('admin/produit/form'); ?>
    <input type="text" name="nom">
    <select name="idCategorie" id="">
        <?php
        foreach ($listeCategorie as $categorie) { ?>
            <option value=" <?= $categorie->id ?>"><?= $categorie->nom ?></option>
        <?php
        }
        ?>
    </select>
    <input type="file" name="picture">
    <input type="number" step="0.5" name="prixUnitaire">
    <input type="submit">
    <?php echo form_close(); ?>
</div>

<div>
    <h1>liste produits</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Categories</th>
                <th scope="col">Prix unitaire</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listeProduit as $produit) { ?>
                <tr>
                    <th scope="row"><?= $produit->id ?></th>
                    <td><?= $produit->nom ?></td>
                    <td><?= $produit->idCategorie ?></td>
                    <td><?= $produit->prixUnitaire ?></td>
                    <td><a href=" <?= site_url('admin/produit/delete/' . $produit->id) ?>">delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php require(dirname(__FILE__) . '/../template.php'); ?>