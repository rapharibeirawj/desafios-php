<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpfTitular($cpf);
        $this->cpf = $cpf;

    }
    private function validaCpfTitular(string $cpfTitular)
    {
        if (strlen($cpfTitular) < 14) 
        {
            echo "cpf precisa ter pelo menos 14 caracteres";
            exit();
    }
}
    public function recuperaCpf(): string
    {
        return $this->cpf;
}
}