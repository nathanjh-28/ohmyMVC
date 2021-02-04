<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="hero light-bg">
    <h1 class=""><?= $data['title']; ?></h1>
    <p class=""><?= $data['description'];?></p>
    <p class="">Version <strong> <?= APPVERSION;?></strong></p>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>