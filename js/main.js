jQuery(document).ready(function($){
	var is_bouncy_nav_animating = false;
	//open bouncy navigation
	$('.cd-bouncy-nav-trigger').on('click', function(){
		triggerBouncyNav(true);
	});
	
	$('.cd-bouncy-nav-help').on('click', function(){
		helpBouncyNav(true);
	});
	
	$('.nav-combinada').on('click', function(){
		combinadaBouncyNav(true); $('input[type="radio"]').attr('checked',false);
	});
	
	$('.nav-sencilla').on('click', function(){
		sencillaBouncyNav(true); $('input[type="radio"]').attr('checked',false);
	});
	
	$('.nav-doble').on('click', function(){
		dobleBouncyNav(true); $('input[type="radio"]').attr('checked',false);
	});
	
	$('.nav-terminos').on('click', function(){
		terminosBouncyNav(true);
	});
	
	$(document).on('click','.nav-terminos', function(){
		terminosBouncyNav(true);
	});
	
		
	$('.nav-comosejuega').on('click', function(){
		comosejuegaBouncyNav(true);
	});
	
	$('.nav-formulario').on('click', function(){
		formularioBouncyNav(true); });
		
		$('.nav-enviarapuesta').on('click', function(){
		enviarapuestaBouncyNav(true); });
	
	
	
	//close bouncy navigation
	$('.cd-bouncy-nav-modal .cd-close').on('click', function(){
		triggerBouncyNav(false);
	});
	$('.cd-bouncy-nav-modal').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-modal')) {
			triggerBouncyNav(false);
		}
	});
	
	$('.cd-bouncy-nav-opciones .cd-close').on('click', function(){
		helpBouncyNav(false);
	});
	$('.cd-bouncy-nav-opciones').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-opciones')) {
			helpBouncyNav(false);
		}
	});
	
	$('.cd-bouncy-nav-combinada .cd-close').on('click', function(){
		combinadaBouncyNav(false);
	});
	$('.cd-bouncy-nav-combinada').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-combinada')) {
			combinadaBouncyNav(false);
		}
	});
	
	
	$('.cd-bouncy-nav-sencilla .cd-close').on('click', function(){
		sencillaBouncyNav(false);
	});
	$('.cd-bouncy-nav-sencilla').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-sencilla')) {
			sencillaBouncyNav(false);
		}
	});
	
	
	$('.cd-bouncy-nav-doble .cd-close').on('click', function(){
		dobleBouncyNav(false);
	});
	$('.cd-bouncy-nav-doble').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-doble')) {
			dobleBouncyNav(false);
		}
	});
	
	
	$('.cd-bouncy-nav-terminos .cd-close').on('click', function(){
		terminosBouncyNav(false);
	});
	$('.cd-bouncy-nav-terminos').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-terminos')) {
			terminosBouncyNav(false);
		}
	});
	
	$('.cd-bouncy-nav-comosejuega .cd-close').on('click', function(){
		comosejuegaBouncyNav(false); $('#comosejuega').attr('src', $('#comosejuega').attr('src'));
	});
	$('.cd-bouncy-nav-comosejuega').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-comosejuega')) {
			comosejuegaBouncyNav(false); $('#comosejuega').attr('src', $('#comosejuega').attr('src'));
		}
	});
	
	$('.cd-bouncy-nav-formulario .cd-close').on('click', function(){
		formularioBouncyNav(false); $('.borrar_dato').remove(); $('.msjerror_apuesta_realizada').remove(); $('#loading').css('display', 'block');
	});
	$('.cd-bouncy-nav-formulario').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-formulario')) {
			formularioBouncyNav(false); $('.borrar_dato').remove(); $('.msjerror_apuesta_realizada').remove(); $('#loading').css('display', 'block');
		}
	});
	
	
	$('.cd-bouncy-nav-enviarapuesta .cd-close').on('click', function(){
		if (!$('p.msjerror_apuesta_realizada').length){location.reload(true); } 
         
                   if ($('p.msjerror_apuesta_realizada').length){enviarapuestaBouncyNav(false); }
				   $('.borrar_dato2').remove(); $('.msjerror_apuesta_realizada').remove();
				   $('#loading2').css('display', 'block');
				   
	});
	$('.cd-bouncy-nav-enviarapuesta').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-enviarapuesta')) {
			if (!$('p.msjerror_apuesta_realizada').length){location.reload(true); } 
         
                   if ($('p.msjerror_apuesta_realizada').length){enviarapuestaBouncyNav(false); }
$('.borrar_dato2').remove(); $('.msjerror_apuesta_realizada').remove();
$('#loading2').css('display', 'block');
  
		}
	});
	
	

	function triggerBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-modal').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-modal').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-modal').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.cd-bouncy-nav-trigger').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-modal').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	function helpBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-opciones').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-opciones').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-opciones').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.cd-bouncy-nav-help').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-opciones').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	
	function combinadaBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-combinada').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-combinada').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-combinada').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.nav-combinada').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-combinada').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	
	function sencillaBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-sencilla').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-sencilla').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-sencilla').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.nav-sencilla').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-sencilla').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	
	
	
	function dobleBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-doble').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-doble').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-doble').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.nav-doble').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-doble').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	
	
	function terminosBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-terminos').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-terminos').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-terminos').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.nav-terminos').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-terminos').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	
	function comosejuegaBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-comosejuega').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-comosejuega').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-comosejuega').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.nav-comosejuega').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-comosejuega').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	
	 
    $('#form, #fat, #form_combinada').submit(function() {
		formularioBouncyNav(true); $('#loading').css('display', 'block');
		     
	
	
	
		$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#respuesta').html(data);

            $('#loading').css('display', 'none');
            }
        })
        
        return false;
    }); 
	
	
	
    $('#form, #fat, #form_sencilla').submit(function() {
		formularioBouncyNav(true); $('#loading').css('display', 'block');
		     
	
	
	
		$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#respuesta').html(data);
             $('#loading').css('display', 'none');

            }
        })
        
        return false;
    }); 
	
	
	
	
	
    $('#form, #fat, #form_doble').submit(function() {
		formularioBouncyNav(true); $('#loading').css('display', 'block');
		     
	
	
	
		$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#respuesta').html(data);
             $('#loading').css('display', 'none');

            }
        })
        
        return false;
    }); 
	
	
	
	
	
	
	function formularioBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-formulario').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-formulario').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-formulario').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.nav-formulario').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-formulario').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	
	
    $('#form, #fat, #form_enviar_apuesta').submit(function() {
		 enviarapuestaBouncyNav(true); $('#loading2').css('display', 'block');
		     
	
	
	
		$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#respuesta-enviar-apuesta').html(data);
             $('#loading2').css('display', 'none');
			 formularioBouncyNav(false); 
			

            }
        });
		
 if ($('p.msjerror_apuesta_realizada').html()==0){
		$('.borrar_dato').remove();}

        
        return false;
    }); 
	
	
	function enviarapuestaBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-enviarapuesta').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-enviarapuesta').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-enviarapuesta').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			
			//check if CSS animations are supported... 
			if($('.nav-enviarapuesta').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-enviarapuesta').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
			
						
		}
	}
	
	
	                 
         
	
	
		
});

