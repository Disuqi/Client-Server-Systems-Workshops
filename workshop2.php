<?php
$password=getSomething('password');
$mypassword= password_hash('hello', PASSWORD_DEFAULT);
if(password_verify($password, $mypassword)){
    echo "it worked";
}else{
    echo "nothing";
}
function getSomething($name)
{
    $return=$_POST[$name];
    if($name == "birthday"){
        $toBig=strtotime("01-01-2010");
        $toSamll=strtotime("01-01-1930");
        $date=strtotime($return);
        if($date > $toBig || $date < $toSamll){
            return "it worked ";
        }
    }
    return htmlentities($return);
}
