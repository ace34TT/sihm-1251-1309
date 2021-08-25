<?php $title = "Choix caisse"; ?>

<!-- HEADER -->
<?php ob_start(); ?>
<style>
    * {
        box-sizing: border-box;
    }

    /* force scrollbar */
    html {
        overflow-y: scroll;
    }

    body {
        font-family: sans-serif;
    }

    /* ---- grid ---- */

    .grid {
        background: #DDD;
    }

    /* clear fix */
    .grid:after {
        content: '';
        display: block;
        clear: both;
    }

    /* ---- .grid-item ---- */

    .grid-sizer,
    .grid-item {
        width: 33.333%;
    }

    .grid-item {
        float: left;
    }

    .grid-item img {
        display: block;
        max-width: 100%;
    }
</style>
<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>

<div class="grid">
    <div class="grid-sizer"></div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<!-- SCRIPT -->
<?php ob_start(); ?>
<script>
    var grid = document.querySelector('.grid');

    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });

    imagesLoaded(grid).on('progress', function() {
        // layout Masonry after each image loads
        msnry.layout();
    });
</script>
<?php $script = ob_get_clean(); ?>

<?php require('template.php'); ?>