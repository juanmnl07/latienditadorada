jQuery(document).ready(function () {    
    jQuery(".ftrd-lbl1").click(function(){
        jQuery('.sliderinner ul').animate({
            left: '0'
        });
        jQuery('.handle').animate({
            left:'0'
        });
    });
    jQuery(".ftrd-lbl2").click(function(){
        jQuery('.sliderinner ul').animate({
            left: '-940'
        });
        jQuery('.handle').animate({
            left:'195'
        });
    });
    jQuery(".ftrd-lbl3").click(function(){
        jQuery('.sliderinner ul').animate({
            left: '-1880'
        });
        jQuery('.handle').animate({
            left:'380'
        });
    });
    jQuery(".ftrd-lbl4").click(function(){
        jQuery('.sliderinner ul').animate({
            left: '-2820'
        });
        jQuery('.handle').animate({
            left:'570'
        });
    });
    jQuery(".ftrd-lbl5").click(function(){
        jQuery('.sliderinner ul').animate({
            left: '-3760'
        });
        jQuery('.handle').animate({
            left:'760'
        });
    });
		
	
    //search
    jQuery(".menu1 li").hover(
        function () {
            jQuery(this).find("div").fadeIn();
        }, 
        function () {
            jQuery(this).find("div").fadeOut();
        }
        );

    jQuery(".cartstatus").click(function(){
        jQuery(".cartdrop").fadeToggle(300);
        jQuery(".logreg").hide();
        if(!jQuery(this).hasClass("cartstatus2")){
            jQuery(this).addClass("cartstatus2");
        }
        else {
            jQuery(this).removeClass("cartstatus2");
        }
    });
    jQuery(".loginregister").click(function(){
        jQuery(".logreg").fadeToggle(300);
        jQuery(".cartdrop").hide();
        if(!jQuery(this).hasClass("loginregisteractive")){
            jQuery(this).addClass("loginregisteractive");
        }
        else {
            jQuery(this).removeClass("loginregisteractive");
        }
    });

    jQuery(".search").click(function() {
        jQuery('.searchtoggle').toggle('fast', function() {
            });
    });
    jQuery(".slideprev").click(function(){
        var udaljeno = jQuery(".sliderinner ul").css("left");
        if(udaljeno!='0px'){
            jQuery('.sliderinner ul').animate({
                left: '+=940'
            });
            var palica = jQuery(".handle").css("left");
            if(palica == '195px'){
                jQuery(".handle").animate({
                    left:'0'
                });
            }
            if(palica == '380px'){
                jQuery(".handle").animate({
                    left:'195'
                });
            }
            if(palica == '570px'){
                jQuery(".handle").animate({
                    left:'380'
                });
            }
            if(palica == '760px'){
                jQuery(".handle").animate({
                    left:'570'
                });
            }
        }
    });
    //desna
    jQuery(".slidenext").click(function(){
        var udaljeno = jQuery(".sliderinner ul").css("left");
        if(udaljeno!='-3760px'){
            jQuery('.sliderinner ul').animate({
                left: '-=940'
            });
            var palica = jQuery(".handle").css("left");
            if(palica == '0px'){
                jQuery(".handle").animate({
                    left:'195'
                });
            }
            if(palica == '195px'){
                jQuery(".handle").animate({
                    left:'380'
                });
            }
            if(palica == '380px'){
                jQuery(".handle").animate({
                    left:'570'
                });
            }
            if(palica == '570px'){
                jQuery(".handle").animate({
                    left:'760'
                });
            }
        }
    });
    //gridswitch
    jQuery('.gridtype').click(function(){
        jQuery('.griditems').hide();
        jQuery('.grayprod').show();
    });
    jQuery('.listtype').click(function(){
        jQuery('.grayprod').hide();
        jQuery('.griditems').show();
    });				  
    //jQuery('input.star').rating();	
    //slider 2
    		
    var widthslide = jQuery('.thumbNav').width();
    var wholewidth = 940 - widthslide;
    wholewidth = wholewidth/2;
    jQuery('.thumbNav').css('margin-left',wholewidth);	
    //tabs
    var tabContainers = jQuery('div.tabs > div');
    tabContainers.hide().filter(':first').show();
			
    jQuery('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide();
        tabContainers.filter(this.hash).show();
        jQuery('div.tabs ul.tabNavigation li').removeClass('ewizz');
        jQuery(this).parent().addClass('ewizz');
        return false;
    }).filter(':first').click();			
});