<?php

require_once 'Cpf.php';
require_once 'Conta.php';
require_once 'Titular.php';

$primeiroCpf = new Cpf('465.444.888-10');
$primeirotitular = new Titular('raphael', $primeiroCpf);
$primeiraConta = new Conta($primeirotitular);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 


echo $primeiraConta->recuperaNome().PHP_EOL;
echo $primeiraConta->recuperaCpfConta().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;


echo Conta::recuperaNumeroDeContas() .PHP_EOL;
