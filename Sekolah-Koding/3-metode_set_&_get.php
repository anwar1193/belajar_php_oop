<!-- 
    * Di dalam class, kita sebaiknya tidak langsung memberikan nilai pada suatu property
    * Untuk memberikan nilai pada property sebaiknya menggunakan metode set, dan ambil nilai menggunakan metode get

    SOAL :
        * Buat sebuah clas bernama : "robot"
        * Di dalam class robot, buat sebuah property bernama : "suara" (jangan diberi nilai terlebih dahulu)
        * buat metode set, untuk memberi nilai property suara tsb
        * buat metode get, untuk mengambil nilai property suara tsb
        * akses class robot tsb dari luar dengan 2x akses (robot1 & robot2)
        * isi suara robot1 dengan : "Bip Bip Bip"
        * isi suara robot2 dengan : "Bzzz Bzzz Bzzz"
        * Tampilkan output : 
            Suara Robot 1 : Bip Bip Bip
            Suara Robot 2 : Bzzz Bzzz Bzzz
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

    $robot1 = new robot;
    $robot2 = new robot;

    $robot1->set_suara('Bip Bip Bip');
    $robot2->set_suara('Bzzz Bzzz Bzzz');

    echo "Suara Robot 1 : ".$robot1->get_suara();
    echo "<br>";
    echo "Suara Robot 2 : ".$robot2->get_suara();
 ?>