
@extends("layouts.app")
@section("css")
    <link rel="stylesheet" href="public/css/subscription.css">
@endsection
@section("topMenu")
    <form method="post" action="index.php?action=subscription">
        <input type="text" name="entry" placeholder="Votre recherche" required>
        <button type="submit"><i class='bx bx-search'></i></button>
    </form>
@endsection
@section("content")
    @if(!empty($accounts))
        <div class="users">
            <h2>Ma recherche</h2>

            @foreach($accounts as $account)
                <div class="account">
                    <div>
                        <h3>{{$account["login"]}}</h3>
                        @if(isset($account["dateAbonnement"]))
                            <span>depuis le {{$account["dateAbonnement"]}}</span>
                        @endif
                    </div>
                    @if(isset($account["dateAbonnement"]))
                        <a href="index.php?action=delFriend&id={{$account['id']}}">se désabonner</a>
                    @else
                        <a href="index.php?action=addFriend&id={{$account['id']}}">s'abonner</a>
                    @endif
                </div>
            @endforeach

        </div>
    @endif
    @if(!empty($subs))
        <div class="users">
            <h2>Mes abonnements</h2>
            @foreach($subs as $sub)
                <div class="account">
                    <div>
                        <h3>{{$sub["login"]}}</h3>
                        <span>depuis le {{$sub["dateAbonnement"]}}</span></div>
                    <a href="index.php?action=delFriend&id={{$sub['id']}}">se désabonner</a>
                </div>
            @endforeach
        </div>
    @endif
@endsection