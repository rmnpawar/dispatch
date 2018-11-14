@extends('layouts/app')
@section('content')
<div class="container">
        <table class="table table-striped">
            <thead><tr>
                <th>DD No</th>
                <th>Date of letter in section</th>
                <th>From</th>
                <th>Language</th>
                <th>Dispose language</th>
                <th>Description</th>
                <th>Dispose</th></tr>
            </thead>
            <tbody>
                <form>
                @if(count($disposables) > 0)
                @foreach($disposables as $dd)
                <tr>
                    <td>{{$dd->dak_id}}</td>
                    <td>{{$dd->dateinsection}}</td>
                    <td>{{$dd->from}}</td>
                    <td>{{$dd->language}}</td>
                    <td><select name="disposal_language">
                        <option value="Hindi">Hindi</option>
                        <option value="English">
                    </td>
                    <td>{{$dd->description}}</td>
                    <td><div class="btn btn-default"><a href="{{$dd->id}}">Receive</a></div></td>
                </tr>
                @endforeach

                @endif
            </form>
            </tbody>
    </div>
@endsection