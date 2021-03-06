<!-- Core CSS - Include with every page -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

   <!-- /.navbar-header -->
   <nav class="navbar navbar-custom navbar-fixed-top" style="color" role="navigation">
   <ul class="nav navbar-top-links navbar-right">
   <li><a href="index.php">Home</a></li>
   <li><a href="courses.php">Cursos</a></li>
<li><a href="formandos.php">Formandos</a></li>
<li><a href="formadores.php">Formandores</a></li>

<li><a href="agenda.php">Agenda</a></li>
<li><a href="users.php">Usuarios</a></li>
<li><a href="../index.php">Website</a></li>
    <!-- Exibe Notificações -->
   <?php include('notificacao.php'); ?> 

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $_SESSION['nomeUsuario'];?> <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </nav>
<style>
   .navbar-custom {
    background-color: #7c1362;
}

.navbar-top-links>li>a{
    color:#ffffff;
}
</style>