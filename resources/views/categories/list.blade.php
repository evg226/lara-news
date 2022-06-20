<h1>Categories list page</h1>
<a href="{{route('home')}}">Home page</a>
<div style="display: flex; flex-wrap: wrap; justify-content: space-evenly">
    @forelse ($categories as $category)
        <a style="width: 320px; text-decoration: none" href="{{route('categories.item',['categoryId'=>$category['id']])}}">
            <h3>{{$category['title']}}</h3>
            <div><img src="{{$category['image']}}" alt="{{$category['image']}}" width="100%"></div>
            <p>{{$category['description']}}</p>
        </a>
    @empty
        <a href="{{route('news')}}">
            <h3>No any categories</h3>
            <p>Please go to all news</p>
        </a>
    @endforelse
</div>
