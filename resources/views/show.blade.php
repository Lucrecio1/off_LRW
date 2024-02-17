
<a href="{{route('supports.index')}}"> <<--Lista</a>

<div class="">
    <!-- Well begun is half done. - Aristotle -->
    <h1>Detalhes da Dúvida {{$support->id}}</h1>
    <ul>
        
        <li>Assunto:{{$support->subject}}</li>
        <li>Descrição:{{$support->body}}</li>
        <li>Status:{{$support->status}}</li>
    </ul>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

<form action="{{route('supports.apagar', $support->id)}}" method="POST">
    @csrf()
    @method('DELETE')
    <button type="submit">apagar</button>
</form>