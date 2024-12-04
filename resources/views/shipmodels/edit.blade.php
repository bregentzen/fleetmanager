@extends('layouts.layout')

@section('content')
        <h1>Schiffsmodell bearbeiten</h1>
        @include('snippets.error')

        {{ html()->modelForm($entity, 'POST', url('shipmodels/update/'.$entity->id))->open() }}
            <div class="form-floating mb-3">    
            {{ html()->text('name')->class('form-control') }}
            {{ html()->label('Name') }}
            </div>
            
            
            {{ html()->submit('Speichern')->class('btn btn-success') }}
            <a href="{{url('shipmodels')}}" class="btn btn-danger">Abbrechen</a>

        {{ html()->closeModelForm() }}

@endsection
