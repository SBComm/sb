<%@ Page Language="VB" ClientTarget="downlevel" %>
<%@ Import Namespace="System.Net.Mail" %>
<script language="VB" runat="server">
'send email
Sub SendEmail(strFromName, strFromAdd, strToName, strToAdd, strSubject, strMailBody)

	Dim SEND_USING_NETWORK = 2
	Dim SEND_USING_LOCAL = 1
	Dim smtphost = "localhost"           
	Dim smtpport = 25                    
	Dim username = ""	         		
	Dim password = ""       				
	Dim useSSL = False              		
	Dim sendUsing = SEND_USING_NETWORK
	
	Dim msgMail  As New MailMessage

	msgMail.To.Add(New MailAddress(strToAdd, strToName))
	msgMail.From = New MailAddress(strFromAdd, strFromName)
	msgMail.Subject = strSubject
	msgMail.IsBodyHtml = True
	msgMail.Body = strMailBody
	msgMail.BodyEncoding = Encoding.UTF8
	
	Dim SmtpMail = New SmtpClient("localhost")
	
	'if sending through different mail server
	If smtphost <> "localhost" Then
		Dim basicAuthenticationInfo As New System.Net.NetworkCredential(username, password)
		SmtpMail.Host = smtphost 
		SmtpMail.Port = smtpport
		SmtpMail.EnableSsl = useSSL
		SmtpMail.UseDefaultCredentials = False
		SmtpMail.Credentials = basicAuthenticationInfo
	End If			
	
	SmtpMail.Send(msgMail)
End Sub
</script>
