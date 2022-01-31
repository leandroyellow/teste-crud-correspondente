<?php

require 'php/models/Correspondencia.php';

class CorrespondenciaMysql implements Correspondencias {

   private $pdo;

   public function __construct(PDO $driver){
      $this->pdo = $driver;
   }

   public function add(Correspondencia $x){
      $sql = $this->pdo->prepare("INSERT INTO correspondencia (
         nome_empresa,
         destinatario,
         logradouro,
         numero,
         complemento,
         cep,
         cidade,
         estado,
         remetente,
         tipo,
         ar,
         data_envio,
         cod_rastreio,
         usuario,
         date_create,
         date_update
      ) VALUES (
         :nome_empresa,
         :destinatario,
         :logradouro,
         :numero,
         :complemento,
         :cep,
         :cidade,
         :estado,
         :remetente,
         :tipo,
         :ar,
         :data_envio,
         :cod_rastreio,
         :usuario,
         :date_create,
         :date_update
      )");
      $sql->bindvalue(':nome_empresa', $x->getNomeEmpresa());
      $sql->bindvalue(':destinatario', $x->getDestinatario());
      $sql->bindvalue(':logradouro', $x->getLogradouro());
      $sql->bindvalue(':numero', $x->getNumero());
      $sql->bindvalue(':complemento', $x->getComplemento());
      $sql->bindvalue(':cep', $x->getCep());
      $sql->bindvalue(':cidade', $x->getCidade());
      $sql->bindvalue(':estado', $x->getEstado());
      $sql->bindvalue(':remetente', $x->getRemetente());
      $sql->bindvalue(':tipo', $x->getTipo());
      $sql->bindvalue(':ar', $x->getAr());
      $sql->bindvalue(':data_envio', $x->getDataEnvio());
      $sql->bindvalue(':cod_rastreio', $x->getRastreio());
      $sql->bindvalue(':usuario', $x->getUsuario());
      $sql->bindvalue(':date_create', $x->getDateCreate());
      $sql->bindvalue(':date_update', $x->getDateUpgrade());
      $sql->execute();


      $x->setId($this->pdo->lastInsertId());
      return $x;
   }

   public function findAll(){
      $array = [];
      $sql = $this->pdo->query("SELECT * FROM correspondencia");
      if($sql->rowCount() > 0){
         $data = $sql->fetchAll();

         foreach($data as $item){
            $x = new Correspondencia();
            $x->setId($item['id_correspondencia']);
            $x->setNomeEmpresa($item['nome_empresa']);
            $x->setDestinatario($item['destinatario']);
            $x->setLogradouro($item['logradouro']);
            $x->setNumero($item['numero']);
            $x->setComplemento($item['complemento']);
            $x->setCep($item['cep']);
            $x->setCidade($item['cidade']);
            $x->setEstado($item['estado']);
            $x->setRemetente($item['remetente']);
            $x->setTipo($item['tipo']);
            $x->setAr($item['ar']);
            $x->setDataEnvio($item['data_envio']);
            $x->setRastreio($item['cod_rastreio']);
            $x->setUsuario($item['usuario']);
            $x->setDateCreate($item['date_create']);
            $x->setDateUpgrade($item['date_update']);

            $array[] = $x;
         }
      }
      return $array;
   }

   public function findById($id){
      $sql = $this->pdo->prepare("SELECT * FROM correspondencia WHERE id_correspondencia = :id");
      $sql->bindValue(':id', $id);
      $sql->execute();

      if($sql->rowCount() > 0) {
         $item = $sql->fetch();

        
         $x = new Correspondencia();
         $x->setId($item['id_correspondencia']);
         $x->setNomeEmpresa($item['nome_empresa']);
         $x->setDestinatario($item['destinatario']);
         $x->setLogradouro($item['logradouro']);
         $x->setNumero($item['numero']);
         $x->setComplemento($item['complemento']);
         $x->setCep($item['cep']);
         $x->setCidade($item['cidade']);
         $x->setEstado($item['estado']);
         $x->setRemetente($item['remetente']);
         $x->setTipo($item['tipo']);
         $x->setAr($item['ar']);
         $x->setDataEnvio($item['data_envio']);
         $x->setRastreio($item['cod_rastreio']);
         $x->setUsuario($item['usuario']);
         $x->setDateCreate($item['date_create']);
         $x->setDateUpgrade($item['date_update']);

         return $x;
      }else{
         return false;
      }
   }

   public function update(Correspondencia $x){
      $sql = $this->pdo->prepare("UPDATE correspondencia SET 
         nome_empresa = :nome_empresa,
         destinatario = :destinatario,
         logradouro = :logradouro,
         numero = :numero,
         complemento = :complemento,
         cep = :cep,
         cidade = :cidade,
         estado = :estado,
         remetente = :remetente,
         tipo = :tipo,
         ar = :ar,
         data_envio = :data_envio,
         cod_rastreio = :cod_rastreio,
         usuario = :usuario,
         date_create = :date_create,
         date_update = :date_update WHERE id_correspondencia = :id");

      $sql->bindvalue(':nome_empresa', $x->getNomeEmpresa());
      $sql->bindvalue(':destinatario', $x->getDestinatario());
      $sql->bindvalue(':logradouro', $x->getLogradouro());
      $sql->bindvalue(':numero', $x->getNumero());
      $sql->bindvalue(':complemento', $x->getComplemento());
      $sql->bindvalue(':cep', $x->getCep());
      $sql->bindvalue(':cidade', $x->getCidade());
      $sql->bindvalue(':estado', $x->getEstado());
      $sql->bindvalue(':remetente', $x->getRemetente());
      $sql->bindvalue(':tipo', $x->getTipo());
      $sql->bindvalue(':ar', $x->getAr());
      $sql->bindvalue(':data_envio', $x->getDataEnvio());
      $sql->bindvalue(':cod_rastreio', $x->getRastreio());
      $sql->bindvalue(':usuario', $x->getUsuario());
      $sql->bindvalue(':date_create', $x->getDateCreate());
      $sql->bindvalue(':date_update', $x->getDateUpgrade());
      $sql->bindValue(':id', $x->getId());
      $sql->execute();

      return true;
   }

   public function delete($id){
      $sql = $this->pdo->prepare("DELETE FROM correspondencia WHERE id_correspondencia = :id");
      $sql->bindValue(':id', $id);
      $sql->execute();
   }

}