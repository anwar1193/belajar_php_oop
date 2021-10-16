<?php  

    class buku{
        public $judul, $penerbit, $pengarang, $tahun_terbit;

        public function __construct($judul, $penerbit, $pengarang, $tahun_terbit)
        {
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->pengarang = $pengarang;
            $this->tahun_terbit = $tahun_terbit;
        }

        public function ambil_data(){
            return "$this->judul, $this->penerbit, $this->pengarang, $this->tahun_terbit";
        }

    }


    $buku1 = new buku("Naruto", "Masashi Kisimoto", "Shonen Jump", "2020");
    echo $buku1->ambil_data();

?>


<!-- Ulang Lagi yak -->