<h1>Cadastro sem css</h1>
<form action="{{route('supports.store')}}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" placeholder="Informação" cols="30" rows="10"></textarea>
    <button type="submit">Enviar</button>
</form>