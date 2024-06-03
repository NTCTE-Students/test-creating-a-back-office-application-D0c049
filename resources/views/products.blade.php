@extends('layouts.app')

@section('content')


<h1>Товары </h1>
    <table>
        <thead>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product -> name}}</td>
                <td>{{$product -> description}}</td>
                <td>{{$product -> price}}</td>
                <td>{{$product -> quantity}}</td>
                <td>
                    <a href="{{route('products.edit', $product->id)}}">Редактирование</a>
                    <a href="{{route('products.destroy', $product->id)}}">Удаление</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection