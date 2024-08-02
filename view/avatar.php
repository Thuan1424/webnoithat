
<?php 	include "global.php";
		if(isset($_SESSION['user'])){
			extract($_SESSION['user']);
			$avatar=$img_spkk.$avatar;
	?>
	<style>
		.anhtron {
        width: 40px;
        height: 40px;
        overflow: hidden;
        margin-right: 5px;
		margin-top: 10px;
		border-radius: 50%;
		content: url('<?=$avatar?>');
    }
</style>
   <?php
	}else{
?>
    <style>
		header ul.top_tools>li a.access_link:before {
            content: '\0043';
        }
</style>
<?php }?>