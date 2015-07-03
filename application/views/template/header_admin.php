<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">Git UAP</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daniel Andres veliz Obregon <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>perfil">Perfil</a></li>
            <li><a href="<?=base_url()?>favoritos">Favoritos</a></li>
            <li><a href="<?=base_url()?>logout">Cesar Sesión</a></li>
          </ul>
        </li>
        <li><a href="<?=base_url()?>">Web</a></li>
        <li class="active"><a href="<?=base_url()?>">Panel de Administracion</a></li>
        <li><a href="<?=base_url()?>buscar">Buscar</a></li>
        <li><a href="<?=base_url()?>contacto">Contacto</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>