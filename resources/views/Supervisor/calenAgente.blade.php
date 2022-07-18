<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Principal</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- estilos de la plantilla -->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
    <!-- iconos de la awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="{{ asset('fullcalendar/assets/css/material-dashboard.min.css') }} " rel="stylesheet" />


    <style>
        .fondo-contacta {
            background-color: #f96806;
            background-size: cover
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav fondo-contacta sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MALLA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Maya Horaria -->
            <li class="nav-item">
                <a class="nav-link" href="/Supervisor">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Maya Horaria</span></a>
            </li>

            <!-- Numero de agentes -->
            <li class="nav-item">
                <a class="nav-link" href="/Supervisor/Agente">
                    <i class="fa-solid fa-users"></i>
                    <span>Numero de agentes</span></a>
            </li>

            <!-- Actualizar estado -->
            <li class="nav-item">
                <a class="nav-link" href="/Supervisor/Actualizar">
                    <i class="fa-solid fa-arrows-rotate"></i>
                    <span>Actualizar estado</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-outline-warning d-md-none rounded-circle mr-3"
                        style="color: #DA6818;">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-warning" style="color: #DA6818;" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">
                                    <!-- Aqui montrare las notificaciones-->
                                </span>
                            </a>

                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">
                                    <!-- Aqui montrare los mensajes-->
                                </span>
                            </a>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nombre del usuario
                                    logueado</span>
                                <img class="img-profile rounded-circle"
                                    src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                                    data-target="#logoutModal"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="contenedor">
                        <div class="container-fluid">

                            <!-- Page Heading -->

                            <!--Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-center">Calendario de trabajo</h4>
                                </div>
                                <div class="card-body">
                                    <div id="fullCalendar"></div>
                                    <br>
                                    <a class="btn btn btn-success btn-sm float-right"
                                        href="/Supervisor/Horario-Agente">Agendar</a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


    <!-- FullCalendar -->
    <script src="{{ asset('fullcalendar/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/sweetalert2.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/jquery-jvectormap.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/nouislider.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/assets/js/plugins/arrive.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('fullcalendar/assets/js/material-dashboard.min.js?v=2.1.0') }}" type="text/javascript">
    </script>


    <script>
        $(document).ready(function() {
            md.initFullCalendar();
        });
    </script>

</body>

</html>
