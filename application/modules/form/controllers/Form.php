<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		// $this->load->model('M_dasbor');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function index()
	{
	   $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Form Input",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "v_form",
			"view"			=> "v_form",
			"user"			=> $data_user
	   );
	 $this->load->view('template', $data, FALSE);
     
	}

	public function data_buah()
	{
	   $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
	//    $data_buah	= $this->M_Universal->getOne(["id_buah" => $this->id_buah], "buah");
        $data = array(
			"judul"			=> "Data Buah",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "data_buah",
			"view"			=> "data_buah",
			"data_buah"		=> $this->M_Universal->getMulti("buah"),
			"user"			=> $data_user
	   );
	 $this->load->view('template', $data, FALSE);
     
	}

	public function tambah()
	{
		$data = array(
			"id_buah"			=> $this->input->post('id_buah'),
			"nama_buah"			=> $this->input->post("user_nama"),
			"deskripsi_buah"	=> $this->input->post('deskripsi_buah'),
		);
		
		$tambah = $this->M_Universal->insert($data, "buah");
		
		if ($tambah){
			notifikasi_redirect("success", "Tambah data berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Tambah data gagal", uri(1));
		}

		redirect(base_url('form/data'));
	}

	// public function input()
    // {
    //     $this->load->view('v_form', FALSE);
    // }

	// public function tambah()
	// {
    //     $id_buah 		= $this->input->post('id_buah');
    //     $nama_buah 		= $this->input->post('nama_buah');
    //     $deskripsi_buah = $this->input->post('deskripsi_buah');
	// 	$gambar 		= $_FILES['gambar'];
    //     if ($gambar = '') {
    //     } else {
    //         $config['upload_path'] = './assets/gambar';
    //         $config['allowed_types'] = 'jpg|png';

    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('gambar')) {
    //             echo "Upload Gagal";
    //             die();
    //         } else {
    //             $gambar = $this->upload->data('file_name');
    //         }
    //     }
		
    //     $ArrInsert = array(
    //         'id_buah' 			=> $id_buah,
    //         'nama_buah' 		=> $nama_buah,
    //         'deskripsi_buah' 	=> $deskripsi_buah,
    //         'gambar' 			=> $gambar,
    //     );
    //     $this->M_Universal->insertDataBuah($ArrInsert);
    //     redirect(base_url('form/data'));
	// }

	// public function data()
	// {
	// 	$data['page'] = 'input';
	// 	$queryAllBuah = $this->M_Universal->getDataBuah();
	// 	$data['queryAllBuah'] = $queryAllBuah;
	// 	$data['jml_buah'] = $this->M_Universal->total_buah();
	// 	$this->load->view('data_buah', $data, FALSE);
	// }

	
	// public function hapus($id_buah)
	// {
	// 	$this->M_Universal->deleteDataBuah($id_buah);
    //     redirect(base_url('form/data'));
	// }
}