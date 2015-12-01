<cfset fname=#form.fname#>
<cfset femail=#form.femail#>
<cfset yname=#form.yname#>
<cfset yemail=#form.yemail#>
<cfset message=#form.message#>
<cfset bookmarks=#form.bookmarks#>
<cfset notes=#form.notes#>
<cfset url_link=#form.url#>
<cfset job=#form.job#>
<cfset emailSelf=#form.emailSelf#>
<cfset emailFriend=#form.emailFriend#>
<cfif #job# EQ "sendtofriend">
<cfset msg=yname&" ("&yemail&") sent you this article!<br><br><br><a href='"&url_link&"'>Click here to view article</a><br><br>URL: <a href='"&url_link&"'>"&url_link&"</a><br><br>Your friend's message: "&message>
<cfset subject=yname&" sent you an article!">
<cfelseif #job# EQ "sendcomment">
<cfset msg=yname&" ("&yemail&") left a comment on your digital magazine page located at the following URL!<br><br><a href='"&url_link&"'> Click here to view article page</a><br><br>Your reader's comment:<br><br>"&message>
<cfset subject=yname&" left you a comment!">
<cfelseif #job# EQ "sendbookmarks">
<cfset msg=yname&" ("&yemail&") emailed you these bookmarks for the digital magazine located at the following URL!<br><br><a href='"&url_link&"'>"&url_link&"</a><br>"&bookmarks&"<br>"&message>
<cfset subject=yname&" sent you bookmarks!">
<cfelseif #job# EQ "sendnotes">
<cfset msg=yname&" ("&yemail&") emailed you these notes for the digital magazine located at the following URL!<br><br><br><a href='"&url_link&"'>"&url_link&"</a><br>"&notes&"<br>"&message>
<cfset subject=yname&" sent you notes!">
</cfif>
<cftry>
<cfif #job# EQ "sendcomment">
<cfmail to=#femail# from=#yemail# subject=#subject#	type="html">#msg#</cfmail>
<cfelse>
<cfif #emailSelf# EQ "true">
<cfmail to=#yemail# from=#yemail# subject=#subject#	type="html">#msg#</cfmail>	
</cfif>
<cfif #emailFriend# EQ "true">
<cfmail to=#femail# from=#yemail# subject=#subject#	type="html">#msg#</cfmail>	
</cfif>
</cfif>
<cfoutput>action=sent</cfoutput>
<cfcatch type="any">
<cfoutput>action=error</cfoutput>
</cfcatch>
</cftry>