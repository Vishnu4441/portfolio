<?php

if(isset($_POST['submit1'])){
		// edit this only :)
// 		$your_email = "knock@creativecode.com";
        $your_email = "vishnuvjn224@gmail.com";
		//$your_name = "Contract Manufacturing";
		
		$cname	 = $_POST["cname"];
		$cmail	 = $_POST["cmail"];
		$cphone	 = $_POST["cphone"];
		$cmsg    = $_POST["cmsg"];
		$csub    = $_POST["csub"];
		if(($cname == "")||($cmail =="")||($cphone == "")||($cmsg == "")){
		    echo "<script>alert('Kindly fill all the fields.');location.href=\"index.html\"</script>";
		}
		else if(!preg_match("/^[a-zA-Z ]*$/",$_POST['cname'])) {
		echo  "<script>alert('Kindly enter a valid name');window.history.go(-1);</script>";
    	}
    	else if(!preg_match("/^\d{10}$/",$_POST['cphone'])) {
    		echo  "<script>alert('Kindly enter a valid Phone number');window.history.go(-1);</script>";
    		header("Location: index.html");exit;
    	}
    	else{
		$headers = "From: vishnuvjn224@gmail.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$msg	 .= "New Enquiry from Contact Page<br /><br />";
		$msg	 .= "Name :  $cname <br />";
		$msg	 .= "Email :  $cmail <br />";		
		$msg 	 .= "Phone :  $cphone<br />";
		$msg 	 .= "Message :  $cmsg<br />";

		$subject  = $csub; 
		// echo "Thanks. We'll be in touch real soon.";
		$done = mail($your_email, $subject, $msg, $headers);
		if(!empty($_POST['website'])) die();
		echo "<script>alert('Thank you for contacting us. We will reach you soon.');location.href=\"index.html\"</script>";
		//header('Location: index.html'); exit;
	}
}
?>