function HideAndShow(divId) {
	if(document.getElementById(divId).style.display == 'none') {
		document.getElementById(divId).style.display='block';
	} else {
		document.getElementById(divId).style.display = 'none';
	}
}