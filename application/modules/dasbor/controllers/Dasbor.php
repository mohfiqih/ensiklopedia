<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

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
	public function meta()
	{
	   $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Dashboard",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "dashboard",
			"view"			=> "dashboard",
			"jml_user"		=> $this->M_Universal->total_user("", "user"),
			"jml_buah"		=> $this->M_Universal->total_buah("", "buah"),
			"user"			=> $data_user
	   );
	   return $data;
	}

	// public function data()
	// {
	// 	$data['page'] = 'input';
	// 	$queryAllBuah = $this->M_Universal->getDataBuah();
	// 	$data['queryAllBuah'] = $queryAllBuah;
	// 	$data['jml_buah'] = $this->M_Universal->total_buah();
	// 	$this->load->view('form/data_buah', $data,FALSE);
	// }

	public function index()
	{
	// 	$data['jml_buah'] = $this->M_Universal->total_buah();
	$this->load->view('template', $this->meta());
	}
}