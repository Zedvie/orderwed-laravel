@extends('templates.base_reports')
@section('header, Reporte actividades por tecnicos')
@section('content')
    <section id="results">
        @if ($activities)
        <h3>Tecnico</h3>   
        <table id="ReportTableInfo">
            <thead>
                <tr>
                <th>Docuemnt</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Telefono</th>
            </tr>
            </thead>
            <tbody>
                <td>{{ $technician['document'] }}</td>
                <td>{{ $technician['name'] }}</td>
                <td>{{ $technician['especiality'] }}</td>
                <td>{{ $technician['phone'] }}</td>
            </tbody>
        </table>
        <br>
        <hr>
        <h3>Actividades</h3>
        <table id="ReportTable">
            <thead>
                <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Horas</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity['id'] }}</td>
                    <td>{{ $activity['description'] }}</td>
                    <td>{{ $activity['hours'] }}</td>
                    <td>{{ $activity->type_activity->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <h5>No existen Actividades</h5>
        @endif
    </section>
@endsection