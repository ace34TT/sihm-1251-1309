<?php $title = "Post management"; ?>

<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<?php ob_start(); ?>

<?php $content = ob_get_clean(); ?>


<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php require('template.php'); ?>