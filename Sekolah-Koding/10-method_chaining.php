<!-- 
    * Dengan method chaining, kita bisa memanggil method di dalam sebuah class langsung 1 baris / bersambung
    * syaratnya, di method yang ingin kita sambung, beri kata kunci "return $this"

    * SOAL :
        > Buat sebuah class robot
        > Di dalam class robot, Buat 2 property (suara & berat) & 2 method (set_suara & set_berat)
        > Dengan metode chaining, gunakan set_suara & set_berat dalam 1 baris kode (chaining)
 -->

<?php  
    class robot{
        public $suara;
        public $berat;

        public function set_suara($params_suara){
            $this->suara = $params_suara;
            return $this; // syarat supaya set_suara bisa di chaining / di tambah 1 method di belakang nya
        }

        public function set_berat($params_berat){
            $this->berat = $params_berat;
        }
    }

    $my_robot = new robot;

    $my_robot->set_suara("Beep Beep Beep")->set_berat(30);

    echo "Suara Robot : ".$my_robot->suara . ' & Berat Robot : '.$my_robot->berat;
?>