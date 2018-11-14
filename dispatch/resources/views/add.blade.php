@extends('layouts.app')

@section('content')
    

    <div class="container mt-2">
    <h1>Dispatch</h1>
    <p class="lead">Add dispatch entry</p>
    <div class="form col-md-8 col-lg-8">
    <form action="{{action('DispatchController@store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="row">
            <div class="form-group col-md-6 col-lg-6">
                <label for="dak_id">Dak Id</label>
                <input name="dak_id" class="form-control" type="number" placeholder="Dak Id" required>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <label for="letter_no">Letter No</label>
                <input name="letter_no" class="form-control" type="number" placeholder="Sender office letter no" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 col-lg-6">
                <label for="dateofletter">Date</label>
                <input name="dateofletter" class="form-control" type="date" placeholder="Date of Letter" required>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <label for="section">Section</label>
                <input name="section" class="form-control" type="number" placeholder="Letter marked to section" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 col-lg-6">
                <label for="subject">Subject</label>
                <input name="subject" class="form-control" type="text" placeholder="Subject of letter" required>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <label for="from">From</label>
                <input name="from" class="form-control" type="text" placeholder="Sender's Address" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group container col-md-6 col-lg-6">
            <div class="form-group">
                <label for="language">Language</label>
                <select name="language" class="form-control" required>
                    <option selected disabled>Select</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="file_id">File no</label>
                <input name="file_id" class="form-control" type="number" placeholder="Enter file no" required>
            </div>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Description of letter" required></textarea>
                </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 col-lg-6">
                <label for="dateinsection">Section in Date</label>
                <input name="dateinsection" class="form-control" type="date" placeholder="" required>
            </div>
            <div class="form-group col-md-6 col-lg-6">
                <label for="recepient">Recepient</label>
                <select name="recepient" class="form-control" required>
                    <option selected disabled>Select</option>
                @if(count($users) > 0)
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>

                    @endforeach

                @endif
                </select>
                
            </div>
        </div>
       <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
    </div>
@endsection