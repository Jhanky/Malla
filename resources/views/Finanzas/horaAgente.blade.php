@extends('layouts.main')


@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Jhan Martinez</h6>
        </div>
        <div class="card-body">
            <div >
                <label for="ini">Fecha inicio</label>
                <input type="date" name="fec-inicio" id="ini">
                <label for="fin">Fecha fin</label>
                <input type="date" name="fec-fin" id="fin">

                <button type="button" class="btn btn-secondary btn-sm float-right">Consultar</button>

             </div>
             <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Campaña</th>
                            <th scope="col">Numero de horas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SDF</td>
                            <td>243</td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Empresa</th>
                            <th scope="col">Numero de horas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AFGDF</td>
                            <td>124</td>

                        </tr>
                        <tr>
                            <td>AF</td>
                            <td>454</td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Servicio</th>
                            <th scope="col">Numero de horas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NBV</td>
                            <td>103</td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa-solid fa-download"></i> Generar
                reporte</button>

        </div>
    </div>
@endsection
