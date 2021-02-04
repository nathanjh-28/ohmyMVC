<?php require APPROOT . '/views/inc/header.php'; ?>

<?php flash('post_message'); ?>
<div class="row">
    <div class="">
        </div>
        <div class="post-button-div">
        <h1>Posts</h1>
    <a href="<?= URLROOT;?>/posts/add" class="btn btn-success">
    <i class="fa fa-pencil-alt"></i> Add Post
    </a>
    </div>
</div>

<?php foreach($data['posts'] as $post) : ?>

<div class="post">
<a href="<?= URLROOT;?>/posts/show/<?=$post->postId;?>">
    <div class="post-header">

        <h4 class="">
        <?= $post->title; ?>
        </h4> written by <?= $post->name; ?> on <?= $post->postCreated; ?>
    </div>
</a>
    
        <div class="post-body">
            <p class=""><?=$post->body;?></p>
    
        </div>
 

    <!-- <div class="post-footer">
        <a href="" class="btn">More</a>

    </div> -->

</div>

<?php endforeach; ?>


<?php require APPROOT . '/views/inc/footer.php'; ?>