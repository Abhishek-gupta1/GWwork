<?php
if (isset($_POST['upload'])) {

    // print_r($_FILES);
	$file_name = $_FILES['file']['name'];
	$fileTmpName= $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$filetype = $_FILES['file']['type'];
	
	if(is_uploaded_file($fileTmpName)) {
		if($filesize < 2000000) {
			if($filetype == 'image/png' || $filetype == 'image/jpg' || $filetype == 'image/jpeg') {
				if(move_uploaded_file($fileTmpName, "upload/".$file_name)) {
					echo "File Uploaded Successfully";
				} else {
					echo "File Upload Failed";
				}
			} else {
				echo "This type of file can't be uploaded";
			}
		} else {
			echo "File size greater than 2MB can't be uploaded";
		}
	} else {
		echo "Please select a right file";
	}
}

?>	