<!-- 
    Konstruktor adalah fungsi yang otomatis terpanggil/dijalankan saat membuat object nya

    SOAL :
    * Buat sebuah class dengan nama : "robot"
    * Di dalam class "robot", 
        > buat sebuah property dengan nama : "suara" yang belum memiliki nilai
        > Buat sebuah konstruktor yang berfungsi seperti setter untuk property suara
        > Buat setter untuk property suara
        > Buat getter untuk property suara
    * Akses class robot dari luar + manfaatkan kontruktor untuk men-set nilai property suara -> jalankan program
        > Output : Suara Robotku ting ting ting
    * ganti isi/nilai property suara dengan memanfaatkan setter
        > Output : Suara Robotku tong tong tong
 -->

<?php  
    class robot{
        public $suara;

        public function __construct($suara_params){
            $this->suara = $suara_params;
        }

        public function set_suara($params_suara){
            $this->suara  = $params_suara;
        }

        public function get_suara(){
            return $this->suara;
        }
    }

    $my_robot = new robot("ting ting ting"); // memasukkan suara robot dengan memanfaatkan konstruktor

    $my_robot->set_suara("tong tong tong"); // memasukkan suara robot dengan memanfaatkan method set

    echo "Suara Robotku ".$my_robot->get_suara(); // penggil suara robot dengan method get

?>