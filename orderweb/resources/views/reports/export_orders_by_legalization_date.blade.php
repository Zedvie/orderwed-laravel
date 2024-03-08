@extends('templates.base_reports')
@section('header, Reporte ordenes por fecha de legalizacion')
@section('content')
    <section id="results">
        @if ($orders)
        <h3>Ordenes</h3>   
        <table id="ReportTableInfo">
            <thead>
                <tr>
                <th>Fecha de legalizacion</th>
                <th>Direccion</th>
                
            </tr>
            </thead>
            <tbody>
                <td>{{ $order['legalization_date'] }}</td>
                <td>{{ $order['address'] }}</td>
                <td>{{ $order->causal->description }}</td>
                <td>{{ $order->observation->description }}</td>
              
        </table>
        <br>
        <hr>
        @if ($causals)
        <h3>Causal</h3>
        <table id="ReportTable">
            <thead>
                <tr>
                <th>Id</th>
                <th>Descripcion</th>
              
            </tr>
            </thead>
            <tbody>
                @foreach($causals as $causal)
                <tr>
                    <td>{{ $causal['id'] }}</td>
                    <td>{{ $casual['description'] }}</td>
                 
                @endforeach
            </tbody>
        </table>

        <br>
        <hr>
        @if ($observation)
        <h3>Observacion</h3>
        <table id="ReportTable">
            <thead>
                <tr>
                <th>Id</th>
                <th>Descripcion</th>
              
            </tr>
            </thead>
            <tbody>
                @foreach($observation as $observation)
                <tr>
                    <td>{{ $observation['id'] }}</td>
                    <td>{{ $observation['description'] }}</td>
                 
                @endforeach
            </tbody>
        </table>
        @else
            <h5>No existen Actividades</h5>
        @endif
    </section>
@endsection