<?php 
$del = mysqli_query($con,"DELETE FROM tb_aslab WHERE id_aslab=$_GET[id]");
if ($del) {
		echo " <script>
		alert('Data telah dihapus !');
		window.location='?page=aslab';
		</script>";	
}

 ?>