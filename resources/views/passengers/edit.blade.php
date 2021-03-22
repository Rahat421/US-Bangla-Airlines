@extends('passengers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2 style="text-align:center;margin-top:15px;font-family: rokkitt;">Update Flight Information</h2>
            </div>
            <div class="pull-right">
                <a style="background-color: black; text-color:white;" class="btn btn-primary" href="{{route('passengers.index')}}">Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input. <br><br>
            <ul>
            @foreach($error->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('passengers.update',$passenger->id)}}" method="POST">
        @csrf 
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{$passenger->name}}" class="form-control" placeholder="Full Name">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile Number</strong>
                    <input type="text" name="mobile_no" value="{{$passenger->mobile_no}}" class="form-control" placeholder="01x-xxxx-xxxx">
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Passport Number</strong>
                <input type="text" name="passport_no" value="{{$passenger->passport_no}}" class="form-control" placeholder="E-xxxxxx">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fight Date</strong>
                <input type="text" name="flight_date" value="{{$passenger->flight_date}}" class="form-control" placeholder="DD/MM/YYYY">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Flight Time</strong>
                <input type="text" name="flight_time" value="{{$passenger->flight_time}}" class="form-control" placeholder="HH:MM">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cabin Type</strong>
                <input type="text" name="cabin_type" value="{{$passenger->cabin_type}}" class="form-control" placeholder="Economic/Business/General">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Destination</strong>
                <input type="text" name="destination" value="{{$passenger->destination}}" class="form-control" placeholder="Destination">
            </div>
        </div>

        <div>
            <button style="background-color: black; text-color:white;" type="submit" class="btn btn-primary">Update Flight</button>
        </div>
        </div>
    </form>
@endsection