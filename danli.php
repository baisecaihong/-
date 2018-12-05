<?php
//2018年12月5日14:27:05
//单例模式
class danli{

    private $value = array();

    private static $instance;

    public static function getInstance()
    {
        if(!(self::$instance)){
            self::$instance = new danli();
        }
        return self::$instance;
    }

    private function __construct()
    {

    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public function setValue($key,$val){
        $this->value[$key] = $val;
    }

    public function getValue($key){
        return $this->value[$key];
    }
}

$danli = danli::getInstance();
$danli->setValue('name','白色彩虹');
unset($danli);
var_dump($danli);
$danli2 = danli::getInstance();
print $danli2->getValue('name');