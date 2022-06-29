<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail page</h1>

    <div class="row">
        <div class="col-lg-12">
            <?php d($user); ?>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>