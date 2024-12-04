@extends('layouts.layout')

@section('content')
        <h1>Alle Schiffmodelle</h1>
        {{ $entities->links() }}
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="text-end">Bearbeiten</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entities as $index=>$shipmodel)
                    <tr>
                        <td>{{ $shipmodel->name}}</td>
                        <td class="text-end">
                            <div class="btn-group">
                                <a href="{{url('shipmodels/show/'.$shipmodel->id)}}" class="btn btn-info"><i class="fa fa-magnifying-glass"></i></a>
                                <a href="{{url('shipmodels/edit/'.$shipmodel->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{url('shipmodels/delete/'.$shipmodel->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td class="text-end">
                        <a href="{{url('shipmodels/add')}}" class="btn btn-success"><i class="fa fa-add"></i></a>
                    </td>
                </tr>   
            </tfoot>
        </table>
        </div>
        {{ $entities->links() }}
@endsection 