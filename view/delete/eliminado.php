<?php
print "<!-- Top -->";
include 'view/plantillas/top.php';
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dar de baja Producto</h1>
                        <p>
                            <?= $this->modelo->mensaje ?>
                        </p>                        
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card"> 
                            <div class="card-header">
                                Registro Eliminado
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">

                                <div class="col-sm-10 align-self-center text-center">
                                    <a href="?path=delete" class="btn btn-primary">Volver</a>
                                </div>
                            
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

<?php
print "<!-- Bottom -->";
include 'view/plantillas/bottom.php';
?>




