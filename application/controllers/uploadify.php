<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploadify extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library("common_functions");
	}

	public function index()
	{
		if (!empty($_FILES)) {
			if(($_FILES["id_scan"]["size"] < 512000)){
				$tempFile = $_FILES['id_scan']['tmp_name'];
				$tempname = $_POST['cusm'] . "_" . $_POST['idtype'] . "_" . date("Ymd") .".jpg";
				
				$fileTypes = array('jpg','jpeg','png');
				$fileParts = pathinfo($_FILES['id_scan']['name']);
				
				if (in_array(strtolower($fileParts['extension']),$fileTypes)) {
					$this->common_functions->sftp($tempname, $tempFile, "tmp");
				} else {
					$this->common_functions->write_log("Invalid File Size\n", "UPLOAD");
				}
			}
		} else {
			$this->common_functions->write_log("Invalid Post Data\n", "UPLOAD");
		}
	}

	public function signature()
	{
		if (!empty($_FILES)) {
			if(($_FILES["signature"]["size"] < 512000)){

				$tempFile = $_FILES['signature']['tmp_name'];
				$tempname = $_POST['cusm'] . "_SIGNATURE_" . date("Ymd") .".jpg";
				
				$fileTypes = array('jpg','jpeg','png');
				$fileParts = pathinfo($_FILES['signature']['name']);
				
				if (in_array(strtolower($fileParts['extension']),$fileTypes)) {
					$this->common_functions->sftp($tempname, $tempFile, "tmp");
				} else {
					$this->common_functions->write_log("Invalid File Size\n", "UPLOAD");
				}
			}
		} else {
			$this->common_functions->write_log("Invalid Post Data\n", "UPLOAD");
		}
	}


	public function id_picture($filename = FALSE)
	{
		if (!empty($_FILES)) {

			if(($_FILES["webcam"]["size"] < 512000)){

				$tempFile = $_FILES['webcam']['tmp_name'];
				$tempname = $filename . ".jpg";

				$fileTypes = array('jpg','jpeg','png');
				$fileParts = pathinfo($_FILES['webcam']['name']);
				
				if (in_array(strtolower($fileParts['extension']),$fileTypes)) {
					// $result = $this->common_functions->sftp($tempname, $tempFile, "tmp");
					$result = $this->sftp($tempname, $tempFile, PICTURES_PATH.$filename);
					if($result)
						echo "Success";
					else
						echo "Failed";
				} else {
					// $this->common_functions->write_log("Invalid File Type\n", "UPLOAD");
					echo "Failed";
				}
			} else {
				// $this->common_functions->write_log("Invalid File Size\n", "UPLOAD");
				echo "Failed";
			}
		} else {
			// $this->common_functions->write_log("Invalid Post Data\n", "UPLOAD");
			echo "Failed";
		}
	}

	public function sftp($tempname, $tempFile, $dir)
    {
    	if (!file_exists($dir)) {

    		$dirMode = 0777;
			mkdir($dir, $dirMode, true);
    	}

    	file_put_contents($dir.'/'.$tempname, file_get_contents($tempFile));
    }

}
