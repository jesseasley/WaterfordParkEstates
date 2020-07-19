function shadowFrame(filename, width, height)
{
	var ipos = filename.lastIndexOf("/");
	if (ipos == -1)
		ipos = 0;
	else
		ipos += 1;
	var sHTML;
	sHTML = "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"" + width + "\" height=100%>";
//<!--top row-->
	sHTML += "   <tr height=20>";
	sHTML += "		<td width=20><img name=\"test_r2_c2\" src=\"images/borders/glowFrame/top_left.png\" width=\"20\" height=\"47\" border=\"0\"></td>";
	sHTML += "		<td background=\"images/borders/glowFrame/top.png\">";
	sHTML += "		<table border=0 cellpadding=0 cellspacing=0 width=100%>";
	sHTML += "			<tr height=12><td></td></tr><tr>";
//<!--file name-->
	sHTML += "				<td width=100% align=center><b><font face=\"Arial\" color=\"#FFFFFF\">" + filename.substr(ipos) + "</font></b></td>";
	sHTML += "				<td align=right valign=center>";
	sHTML += "					<a href=\"javascript:hideimg();\" title=\"Click to close image window\"><img src=\"images/borders/glowFrame/x.png\" border=0></a></td>";
	sHTML += "				</td>";
	sHTML += "			</tr>";
	sHTML += "		</table>";
	sHTML += "		<td width=20><img name=\"test_r2_c7\" src=\"images/borders/glowFrame/top_right.png\" width=\"20\" height=\"47\" border=\"0\"></td>";
	sHTML += "	</tr>";
//<!--middle row-->
	sHTML += "	<tr height=100%>";
//<!--left border-->
	sHTML += "		<td width=20 background=\"images/borders/glowFrame/left.png\"></td>";
//<!--body-->
	sHTML += "		<td width=100%><img src=\"" + filename + "\" width=" + width + " height=" + height + "></td> ";
//<!--right border-->
	sHTML += "		<td background=\"images/borders/glowFrame/right.png\" width=\"20\"></td>";
	sHTML += "	</tr>";
//<!--bottom row-->
	sHTML += "	<tr height=20>";
	sHTML += "		<td width=20><img name=\"test_r5_c2\" src=\"images/borders/glowFrame/bottom_left.png\" width=\"20\" height=\"20\" border=\"0\"></td>";
	sHTML += "		<td height=20 background=\"images/borders/glowFrame/bottom.png\"></td>";
	sHTML += "		<td width=20><img name=\"test_r5_c7\" src=\"images/borders/glowFrame/bottom_right.png\" width=\"20\" height=\"20\" border=\"0\"></td>";
	sHTML += "	</tr>";
	sHTML += "</table>";
	return sHTML;
}
function showimg(Filename, iImgWidth, iImgHeight)
{
	var s;
	var iWinH = document.body.offsetHeight - 147;
	var iWinW = document.body.offsetWidth - 147;
	s = "iWinH=" + iWinH + ", iWinW=" + iWinW;
	
	var iWidth = iWinW / iImgWidth;
	var iHeight = iWinH / iImgHeight;
	s += ", iImgWidth=" + iImgWidth + ", iImgHeight=" + iImgHeight;
	s += ", iWidth=" + iWidth + ", iHeight=" + iHeight;
	
	if (iWidth < iHeight)	iHeight = iWidth;
	if (iHeight < iWidth)	iWidth = iHeight;
	if (iHeight > 1)
	{
		iHeight = 1;
		iWidth = 1;
	}
	s += ", iWidth=" + iWidth + ", iHeight=" + iHeight;
	
	iWidth = iImgWidth * iWidth;
	iHeight = iImgHeight * iHeight;
	s += ", iWidth=" + iWidth + ", iHeight=" + iHeight;
	
//	alert (s);
	document.all.vpic.width = iWidth;
	document.all.vpic.height = iHeight;
//alert(document.body.offsetHeight );
	document.all.vpic.style.left = document.body.scrollLeft + (iWinW - iWidth) / 2 + "px";
	document.all.vpic.style.top = (document.body.scrollTop + 40) + "px";
	document.all.vpic.innerHTML = shadowFrame(Filename, iWidth, iHeight);
}
function hideimg()
{
	document.all.vpic.innerHTML = "";
}
