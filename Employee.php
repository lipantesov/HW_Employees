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
        echo "���:   $this->name  <br> �������:   $this->surname <br>
        ���������:   $this->position <br> �����:   $this->department <br>
        �����:   $this->pay <br> ���� ��������:   $this->birthday <br>";
    }
    function  StringForWriteInFile()
    {
        return $this->name."  ".$this->surname."  ".$this->position."  ".
        $this->department."  ".$this->pay."  ".$this->birthday."\r\n";
    }

}