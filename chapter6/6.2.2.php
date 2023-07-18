<?php
class Employee
{
    private $name;
    private $title;
    private $wage;

    protected function clockIn()
    {
        echo "Member $this->name clocked in at " . date("h:i:s");
    }
    protected function clockOut()
    {
        echo "Member $this->name clocked out at " . date("h:i:s");
    }
}

//测试date 函数
echo "current time is " . date("h:i:s") . "<br>";
echo "yyyy-MM-dd HH:mm:ss " . date("Y-m-d H:i:s") . "<br>";

//创建对象
$employee = new Employee();