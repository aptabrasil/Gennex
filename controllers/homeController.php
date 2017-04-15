<?php

class homeController extends controller {

  public function index() {
  	$usuario = new usuario();
  	$usuario->setNome('aldinei');
    $dados['usuarios'] = $usuario->getNome();
  	$this->loadTemplate('home',$dados);
  }
}

?>