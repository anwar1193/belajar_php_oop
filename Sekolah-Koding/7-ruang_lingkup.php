<!-- 
    * Ada 3 ruang lingkup pada OOP, yaitu : public, protected, private
        > public (default)  : bisa diakses bebas / dari mana saja
        > protected         : tidak bisa diakses secara langsung, harus melalui metode (misal menggunakan getter)
        > private           : hanya bisa di akses di class nya sendiri, tidak bisa di buat ulang di class turunannya (tidak bisa di overriding)

    * SOAL :
        * Siapkan 1 class Parent yang isinya :
            1 property (ruang lingkup diubah2 : public, protected, private)
            1 construct yang langsung mengisi nilai property nya
            1 method get / getter

        * Siapkan 1 class Turunan yang isinya :
            1 method get / getter yg sama dengan parent nya & dimodif sedikit (overriding)

        * Buktikan perbedaan : public, protected, private
 -->
<?php  
    class robot{
        protected $suara; // ubah2 : public, protected, private

        public function __construct(){
            $this->suara = "Beep Beep Beep";
        }

        public function get_suara(){
            return $this->suara;
        }
    }

    class robot2 extends robot{
        public function get_suara(){ // overriding (hanya untuk public & protected, kalo private error)
            return $this->suara.' Hasil Overriding!!!';
        }
    }

    $robot = new robot;
    // echo $robot->suara; // ini bisa jika suara = public
    // echo $robot->get_suara(); // ini jika suara = public , protected (bisa juga di panggil dari class turunan/pewarisnya)

    $robot2 = new robot2;
    echo $robot2->get_suara(); // akan error jika private, karena suara hanya bisa diakses di class nya sendiri

?>