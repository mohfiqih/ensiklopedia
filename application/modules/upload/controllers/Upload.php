<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {
	
    public function __construct()
    {
        parent::__construct();
		
		$this->cek_login();
    }
	
	public function index()
	{
		$data = array(
			"judul"			=> "Profil",
			"keterangan"	=> "Sunting Data Diri",
			"halaman"		=> "profil",
			"breadcrumb"	=> "User|Profil",
			"view"			=> "v_tampilkan",
			"avatar"		=> $this->M_Universal->getOne(["user_id" => $this->user_id], "user"),
			"data"			=> $this->M_Universal->getMulti(NULL, "upload"),
		);
		
		$this->load->view('template', $data);
	}


////////////////////////////////CREATE/////////////////////////////////////////////
	public function tambah(Type $var = null)
	{
		$data = array(
			"judul"			=> "Tambah",
			"keterangan"	=> "Sunting Data Diri",
			"halaman"		=> "password",
			"view"			=> "v_upload",
			"avatar"		=> $this->M_Universal->getOne(["user_id" => $this->user_id], "user"),
		);
		
		$this->load->view('template', $data);
	}

	public function upload_file()
	{
		##UPLOAD FOTO##					
		if(!empty($_FILES['file_foto']['name']))
	        {
						
				$config['upload_path'] = './assets/images/'; //path folder
				$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp3'; //type yang dapat diakses bisa anda sesuaikan
				$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

				$this->upload->initialize($config);

	            if ($this->upload->do_upload('file_foto'))
	                {
						$gbr = $this->upload->data();
	                    $gambar=$gbr['file_name'];
	            }else{
	                    echo "gagal upload gambar";
	                }
	                
	        }


			##UPLOAD AUDIO##
			if(!empty($_FILES['file_audio']['name']))
	        {
				$config_audio['upload_path'] = './assets/audio/'; //path folder
				$config_audio['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp3'; //type yang dapat diakses bisa anda sesuaikan
				$config_audio['encrypt_name'] = TRUE; //nama yang terupload nantinya

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
				"foto"			=> $gambar,
				"audio"			=> $audio
			);

			$this->M_Universal->insert($data, "upload");
			notifikasi_redirect("success", "Update data berhasil", uri(1));
	} 
//////////////////////////////END CREATE///////////////////////////////////////////

////////////////////////////////UPDATE///////////////////////////////////////////
	public function edit() 
	{
		$data = array(
			"judul"			=> "Edit",
			"halaman"		=> "edit_list",
			"view"			=> "v_edit",
			"data_edit"		=> $this->M_Universal->getOne(["id" => dekrip(uri(3))], "upload"),
			"avatar"		=> $this->M_Universal->getOne(["user_id" => $this->user_id], "user"),
				// "data_user"	=> $this->M_Universal->getMulti(["id" => (uri(3))], "user"),
		);
		$this->load->view('template', $data);
	}

	public function edit_file()
	{
		$id	= dekrip($this->input->post("id"));
							
		##EDIT FOTO##
		if(!empty($_FILES['file_foto']['name']))
	        {
				$config['upload_path'] = './assets/images/'; //path folder
				$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp3'; //type yang dapat diakses bisa anda sesuaikan
				$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

				$this->upload->initialize($config);

	        	if ($this->upload->do_upload('file_foto'))
	            {
	                $gbr = $this->upload->data();
	                $gambar=$gbr['file_name'];	
	            }else{
	                echo "gagal edit gambar";
	            }
	                
	    }else{
			$gambar = $this->input->post("edit_file_foto");
		}

		##EDIT AUDIO##
		if(!empty($_FILES['file_audio']['name']))
	        {	
				$config_audio['upload_path'] = './assets/audio/'; //path folder
				$config_audio['allowed_types'] = 'gif|jpg|png|jpeg|bmp|mp3'; //type yang dapat diakses bisa anda sesuaikan
				$config_audio['encrypt_name'] = TRUE; //nama yang terupload nantinya

				$this->upload->initialize($config_audio);

	            if ($this->upload->do_upload('file_audio'))
	                {
	                	$mp3 = $this->upload->data();
	                    $audio=$mp3['file_name'];	
	            }else{
	                 echo "gagal edit audio";
	            }
	    }else{
			$audio = $this->input->post("edit_file_audio");
		}

		$data = array(
			"foto"			=> $gambar,
			"audio"			=> $audio
		);
		
		$this->M_Universal->update($data, ["id" => $id], "upload");
		notifikasi_redirect("success", "Update data berhasil", uri(1));
	} 
////////////////////////////////END UPDATE///////////////////////////////////////////

////////////////////////////////DELETE///////////////////////////////////////////
	public function hapus()
	{
		$data=$this->M_Universal->getOne(["id" => dekrip(uri(3))],"upload");
		$gambar=base_url().'assets/images/'.$data->foto;
		$audio=base_url().'assets/audio/'.$data->audio;
		delete_files($gambar);
		delete_files($audio);
		
		$hapus = $this->M_Universal->delete(["id" => dekrip(uri(3))], "upload");

		if ($hapus){
			notifikasi_redirect("success", "Hapus data berhasil", uri(1));
		} else {
			notifikasi_redirect("error", "Hapus data gagal", uri(1));
		};
	}
////////////////////////////////END DELETE////////////////////////////////////////

}
	
