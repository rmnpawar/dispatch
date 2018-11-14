@extends('layouts/app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead><tr>
                <th>DD No</th>
                <th>Date of letter in section</th>
                <th>From</th>
                <th>Language</th>
                <th>Description</th>
                <th>Receive</th></tr>
            </thead>
            <tbody>
                @if(count($dds) > 0)
                @foreach($dds as $dd)
                <tr>
                    <td>{{$dd->dak_id}}</td>
                    <td>{{$dd->dateinsection}}</td>
                    <td>{{$dd->from}}</td>
                    <td>{{$dd->language}}</td>
                    <td>{{$dd->description}}</td>
                    <td><div class="btn btn-default"><a href="/dispatch/{{$dd->id}}">Receive</a></div></td>
                </tr>
                @endforeach

                @endif
            </tbody>
    </div>
    
@endsection