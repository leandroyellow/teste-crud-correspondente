<?php
require 'php/config.php';
require 'php/db-models/CorrespondenciaMysql.php';

$correspondencia = new CorrespondenciaMysql($pdo);

$corr = false;
$id = filter_input(INPUT_GET, 'id');

if($id) {
   $corr = $correspondencia->findById($id);
}

if($corr === false) {
   header("Location: index.php");
   exit;
}

require 'head.php';
?>



<div class="container">

   <h2>Editar Cadastro</h2>

   <form class="row g-3" action="editar-correspondencia.php" method="post">
      <div class="col-md-6">
         <label for="nome_empresa" class="form-label">Nome da Empresa</label>
         <input name="nome_empresa" type="text" class="form-control" id="nome_empresa" value="<?=$corr->getNomeEmpresa(); ?>" required>
      </div>
      <div class="col-md-6">
         <label for="destinatario" class="form-label">Destinatário</label>
         <input name="destinatario" type="text" class="form-control" id="destinatario" value="<?=$corr->getDestinatario(); ?>" required>
      </div>

      <div class="col-md-2">
         <label for="cep" class="form-label">CEP</label>
         <input name="cep" type="text" class="form-control" id="cep" value="<?=$corr->getCep(); ?>">
      </div>
      <div class="col-md-6">
         <label for="logradouro" class="form-label">Endereço</label>
         <input name="logradouro" type="text" class="form-control" id="logradouro" value="<?=$corr->getLogradouro(); ?>" required>
      </div>
      <div class="col-md-2">
         <label for="numero" class="form-label">Número</label>
         <input name="numero" type="text" class="form-control" id="numero" value="<?=$corr->getNumero(); ?>" required>
      </div>
      <div class="col-md-2">
         <label for="complemento" class="form-label">Complemanto</label>
         <input name="complemento" type="text" class="form-control" id="complemento" value="<?=$corr->getComplemento(); ?>">
      </div>
      
      <div class="col-md-6">
         <label for="cidade" class="form-label">Cidade</label>
         <input name="cidade" type="text" class="form-control" id="cidade" value="<?=$corr->getCidade(); ?>" required>
      </div>
      <div class="col-md-6">
         <label for="estado" class="form-label">Estado</label>
         <input name="estado" type="text" class="form-control" id="estado" value="<?=$corr->getEstado(); ?>" required>
      </div>

      <div class="col-md-6">
         <label for="remetente" class="form-label">Remetente</label>
         <input name="remetente" type="text" class="form-control" id="remetente" value="<?=$corr->getRemetente(); ?>" required>
      </div>
      <div class="col-md-4">
         <label for="tipo" class="form-label">Tipo</label>
         <?php 
         if($corr->getTipo() == 1){
         ?>
         <select name="tipo" id="tipo" class="form-select" value="<?=$corr->getTipo(); ?>" required>
            <option >Tipo...</option>
            <option selected value="1">Carta Comum</option>
            <option value="2">Carta Registrada</option>
            <option value="3">PAC</option>
            <option value="4">SEDEX</option>
         </select>
         <?php
         }elseif($corr->getTipo() == 2){
         ?>
         <select name="tipo" id="tipo" class="form-select" value="<?=$corr->getTipo(); ?>" required>
            <option >Tipo...</option>
            <option value="1">Carta Comum</option>
            <option selected value="2">Carta Registrada</option>
            <option value="3">PAC</option>
            <option value="4">SEDEX</option>
         </select>
         <?php
         }elseif($corr->getTipo() == 3){
         ?>
         <select name="tipo" id="tipo" class="form-select" value="<?=$corr->getTipo(); ?>" required>
            <option >Tipo...</option>
            <option value="1">Carta Comum</option>
            <option value="2">Carta Registrada</option>
            <option selected value="3">PAC</option>
            <option value="4">SEDEX</option>
         </select>
         <?php
         }elseif($corr->getTipo() == 4){
         ?>
         <select name="tipo" id="tipo" class="form-select" value="<?=$corr->getTipo(); ?>" required>
            <option >Tipo...</option>
            <option value="1">Carta Comum</option>
            <option value="2">Carta Registrada</option>
            <option value="3">PAC</option>
            <option selected value="4">SEDEX</option>
         </select>
         <?php } ?>

      </div>
      <div class="col-md-2">
         <label for="data_envio" class="form-label">Data do Envio</label>
         <input name="data_envio" type="date" class="form-control" id="data_envio" value="<?=$corr->getDataEnvio(); ?>" required>
      </div>

      <div class="col-md-3">
         <label for="usuario" class="form-label">Usuário</label>
         <input name="usuario" type="text" class="form-control" id="usuario" value="<?=$corr->getUsuario(); ?>" required>
      </div>
      <div class="col-md-3">
         <label for="rastreio" class="form-label">Cod. Rastreio</label>
         <input name="rastreio" type="text" class="form-control" id="rastreio" value="<?=$corr->getRastreio(); ?>" required>
      </div>
      <div class="col-md-3">
         <label for="date_create" class="form-label">Data do Cadastro</label>
         <input name="date_create" type="date" class="form-control" id="date_create" value="<?=$corr->getDateCreate(); ?>">
      </div>
      <div class="col-md-3">
         <label for="date_update" class="form-label">Data de Atualização</label>
         <input name="date_update" type="date" class="form-control" id="date_update" >
      </div>

      <div class="col-12">
         <label for="ar" class="form-label">ar</label>
         <textarea name="ar" class="form-control" id="ar" rows="5"><?=$corr->getAr(); ?></textarea>
      </div>

      <input type="hidden" name="id" value="<?=$corr->getId(); ?>">

      
      <div class="col-12">
         <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
   </form>

</div>


<?php require 'footer.php'; ?>