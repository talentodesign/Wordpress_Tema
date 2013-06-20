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
	
	jQuery(".tts").tweet({
            username: "",
            join_text: "auto",
            avatar_size: 0,
            count: 2,
            loading_text: "loading tweets...",
            template: "{text}{time}",
        });
	
});