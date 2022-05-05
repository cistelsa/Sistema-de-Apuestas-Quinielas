function ConteoRegresivo()
{
    var fecha=new Date('08 may 2023 15:00:00')
    var hoy=new Date() 
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0
    if (fecha>hoy)
    {
        var diferencia=(fecha.getTime()-hoy.getTime())/1000
		
		
        dias=Math.floor(diferencia/86400)
        diferencia=diferencia-(86400*dias)
        horas=Math.floor(diferencia/3600)
        diferencia=diferencia-(3600*horas)
        minutos=Math.floor(diferencia/60)
        diferencia=diferencia-(60*minutos)
        segundos=Math.floor(diferencia)
        document.getElementById('contador').innerHTML = '<p style="font-weight:bold; color:#009966" class="fecha">Tiempo límite de Apuesta</p><span class="reloj">' + dias + ':<span class="fecha">días</span></span>  <span class="reloj">' + horas + ':<span class="fecha">horas </span></span><span class="reloj">' + minutos + ':<span class="fecha">minutos </span></span><span class="reloj">' + segundos + '<span class="fecha">segundos</span></span>';
        if (dias>0 || horas>0 || minutos>0 || segundos>0)
        {
			
			if (dias=="0" && horas<="11")
        {
			
			document.getElementById('contador').innerHTML = '<p style="font-weight:bold; color:#009966" class="fecha">Tiempo límite de Apuesta</p><span class="relojm">' + dias + ':<span class="fecha">días</span></span>  <span class="relojm">' + horas + ':<span class="fecha">horas </span></span><span class="relojm">' + minutos + ':<span class="fecha">minutos </span></span><span class="relojm">' + segundos + '<span class="fecha">segundos</span></span>';
			
        }
		
		
		if (dias=="0" && horas=="0")
        {
			
			document.getElementById('contador').innerHTML = '<p style="font-weight:bold; color:#009966" class="fecha">Tiempo límite de Apuesta</p><span class="relojf">' + dias + ':<span class="fecha">días</span></span>  <span class="relojf">' + horas + ':<span class="fecha">horas </span></span><span class="relojf">' + minutos + ':<span class="fecha">minutos </span></span><span class="relojf">' + segundos + '<span class="fecha">segundos</span></span>';
			
        }
		
					
            setTimeout("ConteoRegresivo()",1000)
        }
		else{ 
location.reload(); } 

 

    }
    else
    {
		
document.getElementById('contador').innerHTML = '<p style="font-weight:bold; color:#993333" class="fecha">Tiempo límite de Apuesta Superado</p><span class="relojf">0:<span class="fecha">días</span></span>  <span class="relojf">0:<span class="fecha">horas </span></span><span class="relojf">0:<span class="fecha">minutos </span></span><span class="relojf">0<span class="fecha">segundos</span></span>';


    }
		
	
}



 // JavaScript Document