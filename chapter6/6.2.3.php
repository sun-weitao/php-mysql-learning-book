<?php
class Employee
{
    public $name = "Jhon"; //声明属性 私有变共有
    private $title;
    private $wage;

    // final $ssn; //final 作用域

    var $testSetVar;
    //只有在设置私有属性时才会发生调用
    function __set($propName, $propValue)
    {
        echo "Nonexistent variable: \$$propName!" . "<br>";
    }
    //只有在访问私有属性的时候才会发生调用 
    function __get($propName)
    {
        echo "__get called!<br>";
        echo $propName . "<br>";
        $vars = array("name", "city", "title");
        if (in_array($propName, $vars)) {
            return $this->$propName; //?
        } else {
            return "No such variable!";
        }
    }

    protected function clockIn()
    {
        echo "Member $this->name clocked in at " . date("h:i:s");
    }
    protected function clockOut()
    {
        echo "Member $this->name clocked out at " . date("h:i:s");
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

}

$employee = new Employee();

$employee->name = "WangZhang"; //无法为私有属性赋值
$employee->title = "set title"; //如果使用了魔术方法可以为私有属性赋值

// $employee->setName("ZhangChao");
$employee->testSetVar = "testSetVal";

echo $employee->name . "<br>"; //访问属性
echo $employee->title;
// echo $employee->$title;//私有变量不可访问 
