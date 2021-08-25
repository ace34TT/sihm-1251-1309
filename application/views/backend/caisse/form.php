<?php $title = "Caisse Form"; ?>
<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<div>
    <h1>insert</h1>
    <form action="<?= site_url('admin/caisse/form') ?>" method="POST">
        <input type="submit" value="ajouter une nouvelle caisse">
    </form>
</div>

<div>
    <h1>liste Caisse</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Numero</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listeCaisse as $caisse) { ?>
                <tr>
                    <th scope="row"><?= $caisse->id ?></th>
                    <td><a href=" <?= site_url('admin/caisse/delete/' . $caisse->id) ?>">delete</a></td>
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