<?php

$name = '';
$email = '';
$privacy = '';
$tel = '';


$nameErr = '';
$emailErr = '';
$privacyErr = '';
$telErr = '';
$tel2Err = '';



if($_SERVER['REQUEST_METHOD']== 'POST') {

    if(empty($_POST['name'])) {
        $nameErr = 'Please fill out your name.';
    } else {
        $name = $_POST['name'];
    }
    
    if(empty($_POST['email'])) {
        $emailErr = 'Please fill out your Email.';
    } else {
        $email = $_POST['email'];
    }
    
    if(empty($_POST['privacy'])) {
        $privacyErr = 'Please click the button.';
    } else {
        $privacy = $_POST['privacy'];
    }
        

   
        
        if(empty($_POST['tel'])) {  // if empty, type in your number
    $telErr = 'Please fill out your phone number';
    } elseif(array_key_exists('tel', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $telErr = 'Don\'t forget add hyphen!';
    } else{
    $tel = $_POST['tel'];
    }
    }
        
        
    
        if(isset($_POST['name'],
               
                 $_POST['privacy'],
                 $_POST['tel'])) {
            
        $to = 'hijiri@hijirimaruo.com';
        $subject = 'Email from job company' .date('m/d/Y');
        $body = ''.$name.' has filled out your form ' .PHP_EOL.'';
        $body .= 'Email: '.$email.' '.PHP_EOL.'';    
        $body .= ''.$name.'\'s phone number: '.$tel.' '.PHP_EOL.'';            
            
        $headers = array(
        'From' => 'no-reply@hijirimaruo.com',
        'Reply-to' => ' '.$email.'');    
            
        mail($to, $subject, $body, $headers) ;
            header('Location: thx.php');
        }//end isset
    }
    


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Hijiri\'s portfolio page';
        $summary = 'Skills';
        $alt = 'Beautiful scenery';
    break;

    case 'thx.php':
        $thx = 'Thank you!';
        $title = 'Thanks page';
    break;    

    
}   //end switch


$nav['#index'] = 'Home';
$nav['#about'] = 'About';
$nav['#skill'] = 'Skill';
$nav['#contact'] = 'Contact';

function makeLinks($nav) {
    $myReturn = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
    $myReturn .= '<li><a href=" '.$key.' "class="active"> '.$value.'</a></li>';
    } else {
    $myReturn .= '<li><a href=" '.$key.' "> '.$value.'</a></li>';   
    }

}    
return $myReturn;
}






?>