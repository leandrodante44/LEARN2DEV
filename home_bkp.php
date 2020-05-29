<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 4</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- FullCalendar -->
    <link href='vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/home.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo.png" alt="CoolAdmin" width="200" />
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.png" alt="" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn nomeUser" href="#"></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#" class="nomeUser"></a>
                                            </h5>
                                            <span class="email emailUser"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">Hi
                                    <span class="nomeUser"></span></h1>

                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <button class="btn btn-primary">
                                    <i class="zmdi zmdi-plus"></i> Adicionar Conteudo
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <br>
            <!---<section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">You successfully read this important alert message.</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </section>--->
            <section>
                <div class="container">
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true" onclick="navPanel('cursosLabTab')"><h4> <i class="fa fa-book ipanel"></i> &nbsp;Cursos Lab2Dev <span class="badge badge-secondary">04</span></h4></a>
                                <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false" onclick="navPanel('treinaLabTab')"><h4><i class="fa fa-coffee ipanel"></i> &nbsp;Treinamentos Lab2Dev <span class="badge badge-danger">04</span></h4></a>
                                <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false" onclick="navPanel('indicaLabTab')"><h4><i class="fa fa-comment ipanel"></i> &nbsp;Indicações de Estudo <span class="badge badge-info">04</span></h4></a>
                            </div>
                        </nav>
                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="cursosLabTab" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                <br>
                                <div class="row" id="cursoLab">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title mb-3">Curso Clássico de ABAP</h4>
                                                <div class="text-sm-left badge badge-primary ">
                                                    ABAP</div>
                                                <hr>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                    content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title mb-3">Mistérios do XSJS Hana</h4>
                                                <div class="text-sm-left badge badge-primary ">
                                                    ABAP</div>
                                                <hr>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                    content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card">
                                            <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                <div class="text-sm-left badge badge-primary ">
                                                    SAPUI5</div>
                                                <hr>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                    content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                <div class="text-sm-left badge badge-primary ">
                                                    SAPUI5</div>
                                                <hr>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                    content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                <div class="text-sm-left badge badge-primary ">
                                                    SAPUI5</div>
                                                <hr>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                    content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="tab-pane fade" id="treinaLabTab" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                    <h3> </h3>
                                    <br>
                                    <div class="row" id="treinaLab">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Curso Csdassadlássico de ABAP</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        ABA11P</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Mistérios do XSJS Hana</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        ABAP</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        SAPUI5</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        SAPUI5</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        SAPUI5</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="indicaLabTab" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                    <h3> </h3>
                                    <br>
                                    <div class="row" id="indicaLab">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Curso Csdassadlássico de ABAP</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        ABA11P</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Mistérios do XSJS Hana</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        ABAP</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        SAPUI5</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        SAPUI5</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Boas Práticas de SAPUI5</h4>
                                                    <div class="text-sm-left badge badge-primary ">
                                                        SAPUI5</div>
                                                    <hr>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                        content.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright 2020 Lab2Dev. All rights reserved. By <a href="https://lab2dev.com/">Lab2Dev</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                </div>
        </div>
    </div>
    </section>
    </div>
    <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/portal.js"></script>

    <!-- full calendar requires moment along jquery which is included above -->
    <script src="vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="vendor/fullcalendar-3.10.0/fullcalendar.js"></script>
    <script src="vendor/fullcalendar-3.10.0/locale/pt-br.js"></script>

    <script type="text/javascript">
        $(function() {
            // for now, there is something adding a click handler to 'a'
            var tues = moment().day(2).hour(19);

            // build trival night events for example data
            var events = [


            ];

            var trivia_nights = []

            for (var i = 1; i <= 12; i++) {
                var n = tues.clone().add(i, 'days');
                trivia_nights.push({
                    title: '',
                    start: n.toISOString(),
                    allDay: true,
                    url: '#'
                });
            }

            // setup a few events
            $('#calendar').fullCalendar({
                header: {
                    left: 'today',
                    center: 'title',
                    right: 'prev,next'
                },
                events: events.concat(trivia_nights),
                locale: 'pt-br'
            });
        });
    </script>
    <style>
        .fc-event {
            background-color: #28a745;
            border: 1px solid #28a745;
        }
    </style>
</body>

</html>
<!-- end document-->