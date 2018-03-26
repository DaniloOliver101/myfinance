	function valida()
	{
		var coduf = document.getElementById("txtcoduf")
		if(coduf.selectedIndex == 0)
		{
			alert("Selecione uma UF!")
			coduf.focus()
			coduf.style.borderColor = "red"

			return false
		}}
		function validargenero(genero){

		console.log(genero);		
		if(genero.selectedIndex == 0)
		{
			alert("Selecione um Gênero");	
			return false;
		}}
		function validarsenha(){		 
		var senha = document.getElementById("txtsenha");
		var confirmasenha = document.getElementById("txtsenha2");
		var erro = document.getElementById("erro");
			erro.style.display = "none";
		if(senha.value != confirmasenha.value)
		{
			erro.style.display = "block";
			alert("As senhas não conferem");
			senha.focus();
			return false;
		}
		function auto_focus(){
			var email = getElementById("txtemail")
			if(email.click()){}
		}
		
		return true;

	}