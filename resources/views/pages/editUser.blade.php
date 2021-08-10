@extends("template.index")
@section('content')
    <div class="container">
        <form class="d-flex flex-column" action="/user/{{ $edit->id }}" method="POST">
            @csrf
            @method("PUT")
            <input value="{{ $edit->nom }}" placeholder="nom" type="text" name="nom" id="">
            <input value="{{ $edit->age }}" placeholder="age" type="text" name="age" id="">
            <input value="{{ $edit->email }}" placeholder="email" type="text" name="email" id="">
            <input value="{{ $edit->telephone }}" placeholder="telephone" type="text" name="telephone" id="">
            <input type="submit" name="" id="" value="Sauvegarder">
        </form>
    </div>
@endsection
