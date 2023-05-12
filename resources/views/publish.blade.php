@extends("layouts.app")
@section("css")
<link rel="stylesheet" href="public/css/publish.css">
@endsection
@section("content")
<div>
<h2>Une inspiration, une humeur ?</h2>
<h3>Partagez...</h3>
</div>
<form action="index.php?action=publishT" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Titre de la publication" name="title" required>
    <input type="file" accept="image/*" name="img">
    <input type="text" placeholder="Tags" name="tags" pattern="^#[a-z0-9_]+(( )+#[a-z0-9_]+)*( )*$">
    <button type="submit">Publier</button>
</form>
@endsection

