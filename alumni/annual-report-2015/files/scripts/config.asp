<%@LANGUAGE="VBSCRIPT"  CODEPAGE=65001%>
<% 

SEND_USING_NETWORK = 2 'SMTP Over the network)
SEND_USING_LOCAL = 1   'local SMTP service pickup


'Change the value of the following variables according to your configuration
 smtphost = "localhost"            'SMTP Server name/IP
 smtpport = 25                            'Change to your SMTP server port if not 25
 username = ""		         	'SMTP UserName
 password = ""        			'SMTP Password
 useSSL = False                 'True if your SMTP server requires SSL, False otherwise
sendUsing = SEND_USING_NETWORK



' send email
Sub SendEmail(strFrom,strTo,strSubject,strMailBody)

     Dim objCDOConf,objCDOSYS
     Set objCDOSYS = Server.CreateObject("CDO.Message")
	 
	 ' if sending through different mail server
	 If smtphost <> "localhost" Then
	 
		 Set objCDOConf = Server.CreateObject ("CDO.Configuration")
		 With objCDOConf
			  .Fields("http://schemas.microsoft.com/cdo/configuration/sendusing")        = sendUsing
			  .Fields("http://schemas.microsoft.com/cdo/configuration/smtpserver")       = smtphost 
			  .Fields("http://schemas.microsoft.com/cdo/configuration/smtpserverport")   = smtpport
			  .Fields("http://schemas.microsoft.com/cdo/configuration/sendusername")     = username 
			  .Fields("http://schemas.microsoft.com/cdo/configuration/sendpassword")     = password
			  .Fields("http://schemas.microsoft.com/cdo/configuration/smtpusessl")       = useSSL
			  .Fields("http://schemas.microsoft.com/cdo/configuration/smtpauthenticate") = 1 
			.Fields.Update 
		 End With
		 
		 Set objCDOSYS.Configuration = objCDOConf
	
	End If
	
	 ' end of sending through different mail server
	 '-------------------

     With objCDOSYS     
          .From = strFrom
          .To = strTo
          .Subject = strSubject
          .HTMLBody = strMailBody
		  .HTMLBodyPart.Charset = "UTF-8"
          '.TextBody = "Test message"
          .Send
     End with                    
     Set objCDOSYS = Nothing

End Sub
%>

