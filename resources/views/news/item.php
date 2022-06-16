<h1><?= $newsItem['title'] ?></h1>
<h3><a href="<?=route('categories.item',['categoryId'=>$newsItem['categoryId']])?>">Category: <?=$newsItem['categoryId']?></a></h3>
<h4>Author: <?= $newsItem['author'] ?></h4>
<p>
    <img src="<?= $newsItem['image'] ?>" alt="<?= $newsItem['image'] ?>" width="320px" style="float: left; margin:0 10px 0 0"/>
    <?= $newsItem['description'] ?>
</p>
<p>Published at <?= $newsItem['created_at'] ?></p>


