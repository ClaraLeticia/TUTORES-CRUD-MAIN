<?php

class tutorBean
{
    public $MATRICULA;
    public $EMAIL;
    public $SENHA;
    public $NOME;
    public $TELEFONE;
    public $MATERIA;

    function __construct($m, $e, $s, $n, $t, $mate)
    {
        $this->MATRICULA = $m;
        $this->EMAIL = $e;
        $this->SENHA = $s;
        $this->NOME = $n;
        $this->TELEFONE = $t;
        $this->MATERIA = $mate;
    }
}
