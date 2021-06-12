<?php
class Calcular
{
    public $num1;
    public $num2;
    public $res;

    public function getNum1()
    {
        return $this->num1;
    }
    public function getNum2()
    {
        return $this->num2;
    }
    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }
    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }

    public function Sumar()
    {
        $res = $this->getNum1() + $this->getNum2();
        echo $this->getNum1() . " + " . $this->getNum2() . " = ".$res;
    }
    public function Restar()
    {
        $res = $this->getNum1() - $this->getNum2();
        echo $this->getNum1() . " * " . $this->getNum2() . " = ".$res;
    }
    public function Multiplicar()
    {
        $res = $this->getNum1() * $this->getNum2();
        echo $this->getNum1() . " * " . $this->getNum2() . " = ".$res;
    }
    public function Dividir()
    {
        $res = $this->getNum1() / $this->getNum2();
        echo $this->getNum1() . " / " . $this->getNum2() . " = ".$res;
    }
}

$calcular = new Calcular();
if (isset($_POST["suma"])) {
    $calcular->setNum1($_POST['num1']);
    $calcular->setNum2($_POST['num2']);
    $calcular->Sumar();
} elseif (isset($_POST['resta'])) {
    $calcular->setNum1($_POST['num1']);
    $calcular->setNum2($_POST['num2']);
    $calcular->Restar();
}elseif (isset($_POST['mult'])) {
    $calcular->setNum1($_POST['num1']);
    $calcular->setNum2($_POST['num2']);
    $calcular->Multiplicar();
}elseif (isset($_POST['divi'])) {
    $calcular->setNum1($_POST['num1']);
    $calcular->setNum2($_POST['num2']);
    $calcular->Dividir();
}
?>