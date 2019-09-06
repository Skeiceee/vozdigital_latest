@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div><i class="fas fa-money-check"></i><span class="font-weight-bold ml-2">Cargos de acceso</span></div>
                    </div>
                    <hr class="my-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <i class="far fa-building"></i><span class="font-weight-bold ml-2">Compañia</span>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <select name="" class="form-control form-control-chosen" data-placeholder="Selecciona una compañia...">
                                    {{-- <option value="1">Adwadaw</option>
                                    <option value="2">Bdwadaw</option>
                                    <option value="3">Cdwadaw</option>
                                    <option value="4">Ddwadawdaw</option>
                                    <option value="5">Edwadwadaw</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div><i class="far fa-calendar-alt"></i><span class="font-weight-bold ml-2">Agregar período</span></div>
                                <a id="add_period" href="javascript:void(0);" class="btn btn-primary" data-placement="left" data-toggle="tooltip" data-original-title="Agregar nuevo periodo."><i class="fas fa-plus"></i></a>
                            </div>
                            <hr class="mt-0">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="start_date">Fecha de inicio</label>
                                    <input id="start_date" type="text" data-language='es' data-min-view="months"
                                        data-view="months" data-date-format="MM - mm/yyyy" class="form-control" name="date">
                                </div>
                                <div class="col-md-6">
                                    <label for="end_date">Fecha de termino</label>
                                    <input id="end_date" type="text" data-language='es' data-min-view="months"
                                        data-view="months" data-date-format="MM - mm/yyyy" class="form-control" name="date">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="rate_normal">Tarifa normal</label>
                                    <input name="rate_normal" type="number" step="0.0001" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="rate_reduced">Tarifa reducida</label>
                                    <input name="rate_reduced" type="number" step="0.0001" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="rate_night">Tarifa nocturna</label>
                                    <input name="rate_night" type="number" step="0.0001" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <table class="table table-sm table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">#</th>
                                        <th colspan="2">Fechas</th>
                                        <th colspan="3">Tarifas</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Acciones</th>
                                    </tr>
                                    <tr>
                                        <th width="170px">Inicio</th>
                                        <th width="170px">Termino</th>
                                        <th width="90px">Normal</th>
                                        <th width="90px">Reducida</th>
                                        <th width="90px">Nocturna</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="empty_table">
                                        <th colspan="7" class="text-muted">La lista de períodos esta vacia.</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2019-09-05 17:44:00</td>
                                        <td>2019-09-05 17:44:00</td>
                                        <td>0,0345</td>
                                        <td>0,0345</td>
                                        <td>0,0345</td>
                                        <td><a href="#" class="btn-sm btn-block btn-danger"><i class="fas fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>2019-09-05 17:44:00</td>
                                        <td>2019-09-05 17:44:00</td>
                                        <td>0,0345</td>
                                        <td>0,0345</td>
                                        <td>0,0345</td>
                                        <td><a href="#" class="btn-sm btn-block btn-danger"><i class="fas fa-times"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form id="accesscharge" action="" method="get">
                        <button type="submit" class="btn btn-block btn-primary mt-3">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link href="{{ asset('css/chosen.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/chosen.min.js')}}"></script>
<script src="{{ asset('js/jquery.hoverIntent.min.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script> 
var SITEURL = '{{ URL::to('').'/' }}'
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    
    $('.form-control-chosen').chosen({no_results_text: "No se ha encontrado"})

    let addPeriod = $("#add_period")
    addPeriod.tooltip()
    addPeriod.click(function(){
        alert('Wena!')
    })

    $("#accesscharge").submit(function(e) {
        e.preventDefault()
        var form = $(this)
        console.log(form.serialize())
        var url = form.attr('action')
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function(data)
            {
                console.log(data)
            }
        });
    });
})
</script>
@endpush