@extends('templates.base')
@section('title', 'editar actividad')
@section('header','editar actividad')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" 
                        id="derscription" name="description" required>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="hours">Horas estimadas</label>
                        <input type="number" class="form-control" 
                        id="hours" name="hours" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="tecnician_id">Técnico</label>
                        <section name=tecnician_id id="tecnician_id"
                        class="form-control" required>
                        <option value="">Seleccione</option>
                        </section>
                    </div>
                
                    <div class="col-lg-6 mb-4">
                        <label for="type_id">Tipo</label>
                        <section name=type_id id="type_id"
                        class="form-control" required>
                        <option value="">Seleccione</option>
                        </section>
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
                        <a href="{{ route('activity.index') }}" class="btn btn-secondary btn-block">
                    Cancelar
                        </a>
                    </div>
                    

                </div>
            </form>
        </div>
    </div>
@endsection