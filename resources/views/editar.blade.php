<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1>Dúvida {{$suport->id}}</h1>
    <form action="{{route('supports.atualizar',$suport->id)}}" method="POST">
        @csrf()
       @method('PUT')
        <input type="text" placeholder="Assunto" name="subject" value="{{$suport->subject}}">
        <textarea name="body" placeholder="Informação" cols="30" rows="10">{{$suport->body}}</textarea>
        <button type="submit">Enviar</button>
    </form>
</div>
