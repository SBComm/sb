<?php
include("config.php");
$job=$_REQUEST["job"];
$yname=$_REQUEST["yname"];
$yemail=$_REQUEST["yemail"];
$fname=$_REQUEST["fname"];
$femail=$_REQUEST["femail"];
$emailSelf=$_REQUEST["emailSelf"];
$emailFriend=$_REQUEST["emailFriend"];
$message=$_REQUEST["message"];
$url=$_REQUEST["url"];
$bookmarks=$_REQUEST["bookmarks"];
$notes=$_REQUEST["notes"];
$frmEmail=$yemail;
$toEmail=$femail;

if($job=="sendtofriend")
{
	$msg=$yname." (".$yemail.") sent you this article!<br><br><br><a href='".$url."'>Click here to view article</a><br><br>URL: <a href='".$url."'>".$url."</a><br><br>Your friend's message: ".$message;
	$subject=$yname." sent you an article!";	
}
else if($job=="sendcomment")
{
	$msg=$yname." (".$yemail.") left a comment on your digital magazine page located at the following URL!<br><br><br>".$url."<br><br><a href='".$url."'> Click here to view article page</a><br><br>Your reader's comment:<br><br>".$message;
	$subject=$yname." left you a comment!";
}
else if($job=="sendbookmarks")
{
	$msg=$yname." (".$yemail.") emailed you these bookmarks for the digital magazine located at the following URL!<br><br><a href='".$url."'>".$url."</a><br>".$bookmarks."<br>".$message;
	$subject=$yname." sent you bookmarks!";
}
else if($job=="sendnotes")
{
	$msg=$yname." (".$yemail.") emailed you these notes for the digital magazine located at the following URL!<br><br><br><a href='".$url."'>".$url."</a><br>".$notes."<br>".$message;
	$subject=$yname." sent you notes!";
}

$subject = stripslashes($subject);
$msg = stripslashes($msg);
	
if($job=="sendcomment")
{	
	echo SendEmail($frmEmail,$toEmail,$subject,$msg);
}
else
{
	If($emailSelf=="true")
		echo SendEmail($frmEmail,$frmEmail,$subject,$msg);

	If($emailFriend=="true")
		echo SendEmail($frmEmail,$toEmail,$subject,$msg);
}

?>
