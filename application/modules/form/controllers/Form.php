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
			"judul"		=> "Data Buah",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "data_buah",
			"view"		=> "data_buah",
			"data_buah"	=> $this->M_Universal->getMulti(NULL,"buah"),
			// "data_manajemen"		=> $this->M_manajemen->get_manajemen(NULL, "manajemen"),
			"user"		=> $data_user
	   );
	 $this->load->view('template', $data, FALSE);
     
	}

	public function tambah()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		
		if(!empty($_FILES['file_foto']['name']))
	            {
	                if ($this->upload->do_upload('file_foto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];

					//     else if(!empty($_FILES['file_audio']['name']))
	           		// 	 {
					// 		else if ($this->upload->do_upload('file_audio'))
					// 		{
					// 			$aud = $this->upload->data();
					// 			//Compress Image
					// 			$config_audio['image_library']='gd2';
					// 			$config_audio['source_image']='./assets/audio/'.$aud['file_name'];
					// 			$config_audio['create_thumb']= FALSE;
					// 			$config_audio['maintain_ratio']= FALSE;
					// 			$config_audion['quality']= '60%';
					// 			$config_audio['width']= 300;
					// 			$config_audio['height']= 300;
					// 			$config_audio['new_image']= './assets/audio/'.$aud['file_name'];
					// 			$this->load->library('image_lib', $config);
					// 			$this->image_lib->resize();

					// 			$audio=$aud['file_name'];


							$data = array(
								//"user_id"			=> date("ymdHis"),
								"id_buah"			=> dekrip($this->input->post("id_buah")),
								"nama_buah"		=> $this->input->post("nama_buah"),
								"deskripsi"		=> $this->input->post("deskripsi"),
								"foto"			=> $gambar,
								// "audio"			=> $audio
							);
										
							$tambah = $this->M_Universal->insert($data, "buah");

							if ($tambah){
								notifikasi_redirect("success", "Data berhasil ditambahkan", uri(1));
							} else {
								notifikasi_redirect("error", "Gagal menambah data", uri(1));
							};
  
	                }else{
						echo "gagal upload";
	                }
	                
	    }else{
			echo "foto laka";
	    }
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id_buah" => dekrip(uri(3))], "buah");
		
		if ($hapus){
			notifikasi_redirect("success", "Hapus data berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Hapus data gagal", uri(1));
		};
	}
}