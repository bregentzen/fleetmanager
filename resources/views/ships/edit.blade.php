@extends('layouts.layout')

@section('content')
        <h1>Schiff bearbeiten</h1>
        @include('snippets.error')

        {{ html()->modelForm($entity, 'POST', url('ships/update/'.$entity->id))->open() }}
            <div class="form-floating mb-3">    
                {{ html()->text('name')->class('form-control') }}
                {{ html()->label('Name') }}
            </div>
            <div class="form-floating mb-3">    
                {{ html()->text('captain')->class('form-control') }}
                {{ html()->label('Captain') }}
            </div>
            <div class="form-floating mb-3">    
                {{ html()->text('length')->class('form-control') }}
                {{ html()->label('Länge') }}
            </div>
            <div class="form-floating mb-3">    
                {{ html()->text('capacity_teu')->class('form-control') }}
                {{ html()->label('Kapazität') }}
            </div>
            <div class="form-floating mb-3">    
                {{ html()->text('year_built')->class('form-control') }}
                {{ html()->label('Baujahr') }}
            </div>
            
            
            {{ html()->submit('Speichern')->class('btn btn-success') }}
            <a href="{{url('ships')}}" class="btn btn-danger">Abbrechen</a>

        {{ html()->closeModelForm() }}

@endsection
