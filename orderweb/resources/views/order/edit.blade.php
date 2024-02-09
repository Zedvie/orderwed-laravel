@extends('templates.base')
@section('title', 'Editar orden')
@section('header', 'Editar orden')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="legalization_date">Fecha de legalizacion</label>
                        <input type="date" class="form-control"
                         id="legalization_date" name="legalization_date" required>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <label for="addres">Direccion</label>
                        <input type="number" class="form-control"
                         id="addres" name="addres" required>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <label for="city">Ciudad</label>
                        <select name="city" id="city" class="form-control" required>
                            <option value="">Seleccione</option>
                         <option value="tulua">Tuluá</option>
                         <option value="buga">Buga</option>
                         <option value="cali">Cali</option>
                        </select>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="observation_id">observacion</label>
                        <select name="observation_id" id="observation_id" class="form-control" required>
                            <option value="">Seleccione</option>
                          
                        </select>
                    </div>
                
                    <div class="col-lg-6 mb-4">
                        <label for="causal_id">causal</label>
                        <select name="causal_id" id="causal_id" class="form-control" required>
                            <option value="">Seleccione</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                            <button class="btn btn-primary btn-block"
                                type="submit">
                               Guardar
                            </button>
                    </div>
                    <div class="col-lg-6 mb-4">
                            <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block">
                               Cancelar
                            </a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12 mb-4">
                        <div class="alert alert-warning" role="alert">
                            <i class="fa-solid fa-lightbulb"></i> para añadir actividades a la orden primero debe crearla y luego dar clic en la accion editar

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection