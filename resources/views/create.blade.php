@extends('Rizorte_ui.layout')
@section('title','Cadastro')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col col-lg-6">
            <h1 class="text-center">Cadastro sem css</h1>
            <form action="{{route('supports.store')}}" method="post">
                @csrf()
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Assunto</label>
                    <input type="text" class="form-control" name="subject" placeholder="Assunto">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Informação</label>
                    <textarea class="form-control" name="body" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
            </form>
        </div>
    </div>

  </div>
    
@endsection
