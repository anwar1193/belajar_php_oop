<!-- 
    Inharitance/Pewarisan memungkinkan kita untuk membuat sebuah class baru, yang isi nya (baik property dan method) mengikuti parent nya

    SOAL :
    * Buat sebuah class robot yang isinya setter & getter
    * Buat sebuah class robot_hewan yang mewarisi robot
    * melalui class robot_hewan, akses / gunakan setter & getter dari class robot
    * Output : Saya punya robot hewan yang suaranya : Rooooarrrrr!

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

    }

    $robotHewan = new robot_hewan;
    $robotHewan->set_suara("Rooooarrrrr!");
    echo "Saya punya robot hewan yang suaranya : ".$robotHewan->get_suara();
?>