<?php
class Employee
{
    private $name;
    private $title;
    private $wage;
    private $hours;

    protected function clockIn()
    {
        echo "Member $this->name clocked in at " . date("h:i:s");
    }
    protected function clockOut()
    {
        echo "Member $this->name clocked out at " . date("h:i:s");
    }

    //构造方法
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function calculateSalary()
    {
        return $this->wage * $this->hours;
    }
    public function setHours($hours)
    {
        $this->hours = $hours;
    }
    public function setWage($wage)
    {
        $this->wage = $wage;
    }
}

$employee = new Employee("Janie");
$employee->setHours(12);
$employee->setWage(2);
$salary = $employee->calculateSalary();

echo "salary is " . $salary;


//方法作用域
class Visitors
{
    public function greetVisitor()
    {
        echo "Hello<br/>";
    }
    public function sayGoodbye()
    {
        echo "Goodbye<br/>";
    }
}
// 无法调用
// Visitors::greetVisitor();
$visitor = new Visitors();
$visitor->greetVisitor();
$visitor->sayGoodbye();

?>