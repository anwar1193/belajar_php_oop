<!--  
    * Misal kita mempunyai 2 class (parent dan turunan)
    * Di turunan, kita mempunyai function/method yang sama dengan parent tapi di modif (overriding)
    * Di turunan, jika kita ingin memilih method mana yang ingin digunakan (antara method parent atau method turunan/overriding), kita bisa menggunakan self dan parent
    * self jika ingin menggunakan method nya sendiri (hasil overriding) & parent jika ingin menggunakan method parent nya
    * caranya dengan membuat method baru (dibawah method overriding)

    SOAL :
    * Buat sebuah class dengan 1 property, setter & getter
    * Buat sebuah class turunan dengan 1 getter yang sama dengan parent (overriding) & 1 method untuk men-testing self & parent

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

        public function testing(){
            // return self::get_suara(); // jika ingin memanggil get_suara di method ini
            return parent::get_suara(); // jika ingin memanggil get_suara dari parent nya
        }
    }

    $robotHewan = new robot_hewan;
    $robotHewan->set_suara("Rooooarrrrr!");
    echo "Saya punya robot hewan yang suaranya : ".$robotHewan->testing();
?>