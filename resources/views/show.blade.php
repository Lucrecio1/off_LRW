<a href="{{route('supports.index')}}"> <<--Lista</a>
<div>
    <!-- Well begun is half done. - Aristotle -->
    <h1>Detalhes da Dúvida {{$support->id}}</h1>
    <ul>
        <li>Assunto:{{$support->subject}}</li>
        <li>Descrição:{{$support->body}}</li>
        <li>Status:{{$support->status}}</li>
    </ul>
</div>

<form action="{{route('supports.apagar', $support->id)}}" method="POST">
    @csrf()
    @method('DELETE')
    <button type="submit">apagar</button>
</form>