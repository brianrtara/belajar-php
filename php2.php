<?php
class laptop{
    private $pemilik="rezha";
            $merk="xiaomi";

            public function __construct(){
                echo "ini berasal dari construct laptop";
            }
            public function hidupkan_laptop(){
                return"hidupkan laptop $this->merk punya $this->pemilik";
            }
            public function __destruct(){
                echo "ini berasal dari destructor laptop";
            }
}
            $laptop_rezha = new laptop ();
            echo "<br>";
            echo $laptop__rezha->hidupkan_laptop();
            echo"<br/>";s
?>