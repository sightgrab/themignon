<?php 
    if($_POST){
        $to = 'info@themignon.com';
        $email= $_POST["email"];
        $page_name= $_POST["page_name"];
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
        $message = $email.' is Subscribe to Newsletter';
        
        $email_subject = "Subscribe to Newsletter";
        
        if (@mail($to, $email_subject, $message, $headers))
        {
            echo 'success';
        }else{
            echo 'failed';
        }
        
        if($page_name == 'contact'){
            header("Location: ../contact.html");
            exit;
        }else if($page_name == 'about'){
            header("Location: ../about.html");
            exit;
        }else if($page_name == 'product'){
            header("Location: ../product.html");
            exit;
        }else{
            header("Location: ../");
            exit;
        }
    }else{
        echo "This is post method";
    }

?>