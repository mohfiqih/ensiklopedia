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
        $data = array(
			"judul"			=> "Data Buah",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "data_buah",
			"view"			=> "data_buah",
			"user"			=> $data_user
	   );
	 $this->load->view('template', $data, FALSE);
     
	}
}