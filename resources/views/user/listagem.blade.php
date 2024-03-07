<div>
<h1>Lista de Usuários</h1>
    <ul>
        @foreach ($user as $u)
            <li>{{ $u->nome }} - {{ $u->email }}</li>
        @endforeach
    </ul>
</div>
