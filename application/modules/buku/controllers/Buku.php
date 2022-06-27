<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends MY_Controller {

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
        $data = array(
			"judul"			=> "Buku",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "v_utama",
			"view"			=> "v_utama",
			// "data_buah"		=> $this->M_Universal->getMulti(NULL, "buah"),
	   );
	 $this->load->view('v_utama', $data, FALSE);
	}

	public function buah()
	{
        $data = array(
			"judul"			=> "Buku",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "v_buku_tiga",
			"view"			=> "v_buku_tiga",
			"data_buah"		=> $this->M_Universal->getMulti(NULL, "buah"),
	   );
	 $this->load->view('v_buku_tiga', $data, FALSE);
	}

	// public function pisang()
	// {
     //    $data = array(
	// 		"judul"			=> "Buku",
	// 		"keterangan"		=> "Contoh Keterangan",
	// 		"halaman"			=> "v_pisang",
	// 		"view"			=> "v_pisang",
	// 		"data_buah"		=> $this->M_Universal->getMulti(NULL, "buah"),
	//    );
	//  $this->load->view('v_pisang', $data, FALSE);
	// }

	// public function kelapa()
	// {
     //    $data = array(
	// 		"judul"			=> "Buku",
	// 		"keterangan"		=> "Contoh Keterangan",
	// 		"halaman"			=> "v_kelapa",
	// 		"view"			=> "v_kelapa",
	// 		"data_buah"		=> $this->M_Universal->getMulti(NULL, "buah"),
	//    );
	//  $this->load->view('v_kelapa', $data, FALSE);
	// }

	public function dongeng()
	{
        $data = array(
			"judul"			=> "Buku",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "v_dongeng",
			"view"			=> "v_dongeng",
			// "data_buah"		=> $this->M_Universal->getMulti(NULL, "buah"),
	   );
	 $this->load->view('v_dongeng', $data, FALSE);
	}
}