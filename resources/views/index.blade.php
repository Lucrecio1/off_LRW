@extends('Rizorte_ui.layout')
@section('title','Listagem')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col col-lg-6">
            <a href="{{route('supports.create')}}" class="">Nova <i class="bi bi-question-square-fill"></i></a>
            <h1 class="text-primary-emphasis text-center">Listagem Suportes</h1>
    <table class="table table-striped text-center">
        <thead>
            <th>Assunto</th>
            <th>Status</th>
            <th>descrição</th>
            <th>Accões</th>
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
    </div>
@endsection