<?php

include ('../app/config.php');
include ('../admin/layout/parte1.php');
include ('../app/controllers/roles/listado_de_roles.php');
include ('../app/controllers/usuarios/listado_de_usuarios.php');
include ('../app/controllers/niveles/listado_de_niveles.php');
include ('../app/controllers/grados/listado_de_grados.php');
include ('../app/controllers/materias/listado_de_materias.php');
include ('../app/controllers/administrativos/listado_de_administrativos.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="container">
        <div class="container">
            <div class="row">
                <h1> <?=APP_NAME;?> </h1>
            </div>
            <br>
            <div class="row">
                <!-- tarjetas de modulos -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <?php
                        $contador_de_roles=0;
                        foreach ($roles as $role){
                            $contador_de_roles=$contador_de_roles + 1;
                        }
                        ?>
                        <div class="inner">
                            <h3><?= $contador_de_roles;?></h3>
                            <p>Roles Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-bookmarks"></i></i>
                        </div>
                        <a href="<?= APP_URL;?>/admin/roles" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i> </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <?php
                        $contador_de_usuarios=0;
                        foreach ($usuarios as $usuario){
                            $contador_de_usuarios=$contador_de_usuarios + 1;
                        }
                        ?>
                        <div class="inner">
                            <h3><?= $contador_de_usuarios;?></h3>
                            <p>Usuarios Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-people-fill"></i></i>
                        </div>
                        <a href="<?= APP_URL;?>/admin/usuarios" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i> </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success ">
                        <?php
                        $contador_de_niveles=0;
                        foreach ($niveles as $nivele){
                            $contador_de_niveles=$contador_de_niveles + 1;
                        }
                        ?>
                        <div class="inner">
                            <h3><?= $contador_de_niveles;?></h3>
                            <p>Niveles Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-bookshelf"></i></i>
                        </div>
                        <a href="<?= APP_URL;?>/admin/niveles" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i> </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <?php
                        $contador_de_grados=0;
                        foreach ($grados as $grado){
                            $contador_de_grados=$contador_de_grados + 1;
                        }
                        ?>
                        <div class="inner">
                            <h3><?= $contador_de_grados;?></h3>
                            <p>Grados  Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-bar-chart-steps"></i></i>
                        </div>
                        <a href="<?= APP_URL;?>/admin/grados" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i> </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <?php
                        $contador_de_materias=0;
                        foreach ($materias as $materia){
                            $contador_de_materias=$contador_de_materias + 1;
                        }
                        ?>
                        <div class="inner">
                            <h3><?= $contador_de_materias;?></h3>
                            <p>Materias Registradas</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-book-half"></i></i>
                        </div>
                        <a href="<?= APP_URL;?>/admin/materias" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i> </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-default">
                        <?php
                        $contador_de_administrativos=0;
                        foreach ($administrativos as $administrativo){
                            $contador_de_administrativos=$contador_de_administrativos + 1;
                        }
                        ?>
                        <div class="inner">
                            <h3><?= $contador_de_administrativos;?></h3>
                            <p>Personal Administrativo</p>
                        </div>
                        <div class="icon">
                            <i class="fas"><i class="bi bi-person-lines-fill"></i></i>
                        </div>
                        <a href="<?= APP_URL;?>/admin/administrativos" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i> </a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include ('../admin/layout/parte2.php');
include ('../layout/mensajes.php');

?>
