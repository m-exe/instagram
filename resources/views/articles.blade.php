@extends("layouts.app")
@section("css")
<link rel="stylesheet" href="public/css/articles.css">
@endsection
@section("content")
@foreach($articles as $article)
<div class="article">
    <span>{{ $article['login'] }}</span><img src="{{$article['img_url']}}" alt="">
    <h2>{{ $article['titre'] }}</h2>
    <div>
        <h3>{{ $article['tags'] }}</h3>
        <a href=""><i class='bx bx-message-rounded-dots'></i></a><a href=""><i class='bx bx-heart' ></i></a></div>
</div>
@endforeach
@endsection