<?php  

abstract class Produk{ //ubah jadi abstract
    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;

    // Constructor
    public function __construct($judul, $penulis, $penerbit, $harga){

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function setJudul($judul){ //contoh setter
        $this->judul = $judul;
    }

    public function getJudul(){ // contoh getter
        return $this->judul;
    }

    public function setPenulis($penulis){ 
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->$penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->$harga = $harga;
    } 

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function ambil_property(){
        //$this supaya variable/property nya bisa di panggil
        return "$this->penerbit, $this->penulis"; 
    }
    
    abstract public function getInfo();

}

?>