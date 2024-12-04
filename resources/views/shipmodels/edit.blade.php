@extends('layouts.layout')

@section('content')
        <h1>Schiffsmodell bearbeiten</h1>
        @include('snippets.error')

        {{ html()->modelForm($shipmodel, 'POST', url('shipmodels/update/'.$shipmodel->id))->open() }}
            <div class="form-floating mb-3">    
            {{ html()->text('name')->class('form-control') }}
            {{ html()->label('Name') }}
            </div>
            <div class="form-floating mb-3">    
            {{ html()->select('manufacturer_id', $manufacturers->pluck('name', 'id'))->class('form-control') }}
            {{ html()->label('Manufacturer') }}
            </div>
            {{ html()->submit('Speichern')->class('btn btn-success') }}
            <a href="{{url('shipmodels')}}" class="btn btn-danger">Abbrechen</a>

        {{ html()->closeModelForm() }}

@endsection
