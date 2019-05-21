jQuery(function($){
	$(document).ready(function () {

		var elements = document.getElementsByClassName('projets');

		function btn_menu(catName){
			for (let x of elements){

				console.log(catName);
				var postCat = $(x).find('.flipbox').find('li').text();

				if (postCat.indexOf(catName) === -1){
					//$(x).find('.flipbox').find('img').css('background-color', '#ffffff' );
					$(x).find('.flipbox').find('img').animate({opacity : 0.10}, 500);

				} else {
					$(x).find('.flipbox').find('img').animate({opacity : 1}, 500);

				};
			};

		};
        
		$('#btn_maison').click(function(){
			btn_menu('maison');
		});

		$('#btn_business').click(function(){
			btn_menu('business');
		});

		$('#btn_religion').click(function(){
			btn_menu('religion');
		});
		$('#btn_tout').click(function(){
			
			btn_menu('');
	});

        
        
        $('div p').last().attr('id', 'images');
        $('.post').append( $('#images'));
        $('#texte').append( $('.post-title'));
        $('#texte').append( $('.post-content p'));
        $("#images img:first-child").css("opacity",'1');
        
        $('#texte a').last().clone().appendTo($('#menu_diaporama'));
        $('#menu_diaporama a').append( $('#pdf') );
        $('#menu_diaporama a').css('visibility','hidden');
        $('#pdf').css('visibility','visible');
        $('#pdf').css('right','0px');

        

        /*$('#texte a').css('display','none');
        $('#pdf').append( $('#texte p').last());
        $('#pdf a').text('');*/

        var n = 1;
        $('#fleche_droite').click(function(){

        	if (n !== $("#images img").length){
        	n ++;
        	}else{
        		n=1;
        	}
        	
        	$("#images img:nth-child("+n+")").animate({opacity : 1}, 500);
        	$("#images img:not(:nth-child("+n+"))").animate({opacity : 0}, 500);	
        });
        $('#fleche_gauche').click(function(){
        	n--;
        	if (n < 1 ){
        	n = $("#images img").length;
        	}
        	
        	$("#images img:nth-child("+n+")").animate({opacity : 1}, 500);
        	$("#images img:not(:nth-child("+n+"))").animate({opacity : 0}, 500);	
        });
        $('#paragraphe').click(function(){
        	
        	if ($('#texte').css('opacity') === '0'){
        	$('#texte').animate({opacity : 1}, 300);
        	$('#paragraphe').attr('src', '../wp-content/themes/test_site_wp/images/paragraphe_clicked.svg');
        	}else{$('#texte').animate({opacity : 0}, 300);
    		$('#paragraphe').attr('src', '../wp-content/themes/test_site_wp/images/paragraphe.svg');  }

    	});
	});
});



/*
if (test.indexOf('culture') === -1){
        	$('.flipbox').css('opacity','0')
        	});

x.className

$('.li').find('*').css('color','red');
$(x).find('.flipbox').find('li').text()

$('btn_maison').click(function(){
	btn_menu('maison');
};
$('p').last().css('color','red');
$('monDiv').append('Texte inséré avec append()');
$('div').remove('#div1');
$('#div2').empty();
$('a').removeAttr('href');
$('#images').css('background-color','black');


<?php get_attached_media( $type, $post_id ) ?>

*/

