@extends('layouts.layout')

@section('content')
        <h1>Ger Schiffe "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            
            <tbody>
                
                <tr>
                    <td>Schiffsname</td><td>{{ $entity->name}}</td>
                </tr>
                <tr>
                    <td>Kapitän</td><td>{{ $entity->captain}}</td>
                </tr>
                <tr>
                    <td>Länge</td><td>{{ $entity->length}} m</td>
                </tr>
                <tr>
                    <td>Kapazität</td><td>{{ $entity->capacity_teu}} TEU</td>
                </tr>
                <tr>
                    <td>Baujahr</td><td>{{ $entity->year_built}}</td>
                </tr>
                <tr>
                    <td>Schiffsmodell</td><td>{{ $entity->shipmodel->name}}</td>
                </tr>    
            </tbody>
        </table>
        <a href="{{url('ships')}}" class="btn btn-danger">Zurück</a>
@endsection
