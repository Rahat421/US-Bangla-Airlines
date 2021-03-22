@extends('passengers.layout')
<x-app-layout>
    <x-slot name="header">
        <h2 style="text-align:center; font-family: rokkitt" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome To Your Deshboard To Book Flights In US-Bangla Airlines') }}
        </h2>
    </x-slot>




    <div class="pull-right" style="position:absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">

            <a  class="btn btn-primary"href="{{route('passengers.create')}}" >Add New Flight</a>
            <a  class="btn btn-success" href="http://127.0.0.1:8000/passengers">Show Your Flight Schedule</a>

    </div>

</x-app-layout>