@extends('Rizorte_ui.layout')
@section('title','Cadastro')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col col-lg-6">
          @if($errors->any())
              @foreach ($errors->all() as $erro)
              <div class="alert alert-danger">{{$erro}}</div>   
              
              @endforeach
          @endif
            <h1 class="text-center">Cadastro</h1>
            <form action="{{route('supports.store')}}" method="post">
                @csrf()
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Assunto</label>
                    <input type="text" class="form-control" name="subject" placeholder="Assunto" value="{{old('subject')}}">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Informação</label>
                    <textarea class="form-control" name="body" rows="3">{{old('body')}}</textarea>
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
            </form>
        </div>
    </div>

  </div>
    
@endsection
