<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');



?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">

                <h1> Configuraciones del Sistema</h1>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary"><i class="bi bi-hospital"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><b>DATOS DE LA INSTITUCION</b></span>
                            <a href="institucion" class="btn btn-primary btn-sm">Configurar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="bi bi-calendar-range"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><b>GESTION EDUCATIVA</b></span>
                            <a href="gestion" class="btn btn-info btn-sm">Configurar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include ('../../admin/layout/parte2.php');
include ('../../layout/mensajes.php');

?>
