@extends("template.index")
@section("content")
  <p><strong>Nom:</strong>{{ $show->nom }}</p>
  <p><strong>Age:</strong>{{ $show->age }}</p>
  <p><strong>Email:</strong>{{ $show->email }}</p>
  <p><strong>Téléphone:</strong>{{ $show->telephone }}</p>
@endsection