<?php  


echo "<html>";
echo "<body>";


if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])){ 
  	  echo "<b>Good parameters provided.</b>";
  $headers = 'From: sasha\r\n'.
            'Reply-to: enquiries@example.com\r\n'. 
            'X-Mailer: PHP/'. phpversion();                                                                            
                                  
								  
                                                                                          
  $theme = 'message';
                                                                                         
  $letter = 'message:\r\n';                                                                
  $letter .= 'name:'.$_POST['name'].'\r\n';                                                
  $letter .= 'email:'.$_POST['email'].'\r\n';                                             
  $letter .= 'phone:'.$_POST['phone'].'\r\n';                                              
  $letter .= 'message:'.$_POST['message'].'\r\n';


 // echo $theme 
 // if (mail('enquiries@example.com', $theme, $letter)){ 
 //   header('Location:/thankyou.php');    
 // } else {  
 //   header('Location:/'); 
 // }
 // } else{ 
 //   header('Location:/'); 
  }	else {
	  echo "<b>Missing data from the form.</b>";
  }
  
  echo "</body>";
  echo "</html>";