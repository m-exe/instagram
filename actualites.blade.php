@extends("layouts.app")
@section("css")
    <link rel="stylesheet" href="public/css/actualites.css">
@endsection
@section("content")
    <div class="container">
        @if(!empty($articles))
            @foreach($articles as $article)

                <a href="#">
                    <div class="article">
                        <span>{{$article["login"]}}</span>
                        <img src="{{$article['img_url']}}" alt="">
                    </div></a>
            @endforeach
        @endif
    </div>
@endsection

