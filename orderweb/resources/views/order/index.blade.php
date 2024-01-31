@extends('templates.base')
@section('title', 'Listado actividades')
@section('header', 'Listado activdades')
@section('content')
  
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('activity.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="col-lg-12 mb-4">
        <table id="table_data" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Fecha de legalizacion</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Observacion</th>
                    <th>causal</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>14-03-2005</td>
                    <td>tres esquinas</td>
                    <td>Ninguna</td>
                    <td>Reparacion contador</td>
                    <td>
                        <a href="#" title="editar" class="btn btn-info btn-circle btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="#" title="eliminar" class="btn btn-danger btn-circle btn-sm" onclick="return remove()">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/general.js') }}"></script>

@endsection