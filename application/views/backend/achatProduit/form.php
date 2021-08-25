<?php $title = "AchatProduit Form"; ?>
<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<div>
    <h1>insert</h1>
    <form action="<?= site_url('admin/achatProduit/form') ?>" method="POST">
        <input type="text" name="nom">
        <input type="submit">
    </form>
</div>

<div>
    <h1>liste achatProduit</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listeAchatProduit as $achatProduit) { ?>
                <tr>
                    <th scope="row"><?= $achatProduit->id ?></th>
                    <td><?= $achatProduit->quantite ?></td>
                    <td><a href=" <?= site_url('admin/achatProduit/delete/' . $achatProduit->id) ?>">delete</a></td>
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