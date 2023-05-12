@extends("layouts.loginTemplate")
@section("form")
<form action="index.php?action=registerT" method="post">
    <input type="email" placeholder="e-mail" name="email" required>
    <input type="text" placeholder="login" name="login" required>
    <input type="password" placeholder="Mot de passe" name="password" required>
    <input type="password" placeholder="Confirmation du mot de passe" name="password2" required>
    <button type="submit">S'enregistrer</button>
</form>
<p>Déjà inscrit ? <a href="index.php?action=login">Connectez-vous</a></p>
@endsection