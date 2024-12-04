@extends('layouts.layout')

@section('content')
        <h1>Ger Schiffsmodell "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            
            <tbody>
                
                <tr>
                    <td>Name</td><td>{{ $entity->name}}</td>
                </tr>    
            </tbody>
        </table>
        <a href="{{url('shipmodels')}}" class="btn btn-danger">Zurück</a>
@endsection
