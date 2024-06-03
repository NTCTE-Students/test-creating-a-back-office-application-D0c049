@extends('layouts.app')

@section('content')

<h1>Финансы </h1>
    <table>
        <thead>
            <tr>
                <th>Дата</th>
                <th>Доход</th>
                <th>Расход</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($finances as $finance)
            <tr>
                <td>{{$finance -> date}}</td>
                <td>{{$finance -> income}}</td>
                <td>{{$finance -> expense}}</td>
                <td>
                    <a href="{{route('finances.edit', $finance->id)}}">Редактирование</a>
                    <a href="{{route('finances.destroy', $finance->id)}}">Удаление</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection