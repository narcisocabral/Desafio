<script language="javascript" type="text/javascript">
    var forte = false;
    var txt="";
    function validarSenha(){
	    senha1 = document.getElementById("idSenha1").value;
	    senha2 = document.getElementById("idSenha2").value;
 
	    if (senha1 === senha2){
	        document.getElementById("idForcaSenha").value = txt+", e coincidem";
	        if(forte==true){
	            document.getElementById("botaoVal").disabled = false;
	        }
	    }else{
	            document.getElementById("idForcaSenha").value = txt+", e não coincidem";
	    }
}
	
	
    function verifica(){
    	senha1 = document.getElementById("idSenha1").value;
    	forca = 0;
    	mostra = document.getElementById("mostra");
    	if((senha1.length >= 6) && (senha1.length <= 10)){
    		forca += 10;
    	}else if(senha1.length>10){
    		forca += 25;
    	}
    	if(senha1.match(/[a-z]+/)){
    		forca += 15;
    	}
    	if(senha1.match(/[A-Z]+/)){
    		forca += 20;
    	}
    	if(senha1.match(/[0-9]+/)){
    		forca += 20;
    	}
    
    	if(senha1.match(/!@#$%¨&*()[]~;:+/)){
    		forca += 25;
    	}
    	return mostra_res();
    }
    
    function mostra_res(){
    	if(forca < 30){
    	    txt="Muito Fraca";
    		document.getElementById("idForcaSenha").value = "Muito Fraca";
    		forte = false;
    		document.getElementById("idSenha2").disabled = true;
    
    	}else if((forca >= 30) && (forca < 60)){
    	    txt="Média";
    		document.getElementById("idForcaSenha").value = "Média";
            forte = true;
            document.getElementById("idSenha2").disabled = false;
    	}else if((forca >= 60) && (forca < 85)){
    	    txt="Forte";
    		document.getElementById("idForcaSenha").value = "Forte";
            forte = true;
            document.getElementById("idSenha2").disabled = false;
    	}else{
    	    txt="Muito Forte";
    		document.getElementById("idForcaSenha").value = "Muito Forte";
    		forte = true;
    		document.getElementById("idSenha2").disabled = false;
    	}
    }	
</script>