<!--  
    Overriding : kita bisa menggunakan method yang sama dengan parent & isinya method nya bisa di modifikasi/ubah

    SOAL :
        * Lanjutan dari Inharitance,
        * Dengan teknik Overriding, ubah output : "Saya punya robot hewan yang suaranya : Rooooarrrrr!" , 
                                        menjadi : "Saya punya robot hewan yang suaranya : Rooooarrrrr! Hasil Overriding!!!"
-->

<?php  
    class robot{
        public $suara; // property

        // metode set (untuk memberi nilai property)
        public function set_suara($param_suara){
            $this->suara = $param_suara;
        }

        // metode get (untuk mengambil nilai property)
        public function get_suara(){
            return $this->suara;
        }
    }

    class robot_hewan extends robot{
        public function get_suara(){ // ini teknik Overriding
            return $this->suara.' Hasil Overriding!!!';
        }
    }

    $robotHewan = new robot_hewan;
    $robotHewan->set_suara("Rooooarrrrr!");
    echo "Saya punya robot hewan yang suaranya : ".$robotHewan->get_suara();
?>