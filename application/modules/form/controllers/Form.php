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
			"user"		=> $data_user
	   );
	 $this->load->view('template', $data, FALSE);
     
	}

	public function tambah()
	{

		if(!empty($_FILES['file_foto']['name']))
	            {

						$config['upload_path'] = './assets/images/'; //path folder
						$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp3'; //type yang dapat diakses bisa anda sesuaikan
						$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

						$this->upload->initialize($config);
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
							

							// if ($tambah){
							// 	notifikasi_redirect("success", "Data berhasil ditambahkan", base_url('form/data_buah'));
							// } else {
							// 	notifikasi_redirect("error", "Gagal menambah data", uri(1));
							// };
					}else{
						echo "gagal upload";
	                }				
			}else{
			echo "foto laka";
	    }


		##UPLOAD AUDIO##
		if(!empty($_FILES['file_audio']['name']))
	        {
				$config_audio['upload_path'] = './assets/audio/'; //path folder
				$config_audio['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp3'; //type yang dapat diakses bisa anda sesuaikan
				$config_audio['encrypt_name'] = FALSE; //nama yang terupload nantinya

				$this->upload->initialize($config_audio);

	            if ($this->upload->do_upload('file_audio'))
	                {
	                    $mp3 = $this->upload->data();
	                    $audio=$mp3['file_name'];
		
	            }else{
	                    echo "gagal upload audio";
	                }
	                
	        }


		$data = array(
			"nama_buah"		=> $this->input->post("nama_buah"),
			"deskripsi"		=> $this->input->post("deskripsi"),
			"foto"			=> $gambar,
			// "bg"				=> $gambar,
			"audio"			=> $audio
		);
		
		// var_dump($data); die;
		$this->M_Universal->insert($data, "buah");
		notifikasi_redirect("success", "Update data berhasil", uri(1,"data_buah"));
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id_buah" => dekrip(uri(3))], "buah");
		
		if ($hapus){
			notifikasi_redirect("success", "Hapus data berhasil", base_url('form/data_buah'));
		} else {
			notifikasi_redirect("error", "Hapus data gagal", uri(1));
		};
	}
}