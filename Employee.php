<?php

class Employee
{
    public $name,$surname,$position,$department,
        $pay,$birthday;
    function __construct($name="",$surname="",$position="",
                         $department="",$pay="",$birthday="")
    {
        $this->name=$name;
        $this->surname = $surname;
        $this->position = $position;
        $this->department = $department;
        $this->pay = $pay;
        $this->birthday = $birthday;
    }
    function EmployeePrint()
    {
        echo "Имя:   $this->name  <br> Фамилия:   $this->surname <br>
        Должность:   $this->position <br> Отдел:   $this->department <br>
        Оклад:   $this->pay <br> День рождения:   $this->birthday <br>";
    }
    function  StringForWriteInFile()
    {
        return $this->name."  ".$this->surname."  ".$this->position."  ".
        $this->department."  ".$this->pay."  ".$this->birthday."\r\n";
    }

}