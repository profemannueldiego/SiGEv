<?php


class Organizador
{
    private $id;
    private $nome;
    private $cpf;
    private $usuario;
    private $senha;
    private $cidadeOrigem;
    private $intitutOrigem;
    private $cursOrigem;


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
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getCidadeOrigem()
    {
        return $this->cidadeOrigem;
    }

    /**
     * @param mixed $cidadeOrigem
     */
    public function setCidadeOrigem($cidadeOrigem)
    {
        $this->cidadeOrigem = $cidadeOrigem;
    }

    /**
     * @return mixed
     */
    public function getIntitutOrigem()
    {
        return $this->intitutOrigem;
    }

    /**
     * @param mixed $intitutOrigem
     */
    public function setIntitutOrigem($intitutOrigem)
    {
        $this->intitutOrigem = $intitutOrigem;
    }

    /**
     * @return mixed
     */
    public function getCursOrigem()
    {
        return $this->cursOrigem;
    }

    /**
     * @param mixed $cursOrigem
     */
    public function setCursOrigem($cursOrigem)
    {
        $this->cursOrigem = $cursOrigem;
    }



}