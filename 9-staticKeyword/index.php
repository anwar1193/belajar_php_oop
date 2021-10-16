<?php  

    // class contohStatic{
    //     public static $angka = 1;

    //     public static function halo(){
    //         return "hallo ". self::$angka . " kali";
    //     }
    // }

    // echo contohStatic::$angka;

    // echo '<br>';

    // echo contohStatic::halo();


    // Pembuktian nilai static akan selalu tetap meskipun object di instansiasi berulang kali

    class contoh{
        // public $angka = 1; // sebelum static
        public static $angka = 1; //setelah static
        public function halo(){
            //return "Halo ". $this->angka++ . " kali <br>"; // sebelum static
            return "Halo ". self::$angka++ . " kali <br>"; //setelah static
        }
    }

    $obj = new contoh;
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<hr>";

    $obj2 = new contoh;
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();

?>