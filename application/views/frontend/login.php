<div id="myModal" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="frmlogin" class="form-horizontal" method="post" action="<?=base_url()?>login">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Entrar a Git UAP</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div id="msg_error" style="padding: 15px;margin-bottom: 15px"></div>
            <input type="hidden" name="sis" value="26142834613461134841341">
            <div class="form-group">
              <label for="usuario" class="col-sm-2 control-label">Usuario</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="usuario" name="user" placeholder="¿Cual es su usuario?">
              </div>
            </div>
            <div class="form-group">
              <label for="clave" class="col-sm-2 control-label">Contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="clave" name="pass" placeholder="¿Cual es su contraseña?">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> No cerrar sesión
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-offset-2 col-sm-10">
                <a href="#">¿Olvidaste tu contraseña?</a>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <a href="#">Regístrate en Git UAP</a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input id="btnlogin" type="submit" class="btn btn-primary" value="Iniciar Sesión">
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->