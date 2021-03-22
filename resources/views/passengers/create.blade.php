@extends('passengers.layout')

@section('content')

<div class="row">
    <div class="col-12 margin-tb">
        <div>
            <h2 style="text-align:center;margin-top:15px; font-family: rokkitt;">Add New Flight Schedule</h2>
        </div>
        <div class="pull-left">
            <a style="background-color: black; text-color:white;" class="btn btn-primary" href="{{route('passengers.index')}}">Back</a>
        </div>
    </div>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Your Input Is Invalid <br><br>
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif
<h3Add New Passenger></h3>
<form action="{{route('passengers.store')}}" method = "POST">

    @csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Full Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Mobile No:</strong>
            <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Passport Number:</strong>
            <input type="text" name="passport_no" class="form-control" placeholder="Passport No">
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Flight Date:</strong>
            <input type="text" name="flight_date" class="form-control" placeholder="DD/MM/YYYY">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Flight Time:</strong>
            <input type="text" name="flight_time" class="form-control" placeholder="HH:MM">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cabin Type:</strong>
            <input type="text" name="cabin_type" class="form-control" placeholder="Economic/Business/General">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Destination:</strong>
            <input type="text" name="destination" class="form-control" placeholder="destination">
        </div>
    </div>

    <div>
        <button style="background-color: black; text-color:white;" type="submit" class="btn btn-primary">Add Flight</button>
    </div>
    </div>
</form>
@endsection