<!-- 
    * static membuat cara pemanggilan sebuah property / method di dalam class menjadi berbeda

    SOAL :
    * Buat sebuah class yang isinya 1 property static & 1 method static
    * tampilkan/cetak value dari property & method static tersebut
 -->

 <?php  
    class orang{
        public static $jumlah_mata = 2;

        public static function aktifitas(){
            return "Manusia makan, minum, bernafas!";
        }
    }

    echo "Jumlah Mata Manusia : " . orang::$jumlah_mata;
    echo "<br>";
    echo orang::aktifitas();
 ?>