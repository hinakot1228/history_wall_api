@extends('layouts.base')
 
@section('title', '問題一覧')
 
@section('content')
    <h4>問題一覧</h4>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">名前</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($questions as $question)
        <tr>
            <td scope="row">{{ $question->id }}</td>
            <td>
                <a href="{{ route('questions.show', $question->id) }}">
                    {{ $question->name }}
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection