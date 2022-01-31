<?php
session_start();
require 'php/config.php';
require 'php/db-models/CorrespondenciaMysql.php';

$correspondencia = new CorrespondenciaMysql($pdo);

$nome_empresa = filter_input(INPUT_POST, 'nome_empresa');
$destinatario = filter_input(INPUT_POST, 'destinatario');
$cep = filter_input(INPUT_POST, 'cep');
$logradouro = filter_input(INPUT_POST, 'logradouro');
$numero = filter_input(INPUT_POST, 'numero');
$complemento = filter_input(INPUT_POST, 'complemento');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$remetente = filter_input(INPUT_POST, 'remetente');
$tipo = filter_input(INPUT_POST, 'tipo');
$data_envio = filter_input(INPUT_POST, 'data_envio');
$usuario = filter_input(INPUT_POST, 'usuario');
$rastreio = filter_input(INPUT_POST, 'rastreio');
$date_create = filter_input(INPUT_POST, 'date_create');
$date_update = filter_input(INPUT_POST, 'date_update');
$ar = filter_input(INPUT_POST, 'ar');
$id = filter_input(INPUT_POST, 'id');


if($nome_empresa && $destinatario){
   $novoCadastro = new Correspondencia();
   $novoCadastro->setNomeEmpresa($nome_empresa);
   $novoCadastro->setDestinatario($destinatario);
   $novoCadastro->setCep($cep);
   $novoCadastro->setLogradouro($logradouro);
   $novoCadastro->setNumero($numero);
   $novoCadastro->setComplemento($complemento);
   $novoCadastro->setCidade($cidade);
   $novoCadastro->setEstado($estado);
   $novoCadastro->setRemetente($remetente);
   $novoCadastro->setTipo($tipo);
   $novoCadastro->setDataEnvio($data_envio);
   $novoCadastro->setUsuario($usuario);
   $novoCadastro->setRastreio($rastreio);
   $novoCadastro->setDateCreate($date_create);
   $novoCadastro->setDateUpgrade($date_update);
   $novoCadastro->setAr($ar);
   $novoCadastro->setId($id);

   //$correspondencia->update($novoCadastro);
   
   if($correspondencia->update($novoCadastro)){
      $_SESSION['mensagem'] = "<script type='text/javascript'>
         Swal.fire({
         
         icon: 'success',
         title: 'Atualizado com sucesso',
         showConfirmButton: false,
         timer: 1500})
      </script>";
      header("Location: index.php");
      exit;
   }else{
      $_SESSION['mensagem'] = "<script type='text/javascript'>
         Swal.fire({
         
         icon: 'error',
         title: 'Erro ao atualizar!!!',
         showConfirmButton: false,
         timer: 1500})
      </script>";
      header("Location: index.php");
      exit;
   }
}
