<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpf->recuperaCpf();
    }
}