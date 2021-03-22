@extends('passengers.layout')

@section('content')

<div>
    <h2 style="text-align:center;margin-top:15px;font-family: rokkitt">Bangladesh Biman Passenger Details</h2>
</div>

    @if($message=Session::get('success'))
        <div>
            <p class="alert alert-success">{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Sl_no</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Passport No</th>
            <th>Flight Date</th>
            <th>Flight Time</th>
            <th>Cabin Type</th>
            <th>Destination</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($passengers as $passenger)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$passenger->name}}</td>
            <td>{{$passenger->mobile_no}}</td>
            <td>{{$passenger->passport_no}}</td>
            <td>{{$passenger->flight_date}}</td>
            <td>{{$passenger->flight_time}}</td>
            <td>{{$passenger->cabin_type}}</td>
            <td>{{$passenger->destination}}</td>
            <td>
                <form action="{{route('passengers.destroy',$passenger->id)}}" method="POST">
                    <a style="background-color: black; text-color:white;" class="btn btn-primary" href="{{route('passengers.show', $passenger->id)}}">Show</a>
                    <a style="background-color: black; text-color:white;" class="btn btn-primary" href="{{route('passengers.edit', $passenger->id)}}">Update</a>

                    @csrf 
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row" style="text-align:center;margin-top:15px;margin-bottom:15px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a style="background-color: black; text-color:white;" class="btn btn-success" href="{{route('passengers.create')}}">Add New Flight</a>
        </div>
    </div>
</div>