<?php 
session_start();
require 'php/config.php';
require 'php/db-models/CorrespondenciaMysql.php';

$correspondencia = new CorrespondenciaMysql($pdo);

$lista = $correspondencia->findAll();

require 'head.php'; ?>

<div class="container mt-5">
<a href="form-cadastro.php" class="btn btn-primary btn-lg mb-5" tabindex="-1" role="button">Cadastrar</a>

<?php
if(isset($_SESSION['mensagem'])){
   echo $_SESSION['mensagem'];
   unset($_SESSION['mensagem']);
}
?>



<table class="table table-striped table-hover mt-5">
   <tr>
      <th>Data e hora da solicitação da correspondência</th>
      <th>Data de envio</th>
      <th>Nome da empresa</th>
      <th>A/C</th>
      <th>Cód Rastreio</th>
      <th>usuário</th>
      <th>ac</th>
      
   </tr>
   <?php foreach($lista as $cors): ?>
   <tr>
      <td><?=$cors->getDateCreate();?></td>
      <td><?=$cors->getDataEnvio();?></td>
      <td><?=$cors->getNomeEmpresa();?></td>
      <td><?=$cors->getDestinatario();?></td>
      <td><?=$cors->getRastreio();?></td>
      <td><?=$cors->getUsuario();?></td>
      <td>
         <a href="editar.php?id=<?=$cors->getId();?>" class="btn btn-primary btn-sm">Atualizar</a>
         <a onclick="alertaMensagem(event)" href="excluir.php?id=<?=$cors->getId();?>" class="btn btn-danger btn-sm">Excluir</a>
         
      </td>
   </tr>
   <?php endforeach; ?>
</table>



</div>

<footer>
   
</footer>

<script>
   function alertaMensagem(e){
      e.preventDefault();

      const swalWithBootstrapButtons = Swal.mixin({
         customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
         },
         buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
         title: 'Deseja realmente excluir dados de correspondência?',
         text: "Atenção os dados serão excluidos imediatamente",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonText: 'Sim, excluir!',
         cancelButtonText: 'Não, cancelar!',
         reverseButtons: true
      }).then((result) => {
         if(result.isConfirmed){
            swalWithBootstrapButtons.fire(
               'Excluido!',
               'Registro de correspondência foi excluido.',
               'success'
            )
            location.href = e.target.href;
         }else if(
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
         ) {
            swalWithBootstrapButtons.fire(
               'Processo cancelado',
               'Nada ocorreu',
               'info'
            )
         }
      })
   }
   
</script>


</body>
</html>
