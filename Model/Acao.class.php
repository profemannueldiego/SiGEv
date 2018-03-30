<?php


class Acao
{
    private $id;
    private $tipo;
    private $nome;
    private $dtIncio;
    private $dtFim;
    private $ch;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDtIncio()
    {
        return $this->dtIncio;
    }

    /**
     * @param mixed $dtIncio
     */
    public function setDtIncio($dtIncio)
    {
        $this->dtIncio = $dtIncio;
    }

    /**
     * @return mixed
     */
    public function getDtFim()
    {
        return $this->dtFim;
    }

    /**
     * @param mixed $dtFim
     */
    public function setDtFim($dtFim)
    {
        $this->dtFim = $dtFim;
    }

    /**
     * @return mixed
     */
    public function getCh()
    {
        return $this->ch;
    }

    /**
     * @param mixed $ch
     */
    public function setCh($ch)
    {
        $this->ch = $ch;
    }



}