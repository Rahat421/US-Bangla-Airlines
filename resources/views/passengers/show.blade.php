@extends('passengers.layout')

@section('content')
<div  style="text-align:center;background:yellow;">
<div class='row' style="text-align:center;margin-top:15px;margin-bottom:15px; font-family: rokkitt;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Passenger Flight Information</h2>
        </div>
        <div class="pull-right">
            <a style="background-color: black; text-color:white;" class="btn btn-primary" href="{{route('passengers.index')}}">Back</a>
        </div>
    </div>
</div>
<div calss="row"> 
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Passenger Name:<br></strong>
            {{$passenger->name}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Mobile Number<br></strong>
            {{$passenger->mobile_no}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Passport Number<br></strong>
            {{$passenger->passport_no}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Flight Date<br></strong>
            {{$passenger->flight_date}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Flight Time<br></strong>
            {{$passenger->flight_time}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cabin Type<br></strong>
            {{$passenger->cabin_type}}
        </div>
    </div>
    <div calss="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Destination<br></strong>
            {{$passenger->destination}}
        </div>
    </div>
</div>
</div>
@endsection