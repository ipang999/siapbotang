pic= new Image(); 
pic.src="./images/indicator.gif"; 

function getxmlhttp (){
	var xmlhttp = false;
	try {xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");} 
	catch (e) {
		try {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");}
		catch (E) {xmlhttp = false;}
	}
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {xmlhttp = new XMLHttpRequest();}
	return xmlhttp;
}

function ajaxFunctionGet(actionFile,obj){
	xmlhttp = getxmlhttp ();
	xmlhttp.open("GET", actionFile);	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(obj=='no'){
				document.getElementById(obj).value = xmlhttp.responseText;				
			}else{
				document.getElementById(obj).innerHTML = xmlhttp.responseText;
			}
		}
		if (xmlhttp.readyState == 1) {
			document.getElementById(obj).innerHTML = "<div align=\"center\">Processing...<br /><img src=\"images/indicator.gif\" width=\"16\" height=\"16\" /></div>";
		}
	}
	xmlhttp.send(null);
}

function ajaxFunctionPost(actionFile,str,obj){
	xmlhttp = getxmlhttp ();
	xmlhttp.open("POST", actionFile, true);
	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(obj).innerHTML = xmlhttp.responseText;
			$('#tblrekal').show();
		}
		if (xmlhttp.readyState == 1) {
			document.getElementById(obj).innerHTML = "<div align=\"center\">Processing...<br /><img src=\"images/indicator.gif\" width=\"16\" height=\"16\" /></div>";
		}		
	}
	xmlhttp.send(str);
}

function submit_ajaxredirect(serverPage,obj,responAjax,responLength,actionFile,str){
	xmlhttp = getxmlhttp ();
	xmlhttp.open("POST", serverPage, true);
	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			if (xmlhttp.responseText.substring(0,responLength) == responAjax){
				window.location=actionFile;
			}
			else{
				alert("Unauthorized Access Warning: \nAccess to this computer is prohibited unless authorized. Accessing programs or data unrelated to your job is prohibited ");
				document.getElementById(obj).innerHTML = xmlhttp.responseText;	
			}
		}
		if (xmlhttp.readyState == 1) {
			document.getElementById(obj).innerHTML = "<div align=\"center\">Processing...<br /><img src=\"images/indicator.gif\" width=\"16\" height=\"16\" /></div>";
		}		
	}
	xmlhttp.send(str);
}

// This file was created by KOLKP Jan 2009
