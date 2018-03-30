<?php
require_once "./Conf/Conexao.php";
require_once "Model/Participante.php";
class ParticipanteDAO
{
    public function listarTudo()
    {
        $sql = "SELECT * FROM participantes WHERE 1";
        $pdo = Database::conectar();
        $stmt = $pdo->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        for($i=0; $i<$stmt->rowCount(); $i++){
            $ativ[$i] = new Atividade();

            $ativ[$i]->setNomeCompleto($result[$i]['nomeCompleto']);
            $ativ[$i]->setCpf($result[$i]['cpf']);
            $ativ[$i]->setCidadeOrigem($result[$i]['cidadeOrigem']);
            $ativ[$i]->setEmail($result[$i]['email']);
            $ativ[$i]->setUsuario($result[$i]['usuario']);
            $ativ[$i]->setId($result[$i]['id']);
            $ativ[$i]->setDtRegistro($result[$i]['dtRegistro']);
        }

        return $ativ;
    }

    public function inserir($Participante)
    {

        $nomeCompleto = $Participante->getNomeCompleto();
        $cpf = $Participante->getCpf();
        $cidade = $Participante->getCidadeOrigem();
        $email = $Participante->getEmail();
        $usuario = $Participante->getUsuario();
        $senha = $Participante->getSenha();
        $dtRegistro = $Participante->getDtRegistro();

        $sql = "INSERT INTO participantes(nomeCompleto,cpf,cidadeOrigem,email,usuario,senha,dtRegistro) VALUES(:nomeCompleto,:cpf,:cidade,:email,:usuario,:senha,:dtRegistro)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nomeCompleto', $nomeCompleto);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':dtRegistro', $dtRegistro);
        $ok = $stmt->execute();
        return $ok;
    }
}