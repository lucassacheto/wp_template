
// MAIN FUNCTIONS
$(document).ready(function(){

	// resize main content to header posts
	//console.log($(".headerPost").parent().attr("class"))
	if ( $(".headerPost").parent().attr("class") == "mainContent" ){
		$(".mainContent").addClass("resize-content-post");
	}

	// control window size
    getWindowSize()
    function getWindowSize(){
    	var vWidthResize	=	$(window).width();
        if(vWidthResize < 1000){
        	$("header .social").addClass("mobileView");
			$("header nav ul").hide();
        }else{
        	$("header .social").removeClass("mobileView");
            $("header .social").show();
        };

		if(vWidthResize < 780){
			$("header nav ul").hide();
		}else{
			$("header nav ul").show();
		}
    };
	$(window).resize(function(){getWindowSize()});

    // menu mobile
	$("button.mobile-menu").click(function(){
       	$("nav ul").fadeToggle([0.5]);
	});

	// search

	if( $("header .search .mask-input-search").length ){
		$("header .search .mask-input-search input").keydown(function(e){
			if( e.keyCode && e.keyCode == 13 ){
				$("header .search a").click();
			}else if( e.which && e.which == 13 ){
				$("header .search a").click();
			}
		});
	}

	$("header .search a").click(function(){
		if ( $(".search .mask-input-search").css("display") == "none" ){
			$(".search .mask-input-search").show();
		}else{
			//console.log($(".mask-input-search input").val().length)
			if ( $(".mask-input-search input").val().length == 0 ){
				$(".mask-input-search").hide();
			}else{
				var vSearch	= $(".mask-input-search input#searchPost").val();
				window.location.href="http://omundodoluks.com.br?s="+vSearch;				
			}
		};

        if ( $("header .social").css("display") == "none" && $("header .social").hasClass("mobileView") ){
           	$("header .social").hide();
        }else{
        	$("header .social").show();
        }
	});


	/* menu fixed on scroll */
	$(window).scroll(function(e){
		verifyTopPosition( $(this), 'header');
	});

	function verifyTopPosition(ev, elTop){
		if( $(elTop) ){
			if(ev.scrollTop() >= ($(elTop).height() + $(elTop).position().top)){
				$("header").addClass('fixed');
			}else{
				$("header").removeClass('fixed');
			}
		};
	};

/*
    var vidProject = "<?php echo"$idProject"; ?>";

    (function() {

      var getFeatureHome = "//gear.codes/api/v1/default.asp";

        $.getJSON( getFeatureHome,{
            source: "loadmedia",
            rows: "6",
            fields: "title,image",
            mediaAreaParentID: vidProject,
            orderSort: "desc"
        },function(json){
            if(json){
                $.each(json, function(i,item){
                	var vTitle	= item.title;
                    var vImage	= item.image;
                    console.log(item);

                    if(i == 1 || i == 6){
                    	$(".featured-posts article").addClass("top");
                    }

                    $(".featured-posts").append('<article class="content-article"><div class="item-image"><a href="#"><img src="'+vImage+'" title=""  /></a></div><div class="item-category"><a href="#"></a></div><div class="item-content-wrap"><div class="item-content"><h3><a href="#">'+vTitle+'</a></h2><div class="item-details"><ul><li class="item-author">luks</li><li class="item-date">29 de abril, 2016</li></ul></div></div></div></article>');
                });
            }else{
            	 alert("nada")
            }
        });
    })();
*/


});
