<?php

class Pessoas {
private string $nome;
private int $cpf;
private string $email;

public function __construct(string $nome, int $cpf, string $email){
    
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->email = $email;

}

}
$Nathan = new Pessoas('Luan', 67676767676, 'luanrodigues40@gmail.com');

class Produtos {
private string $nome;
private int $preço;
private string $categoria;

public function __construct(string $nome, int $preço, string $categoria){

    $this->nome = $nome;
    if($preço <= 0){
$this->preço = $preço = 0;
    } else{
        $this->preço = $preço = $preço;
    }
    
    $this->categoria = $categoria;
}



public function PegarNome(){
    return $this->nome;
}
public function PegarPreço(){
    return $this->preço;
}
public function PegarCategoria(){
    return $this->categoria;
}

public function alterarValor(int $novoValor){
    $this->preço = $novoValor;
}

}
$Arroz = new Produtos('Arroz', 27, 'alimento');
echo $Arroz->PegarNome();
echo "<br>";
echo $Arroz->PegarPreço();

class Conta {
    private string $nome;
    private int $saldo;

    public function __construct(string $nome, int $saldo)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
    }
}
?> 