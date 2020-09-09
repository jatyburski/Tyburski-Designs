function mailButton(text) {
	if ((text.matches) && (document.getElementById("email") != null)) {
		var str = document.getElementById("email").innerHTML;
		var res = str.replace("hello@tyburskidesigns.com", "Email Me"); 
		document.getElementById("email").innerHTML = res;
	}
}
  
var text = window.matchMedia("(max-width: 800px)")
mailButton(text)
text.addListener(mailButton)