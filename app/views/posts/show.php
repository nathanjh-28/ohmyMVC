<?php require APPROOT . '/views/inc/header.php'; ?>


<h1><?= $data['post']->title; ?> </h1>
<div class="">
    Written by <?= $data['user']->name;?> on <?= $data['post']->created_at;?>
</div>

<p><?= $data['post']->body;?></p>




<hr>

<div class="post-footer">

    <div class="left-footer">
        <a href="<?=URLROOT;?>/posts" class="btn light-blue-bg"><i class="fa fa-backward"></i> Back</a>
    </div>
    <div class="right-footer">
    <?php if($data['post']->user_id == $_SESSION['user_id']):?>
        
        <a href="<?= URLROOT;?>/posts/edit/<?= $data['post']->id;?>" class="btn btn-dark">Edit</a>

        <form class="pull-right" action="<?= URLROOT;?>/posts/delete/<?=$data['post']->id;?>" method="post">
        <input type="submit" value="Delete" class="btn btn-danger">
        
        </form>
        <?php endif; ?>

</div>
</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>