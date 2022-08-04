@extends('layouts.main')

@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">
                <!--script para mostrar la fecha actual -->
                <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    </script>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Hora</th>
                            <th scope="col">Campana</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Unidad de negocio</th>
                            <th scope="col">Servicio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>9:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>10:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>11:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>12:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>1:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>2:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>3:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>4:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>5:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>
                        <tr>
                            <td>6:00</td>
                            <td>X2</td>
                            <td>B4</td>
                            <td>G2</td>
                            <td>F1</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
