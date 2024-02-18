@extends('Rizorte_ui.layout')
@section('title','Listagem')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col col-lg-6">
          <a href="{{route('supports.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Votar</a>

     <div class="card" style="width: 18rem;">
    <!-- Well begun is half done. - Aristotle -->
    <div class="card-body">
      <h3 class="card-title">Detalhes da Dúvida {{$support->id}}</h3>
    <ul>
        
        <li>Assunto:{{$support->subject}}</li>
        <li>Descrição:{{$support->body}}</li>
        <li>Status:{{$support->status}}</li>
    </ul>
    <form action="{{route('supports.apagar', $support->id)}}" method="POST">
      @csrf()
      @method('DELETE')
      <button type="submit" class="btn btn-primary">apagar</button>
  </form>
    </div>
    
</div>
        </div>
    </div>
   
@endsection


