<?php
class Technology {
  public $_marca;
  public $_modello;
  public $_anno;
  public $_colore;
  public $_prezzo;
  public $_display;
  public $_connettivita;
  public $_sistema_operativo;

  // function __construct($marca, $modello, $anno)
  // {
  //   $this->_marca = $marca;
  //   $this->_modello = $modello;
  //   $this->_anno = $anno;
  // }

  public function setMarca($marca){
    $this->_marca = $marca;
  }

  public function setModello($modello){
    $this->_modello = $modello;
  }

  public function setAnno($anno){
    $this->_anno = $anno;
  }

  public function setColore($colore){
    $this->_colore = $colore;
  }

  public function setPrezzo($prezzo){
    $this->_prezzo = $prezzo;
  }

  public function setDisplay($display){
    $this->_display = $display;
  }

  public function setConnettivita($connettivita){
    $this->_connettivita = $connettivita;
  }

  public function setSistemaOperativo($sistema_operativo){
    $this->_sistema_operativo = $sistema_operativo;
  }

  public function getMarca(){
    return $this->_marca;
  }

  public function getModello(){
    return $this->_modello;
  }

  public function getAnno(){
    return $this->_anno;
  }

  public function getColore(){
    return $this->_colore;
  }

  public function getPrezzo(){
    return $this->_prezzo;
  }

  public function getDisplay(){
    return $this->_display;
  }

  public function getConnettivita(){
    return $this->_connettivita;
  }

  public function getSistemaOperativo(){
    return $this->_sistema_operativo;
  }

  public function getInfo(){
    return [
      $this->_marca,
      $this->_modello,
      $this->_anno,
      $this->_colore,
      $this->_prezzo,
      $this->_display,
      $this->_connettivita,
      $this->_sistema_operativo
    ];
  }
}


  // $phoneApple = new Technology();
  // $phoneApple->_marca = "Apple";
  // $phoneApple->_modello = "IPhone 6";
  // $phoneApple->_anno = 2014;
  // $phoneApple->_colore = "Nero";
  // $phoneApple->_prezzo = 220;
  // $phoneApple->_display = "Touchscreen";
  // $phoneApple->_connettività = "Wi-Fi, Bluetooth";
  // $phoneApple->sistema_operativo = "iOS 8";
  // var_dump($phoneApple);

 ?>
