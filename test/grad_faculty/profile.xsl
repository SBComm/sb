<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
     xmlns:met="http://www.digitalmeasures.com/schema/data" 
     xmlns:dmd="http://www.digitalmeasures.com/schema/data-metadata" 
     >
<xsl:output method ="html"/>

<xsl:template match="met:Data/Record">
	<xsl:apply-templates select ="PROFILE"/>
	<xsl:apply-templates select ="PCI"/>
	<xsl:apply-templates select ="INTELLCONT"/>
	<xsl:apply-templates select ="RESPROG"/>
	<xsl:apply-templates select ="INTELLPROP"/>
	<xsl:apply-templates select ="PRESENT"/>
	<xsl:apply-templates select ="AWARDHONOR"/>

</xsl:template>



<xsl:template match="PROFILE">
 <p><xsl:value-of select="BIO"/> </p>
</xsl:template>


<xsl:template match="met:PCI">
	<ul style="list-style-type:circle">
	<li><xsl:value-of select="met:PREFIX"/></li>
 	<li><xsl:value-of select="met:FNAME"/></li>
 	<li><xsl:value-of select="met:MNAME"/></li>
 	<li><xsl:value-of select="met:LNAME"/></li>
 	<li><xsl:value-of select="met:EMAIL"/></li>
 	<li><xsl:value-of select="met:ROOMNUM"/></li>
 	<li><xsl:value-of select="met:DTM_DOB"/></li>
 	<li><xsl:value-of select="met:DTD_DOB"/></li>
 	<li><xsl:value-of select="met:DTY_DOB"/></li>
 	<!-- <li><xsl:value-of select="DOB_START"/></li>
 	<li><xsl:value-of select="DOB_END"/></li> -->
 </ul>
</xsl:template>

<xsl:template match="met:INTELLCONT">
 	<li>   
 		<xsl:if test="met:USER_REFERENCE_CREATOR = 'Yes'">
 			<xsl:value-of select="met:TITLE"/>
		    <xsl:for-each select="met:INTELLCONT_AUTH">
				<xsl:value-of select = "met:FNAME"/>
				<xsl:value-of select = "met:LNAME"/>
				<xsl:value-of select = "met:ROLE"/>
    		</xsl:for-each>
   		 </xsl:if>
</li>
</xsl:template>

<xsl:template match="met:RESPROG">
	<li>
	<xsl:if test="met:USER_REFERENCE_CREATOR = 'Yes'">
	 	<xsl:value-of select="met:TITLE"/>
   		<xsl:for-each select="met:RESPROG_COLL">
			<xsl:value-of select = "met:FNAME"/>
			<xsl:value-of select = "met:LNAME"/>
			<xsl:value-of select = "met:ROLE"/>
    	</xsl:for-each>
    </xsl:if>
</li>
</xsl:template>


<xsl:template match="met:INTELLPROP">
	<xsl:if test="met:USER_REFERENCE_CREATOR = 'Yes'">
	 	<xsl:value-of select="met:TITLE"/>
 		<xsl:value-of select="met:FORMAT"/>
 		<xsl:value-of select="met:ID_NUMBER"/>
 	</xsl:if>
</xsl:template>



<xsl:template match="met:PRESENT">
	<li>
	<xsl:if test="met:USER_REFERENCE_CREATOR = 'Yes'">

 		<xsl:value-of select="met:TITLE"/>
 		<xsl:value-of select="met:NAME"/>
		<!-- <xsl:value-of select = "ABSTRACT"/>-->

	 	<xsl:for-each select="met:PRESENT_AUTH">
			<xsl:value-of select = "met:FNAME"/>
			<xsl:value-of select = "met:LNAME"/>
			<xsl:value-of select = "met:ROLE"/>
 		</xsl:for-each>
 		<xsl:value-of select="met:DTM_DATE"/>
 		<xsl:value-of select="met:DTD_DATE"/>
 		<xsl:value-of select="met:DTY_DATE"/>
 	</xsl:if>
 </li>
</xsl:template>


<xsl:template match="met:AWARDHONOR">
	<li>
 	<xsl:value-of select="met:NAME"/>
 	<xsl:value-of select="met:ORG"/>
 	<xsl:value-of select="met:DTM_DATE"/>
 	<xsl:value-of select="met:DTD_DATE"/>
 	<xsl:value-of select="met:DTY_DATE"/>
 </li>
</xsl:template>


</xsl:stylesheet>