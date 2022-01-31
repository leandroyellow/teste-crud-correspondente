<?php require 'head.php'; ?>

<div class="container">

   <h2>Novo Cadastro</h2>

   <form class="row g-3" action="cadastrar-correspondencia.php" method="post">
      <div class="col-md-6">
         <label for="nome_empresa" class="form-label">Nome da Empresa</label>
         <input name="nome_empresa" type="text" class="form-control" id="nome_empresa" required>
      </div>
      <div class="col-md-6">
         <label for="destinatario" class="form-label">Destinatário</label>
         <input name="destinatario" type="text" class="form-control" id="destinatario" required>
      </div>

      <div class="col-md-2">
         <label for="cep" class="form-label">CEP</label>
         <input name="cep" type="text" class="form-control" id="cep">
      </div>
      <div class="col-md-6">
         <label for="logradouro" class="form-label">Endereço</label>
         <input name="logradouro" type="text" class="form-control" id="logradouro" required>
      </div>
      <div class="col-md-2">
         <label for="numero" class="form-label">Número</label>
         <input name="numero" type="text" class="form-control" id="numero" required>
      </div>
      <div class="col-md-2">
         <label for="complemento" class="form-label">Complemanto</label>
         <input name="complemento" type="text" class="form-control" id="complemento">
      </div>
      
      <div class="col-md-6">
         <label for="cidade" class="form-label">Cidade</label>
         <input name="cidade" type="text" class="form-control" id="cidade" required>
      </div>
      <div class="col-md-6">
         <label for="estado" class="form-label">Estado</label>
         <input name="estado" type="text" class="form-control" id="estado" required>
      </div>

      <div class="col-md-6">
         <label for="remetente" class="form-label">Remetente</label>
         <input name="remetente" type="text" class="form-control" id="remetente" required>
      </div>
      <div class="col-md-4">
         <label for="tipo" class="form-label">Tipo</label>
         <select name="tipo" id="tipo" class="form-select" required>
            <option selected>Tipo...</option>
            <option value="1">Carta Comum</option>
            <option value="2">Carta Registrada</option>
            <option value="3">PAC</option>
            <option value="4">SEDEX</option>
         </select>
      </div>
      <div class="col-md-2">
         <label for="data_envio" class="form-label">Data do Envio</label>
         <input name="data_envio" type="date" class="form-control" id="data_envio" value="<?=date("Y-m-d");?>" required>
      </div>

      <div class="col-md-3">
         <label for="usuario" class="form-label">Usuário</label>
         <input name="usuario" type="text" class="form-control" id="usuario" required>
      </div>
      <div class="col-md-3">
         <label for="rastreio" class="form-label">Cod. Rastreio</label>
         <input name="rastreio" type="text" class="form-control" id="rastreio" required>
      </div>
      <div class="col-md-3">
         <label for="date_create" class="form-label">Data do Cadastro</label>
         <input name="date_create" type="date" class="form-control" id="date_create" value="<?=date("Y-m-d");?>">
      </div>
      <div class="col-md-3">
         <label for="date_update" class="form-label">Data de Atualização</label>
         <input name="date_update" type="date" class="form-control" id="date_update">
      </div>

      <div class="col-12">
         <label for="ar" class="form-label">ar</label>
         <textarea name="ar" class="form-control" id="ar" rows="5"></textarea>
      </div>

      

      
      <div class="col-12">
         <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
   </form>

</div>


<?php require 'footer.php'; ?>