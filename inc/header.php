<!DOCTYPE html>
<html dir="ltr" lang="th">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1486">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="The Lake คอนโดพร้อมอยู่ จังหวะใหม่ของชีวิตเมือง
คอนโดเมืองที่ผสานความรื่นรมย์จากธรรมชาติ เข้ากับไลฟ์สไตล์ของคนเมืองได้อย่างลงตัว สะดวกสบายด้วย BTS สายสีเขียว ส่วนต่อขยายสถานีวุฒากาศ และ MRT สายสีน้ำเงิน">
		<meta name="content owner" content="pf.co.th" />
		<meta name="author" content="rgb72 co.,ltd.">
		<meta name="og:title" content="Property Perfect The Lake" />
 		<meta name="og:description" content="The Lake คอนโดพร้อมอยู่ จังหวะใหม่ของชีวิตเมือง
คอนโดเมืองที่ผสานความรื่นรมย์จากธรรมชาติ เข้ากับไลฟ์สไตล์ของคนเมืองได้อย่างลงตัว สะดวกสบายด้วย BTS สายสีเขียว ส่วนต่อขยายสถานีวุฒากาศ และ MRT สายสีน้ำเงิน" />
 		<meta name="og:image" content="images/pf-the-lake-fb.jpg" />
 		<meta name="og:site_name" content="Property Perfect The Lake" />
 		<meta name="og:type" content="website" />
 		<meta name="og:url" content="http://www.pf.co.th" />
        <title>Property Perfect The Lake</title>
        <!--[if IE]>
            <script src="js/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/base.css">

        <!-- Add fancyBox main JS and CSS files -->
        <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        <link rel="stylesheet" type="text/css" href="js/jquery-ui.css" media="screen" />


        <!-- include jQuery + carouFredSel plugin -->
        <script type="text/javascript" language="javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>

        <script type="text/javascript" src="js/skrollr.min.js"></script>

        <!-- optionally include helper plugins -->
        <script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.transit.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>


        <script>

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };
            function theLakeInit() {
                $('.main-header h2').css({right: '-200px'});
                $('.main-header h1').css({left: '-150px'});
                $('.main-header .main-nav').css({left: '-150px'});
                $('.price').css({height: 0, top: 0});

                $('.main-header h2').delay(500).animate({right: '38px'}, 500);
                $('.main-header h1').delay(500).animate({left: '0'}, 500);
                $('.main-header .main-nav').delay(500).animate({left: '0'}, 500);
                $('.price').delay(500).animate({height: '82px', top: '-96px'});
            }
            $(document).ready(function() {
                theLakeInit();

                $("#mainGallery").carouFredSel({
                    auto: {
                        delay           : 2000,
                        duration        : 1000
                    },
                    responsive: true,
                    width: '100%',
                    prev: '#mainGalleryPrev',
                    next: '#mainGalleryNext'
                });

                $('#slide-unit').carouFredSel({
                    auto: false,
                    pagination: {
                        container: "#pagi-slide-unit",
                        anchorBuilder: false
                    }

                });

                $('#slide-unit2').carouFredSel({
                    auto: false,
                    pagination: {
                        container: "#pagi-slide-unit2",
                        anchorBuilder: false
                    }

                });

                $("#unitTypeDetail").carouFredSel({
                    auto: false,
                    pagination: {
                        container: ".nav-unit-type ul",
                        anchorBuilder: false
                    }
                });

                $("#infoContentSlide").carouFredSel({
                    auto: false,
                    prev: '#infoContentSlidePrev',
                    next: '#infoContentSlideNext',
                    scroll: {
                        onBefore: function() {
                            $('.pointer').hide();
                            if ($('.project-info--gallery').css('display') !== 'none') {
                                $('#projectInfoGalleryThumb>li').removeClass('selected');
                                $('.project-info--gallery').slideUp();
                            }
                        }
                    }
                });
                
                $('.zoom-img').bind('click',function(){
                    var targetZ = $(this).attr('href');
                    $(targetZ).trigger('click');
                    return false;
                });

                $("#infoContentSlide2").bind('click', function() {
                    $("#infoContentSlide").trigger("slideTo", 1);
                    return false;
                });
                $("#infoContentSlide3").bind('click', function() {
                    $("#infoContentSlide").trigger("slideTo", 2);
                    return false;
                });



                $("#projectInfoGallery").carouFredSel({
                    auto: false,
                    responsive: true,
                    width: '100%',
                    pagination: {
                        container: "#projectInfoGalleryThumb",
                        anchorBuilder: false
                    },
                    scroll: {
                        onBefore: function(data) {
                            $('.pointer').attr('class', 'pointer ' + data.items.visible.attr('class'));
                        },
                        onAfter: function(data) {
                            data.items.old.find('.js-show-content').css({top: '20px', opacity: '0'});
                            data.items.visible.find('.js-show-content').animate({top: '0', opacity: '1'});
                        }
                    },
                    onCreate: function() {
                        $('.project-info--gallery').hide();
                        $('.pointer').hide();
                        $("#projectInfoGallery .js-show-content").css({top: '20px', opacity: '0'});
                        $(".gallery1 .js-show-content").css({top: '0', opacity: '1'});

                        $('#projectInfoGalleryThumb a').bind('click', function() {
                            $('.pointer').show();
                            $(".project-info--gallery").slideDown();
                            $(this).parent().addClass('selected');
                        });
                    }
                });
                
                $('.close-slide').bind('click',function(){
                    $('.project-info--gallery').slideUp(function(){
                        $('#projectInfoGalleryThumb>li').removeClass('selected');
                    });

                    $('.pointer').hide();
                });
                
                $('#projectInfoGalleryThumb>li').removeClass('selected');

                $('.header-footer h3 a').bind('click', function() {
                    $('.footer-project').slideToggle();
                    $('.footer-project').parent().toggleClass('active');
                    return false;
                });

                var menuActive = true;
                var overviewTop = $('#content-overview').offset().top;
                var infoTop = $('#content-info').offset().top;
                var locationTop = $('#content-location').offset().top;
                var unitTop = $('#content-unit').offset().top;
                var promotionTop = $('#content-promotion').offset().top;
                var contactTop = $('#content-contact').offset().top;

                $('a[href^="#content"]').bind('click', function(event) {
                    event.preventDefault();
                    if (menuActive) {
                        menuActive = false;
                        var elementActive = 'a[href="' + $(this).attr('href') + '"]';
                        
                        $('.main-nav li').removeClass('active');
                        $(elementActive).parent().addClass('active');
                        $('html, body').animate({scrollTop: ($($(this).attr('href')).offset().top)}, 1000, function() {
                            menuActive = true;
                            disScroll = true;
							if ($(window).scrollTop() < 770) {
								$('.fixed-this').addClass('hide-app');
							} else {
								$('.fixed-this').removeClass('hide-app');
							}
                            
                        });
                        

                    } else {
                        
                    }

                });

                $(window).scroll(function() {

                    if (menuActive) {
                        $('.main-nav li').removeClass('active');
                        if ($(window).scrollTop() < 770) {
                            $('.fixed-this').addClass('hide-app');
                        } else {
                            $('.fixed-this').removeClass('hide-app');
                        }

                        if($(window).scrollTop() < infoTop) {
                            $('a[href="#content-overview"]').parent().addClass('active');
                            $("#mainGallery").trigger("play");
                        }else if($(window).scrollTop() < locationTop) {
                            $('a[href="#content-info"]').parent().addClass('active');
                            $("#mainGallery").trigger("pause");
                        }else if($(window).scrollTop() < unitTop) {
                            $('a[href="#content-location"]').parent().addClass('active');

                            if ($('.project-info--gallery').css('display') !== 'none') {
                                $('.project-info--gallery').slideUp();
                                $('.pointer').hide();
                                $('#projectInfoGalleryThumb li').removeClass('selected');
                            }

                        }else if($(window).scrollTop() < promotionTop) {
                            $('a[href="#content-unit"]').parent().addClass('active');
                        }else if($(window).scrollTop() < contactTop) {
                            $('a[href="#content-promotion"]').parent().addClass('active');
                        }else {
                            $('a[href="#content-contact"]').parent().addClass('active');
                        }
                    }

                });
                (function($, F) {
                    F.transitions.resizeIn = function() {
                        var previous = F.previous,
                                current = F.current,
                                startPos = previous.wrap.stop(true).position(),
                                endPos = $.extend({opacity: 1}, current.pos);

                        startPos.width = previous.wrap.width();
                        startPos.height = previous.wrap.height();

                        previous.wrap.stop(true).trigger('onReset').remove();

                        delete endPos.position;

                        current.inner.hide();

                        current.wrap.css(startPos).animate(endPos, {
                            duration: current.nextSpeed,
                            easing: current.nextEasing,
                            step: F.transitions.step,
                            complete: function() {
                                F._afterZoomIn();

                                current.inner.fadeIn("fast");
                            }
                        });
                    };

                }(jQuery, jQuery.fancybox));

                $('.fancybox').fancybox({
                    padding: 45,
                    nextMethod: 'resizeIn',
                    nextSpeed: 250,
                    prevMethod: false,
                    helpers : {
                            title : {
                                    type : 'inside'
                            },
                            buttons	: {}
                    },

                    afterLoad : function() {
                            this.title = (this.index + 1) + ' / ' + this.group.length + (this.title ? '  ' + this.title : '');
                    }
                });

                $('.fancybox3').fancybox({
                    padding: 0,
                    'closeBtn': false
                });

                $('.left-fancybox').fancybox({
                    padding: 0,
                    nextMethod: 'resizeIn',
                    nextSpeed: 250,
                    prevMethod: false
                });

                $(".datepicker").datepicker();

                function timeValue() {
                    $('.timeInput').val($('.timeHour').val() + ':' + $('.timeMinute').val());
                }

                $('.timeInput').bind('click',function() {
                    $('.time-input').show();
                    timeValue();
                });
                $('.upHour').bind('click', function(event) {
                    event.preventDefault();
                    var hourVal = $('.timeHour').val();
                    hourVal++;
                    if (hourVal > 17)
                        hourVal = 10;
                    $('.timeHour').val(hourVal);
                    timeValue();

                });

                $('.downHour').bind('click', function(event) {
                    event.preventDefault();
                    var hourVal = $('.timeHour').val();
                    hourVal--;
                    if (hourVal < 10)
                        hourVal = 17;
                    $('.timeHour').val(hourVal);
                    timeValue();

                });

                $('.minuteZ').bind('click', function(event) {
                    event.preventDefault();
                    $(this).addClass('active');
                    $('.minuteH').removeClass('active');
                    $('.timeMinute').val('00');
                    timeValue();

                });

                $('.minuteH').bind('click', function(event) {
                    event.preventDefault();
                    $(this).addClass('active');
                    $('.minuteZ').removeClass('active');
                    $('.timeMinute').val('30');
                    timeValue();

                });
                
                $('.time-input').bind('mouseleave',function(){
                    $(this).hide();
                });
                
                $('#show-goo-m').bind('click',function(event){
                    event.preventDefault();
                    $('#content-goo-map').show();
                    $('.map-menu a').removeClass('active');
                    $(this).addClass('active');
                });
                $('#show-ghp-m').bind('click',function(event){
                    event.preventDefault();
                    $('#content-goo-map').hide();
                    $('.map-menu a').removeClass('active');
                    $(this).addClass('active');
                });
                
                
                var deviceAgent = navigator.userAgent.toLowerCase();
                var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);

                var $window = $(window);
	
                // Cache the Y offset and the speed of each sprite
                $('[data-type]').each(function() {	
                        $(this).data('offsetY', parseInt($(this).attr('data-offsetY')));
                        $(this).data('Xposition', $(this).attr('data-Xposition'));
                        $(this).data('speed', $(this).attr('data-speed'));
                });
                
                if (agentID) {
                            $('.project-info').css('background-attachment','scroll');
                            $('.unit-type').css('background-attachment','scroll');
                            $('.promotion').css('background-attachment','scroll');
                            $('.map').css('background-attachment','scroll');
                            $('.contact').css('background-attachment','scroll');
                     
                        }
                        
                // For each element that has a data-type attribute
                $('section[data-type="background"]').each(function(){
                
                
                        // Store some variables based on where we are
                        var $self = $(this),
                                offsetCoords = $self.offset(),
                                topOffset = offsetCoords.top;
                        
                        // When the window is scrolled...
                    $(window).scroll(function() {
                        
                        if (agentID) {
                            $('.project-info').css('background-attachment','scroll');
                            $('.unit-type').css('background-attachment','scroll');
                            $('.promotion').css('background-attachment','scroll');
                            $('.map').css('background-attachment','scroll');
                            $('.contact').css('background-attachment','scroll');
                     
                        }
                
                        // If this section is in view
                        else {
                            if ( ($window.scrollTop() + $window.height()) > (topOffset) &&
                                 ( (topOffset + $self.height()) > $window.scrollTop() ) ) {
        
                                // Scroll the background at var speed
                                // the yPos is a negative value because we're scrolling it UP!								
                                var yPos = -($window.scrollTop() / $self.data('speed')); 
                                
                                // If this element has a Y offset then add it on
                                if ($self.data('offsetY')) {
                                        yPos += $self.data('offsetY');
                                }
                                
                                // Put together our final background position
                                var coords = '50% '+ yPos + 'px';

                                // Move the background
                                $self.css({ backgroundPosition: coords });
                        
                            }
                        }// in view
                
                    }); // window scroll
                                
                });	// each data-type

                $('#content-goo-map').hide();

                $('.js-check-tel').bind('keypress',function(e){
                    return (e.which!=8&&e.which!=0&&(e.which<48||e.which>57))?false:true;
                });


                $('#content-contact').submit(function(){

                    if(!isValidEmailAddress($('.js-check-mail').val()) || $('.js-check-mail').val() == ""){

                        $.fancybox.open('#popup-alert-mail');
                        return false;
                    }
                    else{
                        $.fancybox.open('#popup-thank');
                        return false;
                    }
                });

                $('#popup-contact').submit(function(){

                    if(!isValidEmailAddress($('.js-check-mail').val()) || $('.js-check-mail').val() == ""){

                        $.fancybox.open('#popup-alert-mail');
                        return false;
                    }
                    else{
                        $.fancybox.open('#popup-thank');
                        return false;
                    }
                });


				
            });
        </script>
    </head>
    <body>
		
        <!--main wrapper-->
        <div class="wrapper">
            <!--header-->
            <div class="wraper-header">
                <header class="main-header">
                    <h1><a class="hd-t" href="javascript: void(0);">The Lake Sathorn</a></h1>
                    <h2><a class="hd-t" href="javascript: void(0);">Property Perfect Condominium</a></h2>
                    <nav class="main-nav">
                        <ul>
                            <li class="active"><a href="#content-overview">Overview</a></li>
                            <li><a href="#content-info">Project Info</a></li>
                            <li><a href="#content-location">Location</a></li>
                            <li><a href="#content-unit">Unit Type</a></li>
                            <li><a href="#content-promotion">Promotion</a></li>
                            <li><a href="#content-contact">Contact Us</a></li>
                        </ul>
                    </nav>
                </header>
            </div><!--end header-->