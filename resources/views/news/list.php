<h1>News list page </h1>
<?php if (isset($newsList[0])):?>
    <h3><a href="<?=route('categories.')?>">Categories: </a> <?=$newsList[0]['categoryId']?></h3>
<?php endif;?>
<div style="display: flex; flex-wrap: wrap; justify-content: space-evenly">
    <?php foreach ($newsList as $newsItem): ?>
        <a style="width: 320px; text-decoration: none" href="<?=route('news.item',['id'=>$newsItem['id']])?>">
            <h3><?=$newsItem['title']?></h3>
            <h4><?=$newsItem['author']?></h4>
            <div><img src="<?=$newsItem['image']?>" alt="<?=$newsItem['image']?>" width="100%"></div>
            <p><?=$newsItem['description']?></p>
            <p><?=$newsItem['created_at']?></p>
        </a>
    <?php endforeach; ?>
</div>
