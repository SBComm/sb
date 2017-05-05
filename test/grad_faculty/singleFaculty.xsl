<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
     xmlns:met="http://www.digitalmeasures.com/schema/data" 
     xmlns:dmd="http://www.digitalmeasures.com/schema/data-metadata" 
     >
<xsl:output method ="html"/>

<xsl:template match="met:Data/Record/">
	<xsl:apply-templates select ="PCI"/>	 
</xsl:template>

<xsl:template match="met:PCI">
	<p>

		<xsl:value-of select="met:PREFIX"/>
 		<xsl:value-of select="met:FNAME"/>
 		<xsl:value-of select="met:MNAME"/>
 		<xsl:value-of select="met:LNAME"/>
 	</p>
 	<p>
	 	<xsl:value-of select="met:EMAIL"/>
 	</p>
 	<p>
	 	<xsl:value-of select="met:ROOMNUM"/>
	</p>
</xsl:template>
</xsl:stylesheet>