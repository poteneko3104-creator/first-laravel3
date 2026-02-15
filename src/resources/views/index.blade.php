@extends('layouts.default')
<style>
    th{
        background-color:#289ADC;
        color:white;
        padding:5px 40px;
    }
    tr:nth-child(odd){
        background-color:#ffffff;
    }
    td{
        padding:25px 40px;
        background-color:#eeeeee;
        text-align:center;
    }
    svg.w-5.h-5{
        width:30px;
        height:30px;
    }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
    <tr>
        <th>Data</th>
        <!--
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>nationality</th>
        -->
    </tr>
     @foreach($authors as $author)
    <tr>
        <td>{{$author->getDetail()}}</td>  

        <!--
        <td>{{$author->id}}</td>
        <td>{{$author->name}}</td>
        <td>{{$author->age}}</td>
        <td>{{$author->nationality}}</td>
        -->
    </tr>
    @endforeach
</table>
{{$authors->links()}}
@endsection