<?php

function a($palavra){
  echo($palavra . "\n");
}

//sempre com letra maiúscula
class Cadeira{

  public float $tamanhoDoEncosto;
  public int $numeroDePernas;
  public int $tamanhoDoAssento;

}

class Carro{
  public int $numeroDePortas;
  public string $cor;
  public string $somDaBuzina;

  public function __construct($sb, $c, $np){
    $this->somDaBuzina = $sb;
    $this->cor = $c;
    $this->numeroDePortas = $np;
  }

  function andar(){
    a("Andando...");
  }

  function buzinar()
  {
    a($this->somDaBuzina);
  }
}

class Fusca extends Carro{

  public string $motorista;

  function __construct ($sb, $c, $np, $nomeMotorista){
    parent::__construct($sb, $c, $np);
    $this->motorista = $nomeMotorista;
  }
}

$minhaCadeira = new Cadeira();

$minhaCadeira->tamanhoDoEncosto = 6.5;
$minhaCadeira->numeroDePernas = 4;
$minhaCadeira->tamanhoDoAssento = 8;

a($minhaCadeira->tamanhoDoEncosto);
a($minhaCadeira->numeroDePernas);

$meuCarro = new Carro("FUÓÓ", "preto", 4);

a($meuCarro->cor);
a($meuCarro->numeroDePortas);
a($meuCarro->somDaBuzina);

$meuFusca = new Fusca("FUÉÉÉE", "preto", 4, "Cleiton");
$meuFusca->buzinar();
a($meuFusca->motorista);
