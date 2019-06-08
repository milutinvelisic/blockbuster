<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="blog-item-style-2">
        <a href="index.php?p=blog&id=<?= $b->idBlog ?>"><img src="assets/images/uploads/<?= $b->blogCoverPhoto ?>" alt="<?= $b->title ?>"></a>
        <div class="blog-it-infor">
            <h3><a href="index.php?p=blog&id=<?= $b->idBlog ?>"><?= $b->title ?></a></h3>
            <span class="time"><?= $b->date ?></span>
            <p class="text-overflow"><?= $b->textShort ?></p>
        </div>
    </div>
</div>