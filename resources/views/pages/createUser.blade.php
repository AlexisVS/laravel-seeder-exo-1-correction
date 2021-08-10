@extends("template.index")
@section("content")
  <div class="container">
    <form class="d-flex flex-column" action="/user" method="POST">
    @csrf
    <input placeholder="nom" type="text" name="nom" id="">
    <input placeholder="age" type="text" name="age" id="">
    <input placeholder="email" type="text" name="email" id="">
    <input placeholder="telephone" type="text" name="telephone" id="">
    <input type="submit" name="" id="" value="Sauvegarder">
  </form>
  </div>
@endsection