<?php include "header.php";?>
<script>
var str;
if(typeof(Storage)!=="undefined"){
	if(localStorage.wbduser){
		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				str = xmlhttp.responseText.split("||");
				document.getElementById("nama").value=str[0];
				document.getElementById("nomorhp").value=str[1];
				document.getElementById("alamat").value=str[2];
				document.getElementById("provinsi").value=str[3];
				document.getElementById("kota").value=str[4];
				document.getElementById("kodepos").value=str[5];
				document.getElementById("email").value=str[6];
				document.getElementById("usnmt").innerHTML=str[7];
				document.getElementById("usnm").value=str[7];
				document.getElementById("pwd").value=str[8];
				document.getElementById("pwd2").value=str[8];
			}
		}
		xmlhttp.open("POST","ajaxprofile.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("username="+localStorage.wbduser);
	}else{
	
	}
}else{
	document.getElementById("menubar").innerHTML="Sorry, your browser does not support web storage...";
}
/*var list = [];
function readysubmit(no,val)
{
	var isValid = 0;
	if(val=='0')list[no]=true;
	else list[no]=false;
	document.getElementById("masuk").disabled = true;
	for(var i=1;i<6;i++){
		if(list[i])isValid++;
	}
	if(isValid==5 &&(document.getElementById("cek").checked))document.getElementById("masuk").disabled = false;
}*/
function validate(text,num,pas)
{
	var xmlhttp;
	var validpic = '<img src="images/like.png" width="15" height="15"/>';
	var invalidpic = '<img src="images/unlike.png" width="15" height="15"/>';
	var wait = '<img src="images/ajaxLoader.gif" width="15" height="15"/>';
	var valid = false;
	var temp = ""+text;
	if (temp.length==0)
	  { 
	  	if(num==1)
	  		document.getElementById("validasiNama").innerHTML="";
	  	else if(num==2)
	  		document.getElementById("validasiUser").innerHTML="";
	  	else if(num==3)
	  		document.getElementById("validasiPass").innerHTML="";
	  	else if(num==4)
	  		document.getElementById("validasiCoPass").innerHTML="";
	  	else if(num==5)
	  		document.getElementById("validasiEmail").innerHTML="";
	  	return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    	//readysubmit(num,xmlhttp.responseText);
	    	//alert(xmlhttp.responseText);
	    	switch(num){
	    		case 1:
	    			switch(xmlhttp.responseText){
	    				case '0':
	    					document.getElementById("validasiNama").innerHTML=validpic;			
	    				break;
	    				default:
	    					document.getElementById("validasiNama").innerHTML=invalidpic+" (Nama harus terdiri dari karakter(A-Z)(a-z). Minimal 2 kata.)";
	    				break;
	    			}
	    		break;
	    		case 2:
	    			switch(xmlhttp.responseText){
	    				case '0':
	    					document.getElementById("validasiUser").innerHTML=validpic;			
	    				break;
	    				case '1':
	    					document.getElementById("validasiUser").innerHTML=invalidpic+" (Username sudah pernah terdaftar. Coba cari yang lain.)";
	    				break;
	    				case '2':
	    					document.getElementById("validasiUser").innerHTML=invalidpic+" (Username tidak boleh sama dengan password)";
	    				break;
	    				case '3':
	    					document.getElementById("validasiUser").innerHTML=invalidpic+" (Username minimal 5 karakter)";
	    				break;
	    			}
	    		break;
	    		case 3:
	    			switch(xmlhttp.responseText){
	    				case '0':
	    					document.getElementById("validasiPass").innerHTML=validpic;			
	    				break;
	    				case '1':
	    					document.getElementById("validasiPass").innerHTML=invalidpic+" (Password tidak boleh sama dengan username)";
	    				break;
	    				case '2':
	    					document.getElementById("validasiPass").innerHTML=invalidpic+" (Password minimal 8 karakter)";
	    				break;
	    			}
	    		break;
	    		case 4:
	    			switch(xmlhttp.responseText){
	    				case '0':
	    					document.getElementById("validasiCoPass").innerHTML=validpic;
	    				break;
	    				case '1':
	    					document.getElementById("validasiCoPass").innerHTML=invalidpic+" (Silakan isi 'Confirm Password' sama dengan Password awal)";
	    				break;
	    			}
	    		break;
	    		case 5:
    			switch(xmlhttp.responseText){
	    				case '0':
	    					document.getElementById("validasiEmail").innerHTML=validpic;
							break;
	    				case '1':
		    				document.getElementById("validasiEmail").innerHTML=invalidpic+" (Invalid Email)";
	    				break;
	    			}
	    		break;
	    	}
	    }else{
	    	switch(num){
	    		case 1:
	    			document.getElementById("validasiNama").innerHTML=wait;
	    		break;
	    		case 2:
	    			document.getElementById("validasiUser").innerHTML=wait;
	    		break;
	    		case 3:
	    			document.getElementById("validasiPass").innerHTML=wait;
	    		break;
	    		case 4:
	    			document.getElementById("validasiCoPass").innerHTML=wait;
	    		break;
	    		case 5:
	    			document.getElementById("validasiEmail").innerHTML=wait;
	    		break;
	    	}
	    }
	 }
	xmlhttp.open("GET","validasi.php?q="+temp+"&num="+num+"&pass="+pas,true);
	xmlhttp.send();
}
function ceksama(){
	if(document.getElementById("nama").value==str[0]
		&& document.getElementById("nomorhp").value==str[1]
		&& document.getElementById("alamat").value==str[2]
		&& document.getElementById("provinsi").value==str[3]
		&& document.getElementById("kota").value==str[4]
		&& document.getElementById("kodepos").value==str[5]
		&& document.getElementById("email").value==str[6]
		&& document.getElementById("usnmt").innerHTML==str[7]
		&& document.getElementById("usnm").value==str[7]
		&& document.getElementById("pwd").value==str[8]
		&& document.getElementById("pwd2").value==str[8]){
			alert("Tidak ada perubahan data");
	}else{
		document.getElementById("registerform").submit();
	}
}
</script>
<article id="featured" class="body">
		<h2 id="headername"></h2>
		<form id="registerform" method="post" action="editprofilesave.php" enctype="multipart/form-data">
		<pre>(*) Harus diisi.</pre>
		<pre>Username*			<input type="hidden" name="username" id="usnm"><span id="usnmt"></span><span id="validasiUser"></span></pre>
		<pre>Password*			<input type="password" name="password" id="pwd" onblur="validate(pwd.value,3,usnm.value)"/><span id="validasiPass"></span></pre>
		<pre>Confirm Password*		<input type="password" name="password2" id="pwd2" onblur="validate(pwd2.value,4,pwd.value)"/><span id="validasiCoPass"></span></pre>
		<pre>Nama Lengkap*		<input type="text" name="nama" id="nama" onblur="validate(nama.value,1,'budi')"/><span id="validasiNama"></span></pre>
		<pre>Nomor HP				<input type="text" name="nomorhp" id="nomorhp"></pre>
		<pre>Profile Photo			<input type="file" name="foto" id="foto"></pre>
		<pre>Alamat				<input type="textarea" name="alamat" id="alamat"></pre>
		<pre>Provinsi				<input type="text" name="provinsi" id="provinsi"></pre>
		<pre>Kota					<input type="text" name="kota" id="kota"></pre>
		<pre>Kode Pos				<input type="text" name="kodepos" id="kodepos"></pre>
		<pre>Email*				<input type="text" name="email" id="email" onblur="validate(email.value,5,null)"/><span id="validasiEmail"></span></pre>
		<input type="button" onclick="ceksama()" value="Save"> <a href='profile.php'>Kembali</a></form>
</article><!-- /#featured -->
<?php include "footer.php";?>

</div>
</body>
</html>