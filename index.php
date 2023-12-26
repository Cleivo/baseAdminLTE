<!DOCTYPE html>
<html lang="pt-br">
    <?php include('cabecalho.php'); ?>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php 
                include('preloader.php'); 
                include('navbar.php');
                include('menu.php');
            ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php
                    include('dashboard.php');
                ?>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                
                <?php include('conteudo.php');?>
                
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
      
        <?php
            include('rodape.php');
        ?>
      
      

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        
        <!-- ./wrapper -->

        <?php include('scripts.php');?>
    </body>
</html>
