<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 16.02.2016
 * Time: 14:36
 */
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // Перекрываем родительское определение
    public function myFunc()
    {
        // Но все еще вызываем родительскую функцию

        parent::myFunc();
        echo "OtherClass::myFunc()\n";
        echo "OtherClass::myFunc()\n";
        echo "OtherClass::myFunc()\n";
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();

class AddressManager {

    private $addresses = array ( "209.131.36.159", "192.168.2.1");

    function outputAddresses ( $resolve ) {

    foreach ( $this ->addresses as $address ) {
        print $address;
        if ($resolve) {
            print " ( " . gethostbyaddr($address) . " ) ";
        }
        print " \n ";
            }

    }
}

$o = new AddressManager();
$o->outputAddresses('false');

?>