@extends('layouts.layout')

@section('content')
        <h1>Schiffsmodell hinzufügen</h1>
        @include('snippets.error')

        {{ html()->form('POST', url('/shipmodels/save'))->open() }}
        <div class="form-floating mb-3">    
            {{ html()->text('name')->class('form-control') }}
            {{ html()->label('Name') }}
            </div>
            {{ html()->submit('Speichern')->class('btn btn-success') }}
            <a href="{{url('shipmodels')}}" class="btn btn-danger">Abbrechen</a>

        {{ html()->form()->close() }}
@endsection
