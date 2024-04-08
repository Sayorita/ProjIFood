<?php
include_once ("conexao.php");
class ManipulaDados extends Conexao
{
    private $table, $fields, $dados,$fieldPk,$valuePk;

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($t)
    {
        $this->table = $t;
    }
    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($f)
    {
        $this->fields = $f;
    }

    public function getDados()
    {
        return $this->dados;
    }

    public function setDados($d)
    {
        $this->dados = $d;
    }
    public function getFieldPk()
    {  
        return $this->fieldPk;
    }
    public function setFieldPk($fieldPk)
    {
        $this->fieldPk = $fieldPk;
    }
    public function getValuePk()
    {
        return $this->valuePk;
    }
    public function setValuePk($valuePk)
    {
        $this->valuePk = $valuePk;
    }

    public function getNameById($id)
    {
        $this->sql = "SELECT * FROM $this->table WHERE id='$id'";
        $this->qr = self::execSQL($this->sql);

        $row = self::listQr($this->qr);
          
        return $row['nome'];
    }
    public function getComidaByRestaurante($id)
    {
        $this->sql = "SELECT * FROM $this->table WHERE id_restaurante='$id'";
        $this->qr = self::execSQL($this->sql);

        $dados = array();

        while ($row = self::listQr($this->qr)) {
            array_push($dados, $row);
        }
        return $dados;
    }
    public function getAllDataTable()
    {
        $this->sql = "SELECT * FROM $this->table";
        $this->qr = self::execSQL($this->sql);

        $dados = array();

        while ($row = self::listQr($this->qr)) {
            array_push($dados, $row);
        }
        return $dados;
    }
    public function validarLogin($login, $password)
    {
        $this->sql = "SELECT * FROM $this->table WHERE nome='$login' and senha ='$password'";
        $this->qr = self::execSQL($this->sql);
        $linhas = self::countData($this->qr);
        return $linhas;
    }

    public function insert()
    {
        $this->sql = "INSERT INTO $this->table($this->fields) VALUES ($this->dados)";
        if (self::execSQL($this->sql)) {
            $this->status = "Cadastrado com sucesso";
        } else {
            $this->status = "Erro ao cadastrar" . mysqli_error($this->connect());
        }
    }
    public function update()
    {
        $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldPk = '$this->valuePk'";
        if (self::execSQL($this->sql)) {
            $this->status = "Alterado com sucesso";
        } else {
            $this->status = "Erro ao alterar" . $this->table ." ". mysqli_error($this->connect());
        }
    }

    public function delete()
    {
        $this->sql = "DELETE FROM $this->table WHERE $this->fieldPk = '$this->valuePk'";
        if (self::execSQL($this->sql)) {
            $this->status = "Deletado com sucesso";
        } else {
            $this->status = "Erro ao deletar" . mysqli_error($this->connect());
        }
    }

}

?>