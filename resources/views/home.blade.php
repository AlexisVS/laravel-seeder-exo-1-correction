@extends("template.index")
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">age</th>
                    <th scope="col">email</th>
                    <th scope="col">telephone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td class="d-flex">
                            <a href="/user/{{ $user->id }}" class="btn btn-success text-white">SHOW</a>
                            <a href="/user/{{ $user->id }}/edit" class="btn btn-primary text-white mx-3">Editer</a>
                            <form action="/user/{{ $user->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger text-white" value="X">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/user/create" class="btn btn-primary text-white">Create user</a>
        <form action="/user/destroy-all" method="POST">
            @csrf
            <input type="submit" class="btn btn-danger text-white" value="Delete all users">
        </form>
    </div>
@endsection
