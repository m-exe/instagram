@extends("layouts.loginTemplate")
@section("form")
<form action="index.php?action=loginT" method="post">
    <input type="email" placeholder="e-mail" name="email" required>
    <input type="password" placeholder="Mot de passe" name="password" required>
    <input type="checkbox" name="remember" value="true" id="remember">
    <label for="remember">Se souvenir de moi</label>
    <button type="submit">Connexion</button>
</form>
<p>Vous n'avez pas de compte ? <a href="index.php?action=register">Inscrivez-vous</a></p>
@endsection