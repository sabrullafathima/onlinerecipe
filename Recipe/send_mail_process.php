<?php  
    if(isset($_POST['sendmail'])) {
    	if(mail ($_POST['email'], $_POST['subject'], $_POST['message'])){
    		echo "Mail send";
    	}else{
    		echo "Failed";
    	}  
    }
?>