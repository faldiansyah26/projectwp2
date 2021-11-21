<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang .. selamat belajar web programming";
        //this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_contoh2');
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_contoh2->jumlah($n1, $n2);

        $this->load->view('view-latihan.php', $data);
    }
}