<style>
    .news_create{
        max-width: 320px;
        border: 2px solid #cbd5e0;
        border-radius: 10px;
        padding: 20px;
    }
    .news_create label {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
    }
    .news_create input, textarea {
        padding: 5px;
        width: 70% ;
    }
    .news_create button {
        width: 50% ;
        cursor: pointer;
        padding: 5px;
        margin-top: 10px;
    }
    .news_create_button {
        text-align: center;
    }
</style>
<h1>Create new item of news</h1>
<form  name="news_create" method="post" action="<?= route('admin.news') ?>"
<div class="news_create">
    <label>news title
        <input type="text" name="title" placeholder="news title"/>
    </label>
    <label>author
        <input type="text" name="author" placeholder="author"/>
    </label>
    <label>pat
        <input type="text" name="image" placeholder="image path"/>
    </label>
    <label>description
        <textarea name="description" rows="5"></textarea>
    </label>
    <label>category
        <input type="text" name="category" placeholder="category"/>
    </label>
    <div class="news_create_button">
        <button type="submit">add</button>
    </div>
</div>
</form>

