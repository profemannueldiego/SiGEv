<?php


class Participacao
{
    private $id;
    private $dtParticipa;
    private $Participante;
    private $Acao;
    private $status;

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
    public function getDtParticipa()
    {
        return $this->dtParticipa;
    }

    /**
     * @param mixed $dtParticipa
     */
    public function setDtParticipa($dtParticipa)
    {
        $this->dtParticipa = $dtParticipa;
    }

    /**
     * @return mixed
     */
    public function getParticipante()
    {
        return $this->Participante;
    }

    /**
     * @param mixed $Participante
     */
    public function setParticipante($Participante)
    {
        $this->Participante = $Participante;
    }

    /**
     * @return mixed
     */
    public function getAcao()
    {
        return $this->Acao;
    }

    /**
     * @param mixed $Acao
     */
    public function setAcao($Acao)
    {
        $this->Acao = $Acao;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}