 @extends('layouts.main')

 @section('base')
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold">Hola</h6>
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
                             <th scope="col">Nombre</th>
                             <th scope="col">Cedula</th>
                             <th scope="col">Horas generales</th>
                             <th scope="col">Opciones</th>

                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>
                         <tr>
                             <td>Jhan</td>
                             <td>1007795243</td>
                             <td>500</td>
                             <td class="text-center">
                                 <a class="btn" style="background-color: #f96806; color:white"
                                     href="/Finanzas/Agente">Ver</a>
                             </td>
                         </tr>

                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 @endsection
