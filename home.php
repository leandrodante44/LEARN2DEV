<?php
   include 'menu.php';
?>
<script src="js/portal.js"></script>
<link href="css/home.css" rel="stylesheet" media="all">
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
                    <h4> <i class="fa fa-book ipanel"></i> &nbsp;Cursos Lab2Dev <span class="badge badge-secondary">04</span></h4>
                    <br>
                    <div class="container-fluid">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                <div class="carousel-item col-md-3 active">
                                    <div class="card" onclick="window.location='viewex.php?u=<?php echo $_GET['u']?>'">
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
                                <div class="carousel-item col-md-3">
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
                                <div class="carousel-item col-md-3">
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
                                <div class="carousel-item col-md-3">
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
                                <div class="carousel-item col-md-3">
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
                                <div class="carousel-item col-md-3">
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
                                <div class="carousel-item col-md-3">
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
                                <div class="carousel-item col-md-3">
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
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left fa-lg text-muted"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                                <i class="fa fa-chevron-right fa-lg text-muted"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <hr>
                        <h4><i class="fa fa-coffee ipanel"></i> &nbsp;Treinamentos Lab2Dev <span class="badge badge-danger">04</span></h4>
                        <br>
                        <div class="container-fluid">
                            <div id="carouselExample1" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="col-md-3 active">
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
                                    <div class="carousel-item col-md-3">
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

                                    <div class="carousel-item col-md-3">
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
                                    <div class="carousel-item col-md-3">
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
                                    <div class="carousel-item col-md-3">
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
                                <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left fa-lg text-muted"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample1" role="button" data-slide="next">
                                    <i class="fa fa-chevron-right fa-lg text-muted"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h4><i class="fa fa-comment ipanel"></i> &nbsp;Indicações de Estudo <span class="badge badge-info">04</span></h4>
                        <br>
                        <div class="container-fluid">
                            <div id="carouselExample2" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3 active">
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
                                    <div class="carousel-item col-md-3">
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

                                    <div class="carousel-item col-md-3">
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
                                    <div class="carousel-item col-md-3">
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
                                    <div class="carousel-item col-md-3">
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
                                <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left fa-lg text-muted"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample2" role="button" data-slide="next">
                                    <i class="fa fa-chevron-right fa-lg text-muted"></i>
                                    <span class="sr-only">Next</span>
                                </a>
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
</body>

</html>
<!-- end document-->