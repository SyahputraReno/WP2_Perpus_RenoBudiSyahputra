<?php
class Matakuliah extends CI_Controller
{

    public function index()

    {

<<<<<<< HEAD
    $this->load->view('view-form-matakuliah');

    }

=======
        $this->load->view('view-form-matakuliah');
    }
>>>>>>> c9de910 (Pertemuan 9 dan 10)
    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

<<<<<<< HEAD
=======
        

>>>>>>> c9de910 (Pertemuan 9 dan 10)
        $this->load->view('view-data-matakuliah', $data);
    }
}