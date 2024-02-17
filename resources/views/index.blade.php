<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>

</head>
<body>
    
    <h1>Listagem Suportes</h1>
<a href="{{route('supports.create')}}">Criar Dúvida</a>

    <table>
        <thead>
            <th>Assunto</th>
            <th>Status</th>
            <th>descrição</th>
        </thead>
            @foreach ($supports as $support)
                <tr>
                    <td>{{$support->subject}}</td>
                    <td>{{$support->status}}</td>
                    <td>{{$support->body}}</td>

                    <td>
                        <a href="{{route('supports.show',[$support->id])}}">ir</a>
                        <a href="{{route('supports.editar',[$support->id])}}">editar</a>
                    </td>
                </tr>
            @endforeach
        
    </table>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
</body>
</html>