<?php 
	if (isset($_POST['submit'])) {		
		$file = $_FILES['file'];

		$filename = $_FILES['file']['name'];
		$filetmp = $_FILES['file']['tmp_name'];
		$filesize = $_FILES['file']['size'];
		$fileerror = $_FILES['file']['error'];
		$filetype = $_FILES['file']['type'];

		$fileext = explode('.',$filename);
		$fileacctualext = strtolower(end($fileext));

		$allowed = array('jpg','jpeg','png', 'pdf');

		if (in_array($fileacctualext, $allowed)) {
			if ($fileerror ===0) {
				if ($filesize < 500000) {
					$filenamenew = uniqid('',true).".".$fileacctualext;
					$filedestination = 'uploads/'.$filenamenew ;
					move_uploaded_file($filetmp, $filedestination);
					header("Location: index.php?uploadsuccess");

				} else {
					echo "Your file is too big";
				}
			} else {
				echo "Error While uploading File";
			}
		} else {
			echo "You cannot upload files of this type";
		}
	}

?>