<?php
include('../../scripts/connection.php');

function uploadImageFile() { // Note: GD library is required for this function

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$iWidth = 320;
        $iHeight = 260; // desired image result dimensions
        $iJpgQuality = 100;

        if ($_FILES) {

            // if no errors and size less than 250kb
        	if (! $_FILES['image_file']['error'] && $_FILES['image_file']['size'] < 5000 * 5000) {
        		if (is_uploaded_file($_FILES['image_file']['tmp_name'])) {

                    // new unique filename
        			$sTempFileName = '../../assets/img/uploads/' . md5(time().rand());

                    // move uploaded file into cache folder
        			move_uploaded_file($_FILES['image_file']['tmp_name'], $sTempFileName);

                    // change file permission to 644
        			@chmod($sTempFileName, 0644);

        			if (file_exists($sTempFileName) && filesize($sTempFileName) > 0) {
                        $aSize = getimagesize($sTempFileName); // try to obtain image info
                        if (!$aSize) {
                        	@unlink($sTempFileName);
                        	return;
                        }

                        // check for image type
                        switch($aSize[2]) {
                        	case IMAGETYPE_JPEG:
                        	$sExt = '.jpg';

                                // create a new image from file 
                        	$vImg = @imagecreatefromjpeg($sTempFileName);
                        	break;
                        	case IMAGETYPE_PNG:
                        	$sExt = '.png';

                                // create a new image from file 
                        	$vImg = @imagecreatefrompng($sTempFileName);
                        	break;
                        	default:
                        	@unlink($sTempFileName);
                        	return;
                        }

                        // create a new true color image
                        $vDstImg = @imagecreatetruecolor( $iWidth, $iHeight );

                        // copy and resize part of an image with resampling
                        imagecopyresampled($vDstImg, $vImg, 0, 0, (int)$_POST['x1'], (int)$_POST['y1'], $iWidth, $iHeight, (int)$_POST['w'], (int)$_POST['h']);

                        // define a result image filename
                        $sResultFileName = $sTempFileName . $sExt;

                        // output image to file
                        imagejpeg($vDstImg, $sResultFileName, $iJpgQuality);
                        @unlink($sTempFileName);

                        return $sResultFileName;
                    }
                }
            }
        }
    }
}

$id = $_GET['id_usuario'];

$nome		= $_POST['nome'];
$email		= $_POST['email'];
$telefone	= $_POST['telefone'];
$bio 		= $_POST['bio'];
$sImage = uploadImageFile();


$query = "update tb_usuario set
		nome = '$nome',
		email = '$email',
		telefone = '$telefone',
		imagem = '$sImage',
		bio = '$bio'
		where (id_usuario = $id)";

$result = mysql_query($query);

session_start();

$_SESSION['nome'] = $nome;

if ($result){
	print ('<script> location.href = "../../index.php?page=30" </script>');
}
else {
	print ('<script> alert ("FALHA AO EDITAR DADOS!"); </script>');
	print ('<script> location.href = "../../index.php?page=30" </script>');
}
?>