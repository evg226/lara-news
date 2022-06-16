<h1>Categories list page</h1>
<a href="<?=route('home')?>">Home page</a>
<div style="display: flex; flex-wrap: wrap; justify-content: space-evenly">
    <?php foreach ($categories as $category): ?>
        <a style="width: 320px; text-decoration: none" href="<?=route('categories.item',['categoryId'=>$category['id']])?>">
            <h3><?=$category['title']?></h3>
            <div><img src="<?=$category['image']?>" alt="<?=$category['image']?>" width="100%"></div>
            <p><?=$category['description']?></p>
        </a>
    <?php endforeach; ?>
</div>
