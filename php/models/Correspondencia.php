<?php

class Correspondencia {
   private $id;
   private $nome_empresa;
   private $destinatario;
   private $logradouro;
   private $numero;
   private $complemento;
   private $cep;
   private $cidade;
   private $estado;
   private $remetente;
   private $tipo;
   private $ar;
   private $data_envio;
   private $cod_rastreio;
   private $usuario;
   private $date_create;
   private $date_upgrade;

   public function getId(){
      return $this->id;
   }
   public function setId($x){
      $this->id = $x;
   }

   public function getNomeEmpresa(){
      return $this->nome_empresa;
   }
   public function setNomeEmpresa($x){
      $this->nome_empresa = ucwords(trim($x));
   }

   public function getDestinatario(){
      return $this->destinatario;
   }
   public function setDestinatario($x){
      $this->destinatario = ucwords(trim($x));
   }

   public function getLogradouro(){
      return $this->logradouro;
   }
   public function setLogradouro($x){
      $this->logradouro = ucwords(trim($x));
   }

   public function getNumero(){
      return $this->numero;
   }
   public function setNumero($x){
      $this->numero = trim($x);
   }

   public function getComplemento(){
      return $this->complemento;
   }
   public function setComplemento($x){
      $this->complemento = trim($x);
   }

   public function getCep(){
      return $this->cep;
   }
   public function setCep($x){
      $this->cep = trim($x);
   }

   public function getCidade(){
      return $this->cidade;
   }
   public function setCidade($x){
      $this->cidade = ucwords(trim($x));
   }

   public function getEstado(){
      return $this->estado;
   }
   public function setEstado($x){
      $this->estado = ucwords(trim($x));
   }

   public function getRemetente(){
      return $this->remetente;
   }
   public function setRemetente($x){
      $this->remetente = ucwords(trim($x));
   }

   public function getTipo(){
      return $this->tipo;
   }
   public function setTipo($x){
      $this->tipo = trim($x);
   }

   public function getAr(){
      return $this->ar;
   }
   public function setAr($x){
      $this->ar = trim($x);
   }

   public function getDataEnvio(){
      return $this->data_envio;
   }
   public function setDataEnvio($x){
      $this->data_envio = trim($x);
   }

   public function getRastreio(){
      return $this->cod_rastreio;
   }
   public function setRastreio($x){
      $this->cod_rastreio = strtoupper(trim($x));
   }

   public function getUsuario(){
      return $this->usuario;
   }
   public function setUsuario($x){
      $this->usuario = ucwords(trim($x));
   }

   public function getDateCreate(){
      return $this->date_create;
   }
   public function setDateCreate($x){
      $this->date_create = trim($x);
   }

   public function getDateUpgrade(){
      return $this->date_upgrade;
   }
   public function setDateUpgrade($x){
      $this->date_upgrade = trim($x);
   }

   

}

interface Correspondencias {
   public function add(Correspondencia $x);
   public function findAll();
   public function findById($id);
   public function update(Correspondencia $x);
   public function delete($id);
}