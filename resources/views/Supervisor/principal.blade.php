@extends('layouts.main')

@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Hola</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Hombre</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jhan</td>
                            <td>1007795243</td>
                            <td class="text-center">
                                <a class="btn" href="/Supervisor/Calendario-Agente"
                                    style="background-color: #f96806; color:white">Ver</a>
                            </td>
                            <tr>
                                <td>Jhan</td>
                                <td>1007795243</td>
                                <td class="text-center">
                                    <a class="btn" href="/Supervisor/Calendario-Agente"
                                        style="background-color: #f96806; color:white">Ver</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jhan</td>
                                <td>1007795243</td>
                                <td class="text-center">
                                    <a class="btn" href="/Supervisor/Calendario-Agente"
                                        style="background-color: #f96806; color:white">Ver</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jhan</td>
                                <td>1007795243</td>
                                <td class="text-center">
                                    <a class="btn" href="/Supervisor/Calendario-Agente"
                                        style="background-color: #f96806; color:white">Ver</a>
                                </td>
                            </tr>
                        </tr>
                     </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
