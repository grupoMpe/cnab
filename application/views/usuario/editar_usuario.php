<div class="container">

  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('usuario/atualizarUsuario'); ?>">
    <input type="hidden" name="<?php echo model_usuario::ID; ?>" id="id_usu" value="<?php echo $usuario[model_usuario::ID]; ?>" />
    <fieldset class="col-sm-6 center col-lg-offset-3">
      <div class="form-group">
        <label for="login_usu" class="col-sm-3 control-label">Login</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="login_usu" name="<?php echo model_usuario::LOGIN; ?>" placeholder="Login para entrada no sistema" required value="<?php echo $usuario[model_usuario::LOGIN]; ?>" disabled="" />
        </div>
      </div>
      <div class="form-group">
        <label for="senha_usu" class="col-sm-3 control-label">Senha</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="senha_usu" name="<?php echo model_usuario::SENHA; ?>" placeholder="Senha para a entrada no sistema" value="" />
        </div>
      </div>
      <div class="form-group">
        <label for="senha_usu" class="col-sm-3 control-label">Confirmação da Senha</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="confirm_senha" name="confirm_senha" placeholder="Confirme sua senha" value="" />
        </div>
      </div>
      <div class="form-group">
        <label for="nome" class="col-sm-3 control-label">Nome</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nome" name="<?php echo model_usuario::NOME; ?>" placeholder="Nome Completo do usuário" required value="<?php echo $usuario[model_usuario::NOME]; ?>" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-3 control-label">E-mail</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="email" name="<?php echo model_usuario::EMAIL; ?>" placeholder="E-mail do usuário" required value="<?php echo $usuario[model_usuario::EMAIL]; ?>" />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-9">
          <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
      </div>
    </fieldset>
  </form>
</div> <!-- /container --> 