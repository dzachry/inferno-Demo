// FLASH EMBED WORK AROUND FOR INTERNET DESTROYER
function swfr(swfName, swfWidth, swfHeight, swfWmode, swfVars, swfDiv) {
	var mySwf;
	mySwf = '<object type="application/x-shockwave-flash" data="'+swfName+'" width="'+swfWidth+'" height="'+swfHeight+'">';
	mySwf = mySwf+'<param name="movie" value="'+swfName+'" />';
	mySwf = mySwf+'<param name="quality" value="best" /><param name="loop" value="false" /><param name="menu" value="false" /><param name="wmode" value="'+swfWmode+'" />';
	mySwf = mySwf+'<param name="allowscriptaccess" value="always" />';
	mySwf = mySwf+'<param name="flashvars" value="'+swfVars+'" />';
	document.getElementById(swfDiv).innerHTML = mySwf;
}

// WINDOWS MEDIA PLAYER EMBED WORK AROUND FOR INTERNET DESTROYER
// NOTE: make sure entire EMBED tag is all on one line, no line breaks. Id needed, break up as seen above.

function wmfr(wmName, wmWidth, wmHeight, wmDiv) {
	var myWm;
	myWm = '<EMBED type="application/x-mplayer2/" pluginspage="http://microsoft.com/windows/mediaplayer/en/download/" id="mediaPlayer" name="mediaPlayer" displaysize="4" autosize="-1" bgcolor="darkblue" showcontrols="true" showtracker="-1" showdisplay="0" showstatusbar="-1" videoborder3d="-1" width="'+wmWidth+'" height="'+wmHeight+'" src="'+wmName+'" autostart="true" designtimesp="5311" loop="false"></EMBED>';

// NAME THE ID OF THE DIV wmDiv

	document.getElementById(wmDiv).innerHTML = myWm;
}