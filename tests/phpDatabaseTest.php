<?php
    class ConfigTest extends  \PHPUnit\Framework\TestCase{

        function testConnectionOK(){
            include "app\config.php";
            $this->assertEquals(is_object($db),true);
        }
    }
?>