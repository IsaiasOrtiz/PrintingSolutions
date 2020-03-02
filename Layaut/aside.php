
<!-- Sidebar -->
<aside class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><a href="index"><img src="<?php echo constant('URL')?>views/img/brand.png" alt="brand"></a></div>
        <div class="info-user">
            <p><?php echo $_SESSION["usuario"];?></p>
            <p><i class="fa fa-circle text-success"></i> Online</p>
        </div>
    <div class="list-group">
        <a href="index" class="list-group-item list-group-item-action"><i class="fas fa-home mr-2"></i>Inicio</a>
        <?php if($_SESSION["privilegio"] == '3'){?>
        <a href="<?php echo constant('URL')?>usuarios" class="list-group-item list-group-item-action"><i class="fas fa-users mr-2"></i>Usuarios</a>
        <a href="<?php echo constant('URL')?>edificios" class="list-group-item list-group-item-action"><i class="fas fa-building mr-2"></i>Edificios</a>
        <a href="<?php echo constant('URL')?>laboratorios_admin" class="list-group-item list-group-item-action"><i class="fas fa-desktop mr-2"></i>Laboratorios</a>
        <a href="<?php echo constant('URL')?>nuevo" class="list-group-item list-group-item-action"><i class="fas fa-plus-circle mr-2"></i>Nueva</a>
        <a href="<?php echo constant('URL')?>editar" class="list-group-item list-group-item-action"><i class="fas fa-edit mr-2"></i>Editar</a>
        <?php }?>
        <?php if($_SESSION["privilegio"] == '2'){?>
            <a href="<?php echo constant('URL')?>laboratorios" class="list-group-item list-group-item-action"><i class="fas fa-desktop mr-2"></i>Laboratorios</a>
            <a href="<?php echo constant('URL')?>horarios_practicas" class="list-group-item list-group-item-action"><i class="far fa-eye mr-2"></i>Ver prácticas</a>
            <a href="<?php echo constant('URL')?>crear" class="list-group-item list-group-item-action"><i class="fas fa-plus-circle mr-2"></i>Crear prácticas</a>
        <?php }?>
        <?php if($_SESSION["privilegio"] == '1'){?>
            <a href="<?php echo constant('URL')?>laboratorios" class="list-group-item list-group-item-action"><i class="fas fa-desktop mr-2"></i>Laboratorios</a>
        <?php }?>
        <a href="<?php echo constant('URL')?>cambio_password" class="list-group-item list-group-item-action"><i class="fas fa-user-circle mr-2"></i>Cambiar contraseña</a>
        <a href="<?php echo constant('URL')?>salir" class="list-group-item list-group-item-action"><i class="fas fa-sign-out-alt mr-2"></i>Salir</a>
    </div>
</aside>
<!-- /#sidebar-wrapper -->