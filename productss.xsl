<?xml version="1.0" encoding="UTF-8"?><xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Flight Management System</title>
            </head>
            <style>
                td{
                    font-weight:bolder;
                    background-color: violet;
                    text-align: center;
                }
            </style>
            <body>
                <h1 align= "center" style="color:black;">Flight Management System</h1>
                <table style="width:50%; border:3px solid white; color: black; margin-left: auto; margin-right: auto; padding: 5px;">
                    <caption style="text-align:left">Book your tickets!!</caption>
                    <tr bgcolor= "black" style="width:50%; border:3px solid black; color: white; margin-left: auto; margin-right: auto; padding: 5px;">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Gender</th>
                    </tr>
                    <xsl:for-each select="Product/Flight">
                        <tr>
                            <td><xsl:value-of select="Name"/></td>
                            <td><xsl:value-of select="Email"/></td>
                            <td><xsl:value-of select="Address"/></td>
                            <td><xsl:value-of select="Gender"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template></xsl:stylesheet>