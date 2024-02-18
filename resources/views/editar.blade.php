@extends('Rizorte_ui.layout')
@section('title','Cadastro')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col col-lg-6">

            <h1 class="text-center">Dúvida {{$suport->id}}</h1>
            @if($errors->any())
              @foreach ($errors->all() as $erro)
              <div class="alert alert-danger">{{$erro}}</div>   
              
              @endforeach
          @endif
            <form action="{{route('supports.atualizar',$suport->id)}}" method="post">
                @csrf()
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Assunto</label>
                    <input type="text" class="form-control" name="subject" value="{{$suport->subject}}" placeholder="Assunto">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Informação</label>
                    <textarea class="form-control" name="body" rows="3">{{$suport->body}}</textarea>
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
            </form>
        </div>
    </div>

  </div>
    
@endsection