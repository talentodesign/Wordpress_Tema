jQuery(document).ready(function(){
	jQuery('.botao').not(".current").hover(
		function(){
			var end= jQuery(this).attr('src');
			var hov = end.replace('_off.','_on.');
			jQuery(this).attr('src', hov);
			},
		function(){
			var end= jQuery(this).attr('src');
			var hov = end.replace('_on.','_off.');
			jQuery(this).attr('src', hov);
			}		  
	);
	jQuery(".current").each(function(){
		var end2= jQuery(this).attr('src');
		var hov2 = end2.replace('_off.','_on.');
		jQuery(this).attr('src', hov2);
		
		});
	
	var num= 0;
	var data = new Array();
	data[0] ="JAN";
	data[1] ="FEV";
	data[2] ="MAR";
	data[3] ="ABR";
	data[4]	="MAI";
	data[5] ="JUN";
	data[6] ="JUL";
	data[7] ="AGO";
	data[8] ="SET";
	data[9] ="OUT";
	data[10]="NOV";
	data[11]="DEZ";

	var dt = new Date();
	var mes=dt.getMonth();
	var ano=dt.getFullYear();

	if(mes==11){
		var mesdp=1;
		ano++;
	}
	else{
		var mesdp=mes+1;
	}

	jQuery("#home #agenda_h .mes").each(function(){
		num++;
		if(num == 1){
			jQuery(this).prepend('<div class="data"><span>'+data[mes]+'</span><br>'+ano+'</div>');
		}
		else{
			jQuery(this).prepend('<div class="data"><span>'+data[mesdp]+'</span><br>'+ano+'</div>');
		}
	});
	var num2= 0;
	jQuery("#home #agenda_h .titulo").each(function(){
		num2++;
		if(num2 == 1 || num2 == 3){
		jQuery(this).css({"border-bottom":"2px dotted white"});
		}
	});
	jQuery(".tts").tweet({
            username: "COBAPANEWS",
            join_text: "auto",
            avatar_size: 0,
            count: 2,
            loading_text: "loading tweets...",
            template: "{text}{time}",
        });
	
});