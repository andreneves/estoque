<!-- resources/views/produto.index.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>Produto - Index</p>
@endsection
 
@section('content')
    <p>Conteúdo</p>

    <table>
        <tr>
          <th>nome</th>
          <th>quantidade</th>
          <th>valor</th>
        </tr>

        @foreach ($produtos as $value)
        <tr>
            <td>{{ $value->nome         }}</td>
            <td>{{ $value->quantidade   }}</td>
            <td>{{ $value->valor        }}</td>
        </tr>
        @endforeach

    </table>
@endsection