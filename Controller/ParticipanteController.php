<?php
require_once "model/Participante.php";
require_once "model/ParticipanteDAO.php";

class atividadeController
{
    private $Participante;
    private $ParticipanteDAO;

    public function __construct()
    {
        $this->Participante = new Participante();
        $this->ParticipanteDAO = new ParticipanteDAO();
    }

    public function index()
    {
        $this->show();
    }

    public function create()
    {
        header('location: ../view/Participante/inserir.php');
    }

    public function store()
    {
        date_default_timezone_set("America/Fortaleza");
        setlocale(LC_ALL, 'pt_BR');
        $data_hora = date("Y-m-d H:i:s");

        $this->Participante->setNomeCompleto($_POST['nome']);
        $this->Participante->setUsuario($_POST['usuario']);
        $this->Participante->setCpf($_POST['cpf']);
        $this->Participante->setDataRegistro($data_hora);
        $this->Participante->setEmail($_POST['email']);
        $this->Participante->setSenha($_POST['senha']);
        $this->Participante->setCidadeOrigem($_POST['cidade']);

        $resp = $this->ParticipanteDAO->inserir($this->Participante);

        if($resp){
            header('location: index.php?classe=Participante&acao=show');
        }
        return "Não criado";
    }

    public function show()
    {
        $lista = $this->ParticipanteDAO->listarTudo();

        session_start();
        $_SESSION['POST'] = $lista;

        header("location: ./view/Participante/exibir.php");
    }

    public function edit($id)
    {
        $cli = $this->ParticipanteDAO->buscarCliente( $id );

        session_start();
        $_SESSION['POST'] = $cli;

        header("location: ./view/Participante/editar.php");
    }

}