		
		var segundos=3; 
		
		function ConteoRegresivo(){ 
		
		
		document.getElementById('contador').innerHTML = '<p style="font-weight:bold; color:#009966" class="fecha">Redireccionando en</p><span class="reloj">' + segundos + '<span class="fecha">  segundos</span></span>'; 
		
		if(segundos<=0){clearInterval();
		
		
		
		$('form').submit();
		
		} 
		
		else{segundos--} } setInterval("ConteoRegresivo()",1000);




 // JavaScript Document