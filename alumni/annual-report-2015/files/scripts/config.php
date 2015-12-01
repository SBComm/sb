<?php


function SendEmail ($strFrom,$strTo,$strSubject,$strMailBody){
    
    $headers = "From: ".$strFrom."\r\n".
               "Content-type: text/html\r\n";

    $res = mail($strTo, $strSubject, $strMailBody, $headers);

    #print "To: ".$strTo."<br>".
    #      "Headers: ".$headers."<br>".
    #      "Subject: ".$strSubject."<br>".
    #      "Body: ".$strMailBody."<br>";
    
    if ($res == TRUE) {
        return "action=sent";
    } else {
        return "action=error";
    }
}
?>

