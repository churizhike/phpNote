<?php
class Account {
    private $user = 1;
    private $pwd = 2;

    public function __set($name, $value) {
        echo "setting $name to $value \r\n";
        $this->$name = $value;
    }
    public function __get($name) {
        if(!isset($this->$name)) {
            echo "未设置";
            $this->$name = "正在为您设置默认值";
        }
        return $this->$name;
    }
}
$a = new Account();

$reflect = new ReflectionObject($a);
$props = $reflect->getProperties();
foreach($props as $prop) {
    print $prop->getName();
}

$m = $reflect->getMethods();
foreach($m as $prop) {
    print $prop->getName();
}
?>