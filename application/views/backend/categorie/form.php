<?php $title = "Categorie Form"; ?>
<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<div>
    <h1>insert</h1>
    <form action="">
        <input type="text" name="nom">
        <input type="submit">
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php require(dirname(__FILE__) . '/../template.php'); ?>