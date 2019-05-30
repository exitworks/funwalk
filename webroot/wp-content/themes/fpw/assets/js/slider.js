(function($) {
    var $Carousel = $('#Carousel');
    var $nav = $('#slider-nav');

    $Carousel.slick({
        initialSlide: 3,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        infinite:false,
        cssEase: 'ease-out',
        prevArrow:'<button type="button" class="slick-prev"><em>MORE FORMAL</em></button>',
        nextArrow:'<button type="button" class="slick-next"><em>MORE CASUAL</em></button>',
        asNavFor: '#slider-nav'
    });

    $(window).on('load', function(){
        setTimeout(function(){
            $Carousel.slick('slickGoTo', 0);
        },1000);
    });

    $nav.slick({
        slidesToShow: 6,
        slidesToScroll: 6,
        arrows: false,
        infinite:false,
        asNavFor: '#Carousel',
        dots: false,
        centerMode: false,
        focusOnSelect: true
    });


    $Carousel.on('afterChange', function(slick, currentSlide){
      var current_slide = $Carousel.slick('slickCurrentSlide'); // スライド切り替えの度にスライド番号を取得
      //console.log(current_slide);
      if(current_slide===1){
          // スライダーのオプションを変更（第4引数をtrueにするとリアルタイムに反映）
          $Carousel.slick('slickSetOption', 'prevArrow', '<button type="button" class="slick-prev"><em>MORE FORMAL</em></button>', true);
          $Carousel.slick('slickSetOption', 'nextArrow', '<button type="button" class="slick-next"><em>LADY\'S</em></button>', true);
      } else if(current_slide===2) {
          $Carousel.slick('slickSetOption', 'prevArrow', '<button type="button" class="slick-prev"><em>MEN\'S</em></button>', true);
          $Carousel.slick('slickSetOption', 'nextArrow', '<button type="button" class="slick-next"><em>MORE CASUAL</em></button>', true);
      } else {
          $Carousel.slick('slickSetOption', 'prevArrow', '<button type="button" class="slick-prev"><em>MORE FORMAL</em></button>', true);
          $Carousel.slick('slickSetOption', 'nextArrow', '<button type="button" class="slick-next"><em>MORE CASUAL</em></button>', true);
      }
    });

    $Carousel.on('beforeChange', function(slick, currentSlide, nextSlide){
        $('.style_description, .style_popup_link, .style_block_headertxt').css('opacity',0);
    });
    $Carousel.on('afterChange', function(slick, currentSlide){
        var $current_image = $('.slick-active .style_image');
        var $current_desc_pc = $('.slick-active .style_description')
        var $current_desc_sp = $('.slick-active .style_popup_link')
        var $current_head = $('.slick-active .style_block_headertxt')
        //$('.style_description, .style_popup_link, .style_block_headertxt').css('opacity',0);
//        $current_image.animate({ opacity: 0.05, easing: "easeOutQuad", }, 500).animate({ opacity: 1 }, {
//            duration: 900, easing: "easeInOutQuad", complete: function(){
                //$current_desc_pc.animate({ opacity: 1 }, { duration: "400", easing: "easeInOutQuad" });
                //$current_desc_sp.animate({ opacity: 1 }, { duration: "400", easing: "swing" });
                //$current_head.animate({ opacity: 1 }, { duration: "400", easing: "easeInOutQuad" });

                // $current_head.animate({ opacity: 1 }, {
                //     duration: 300, complete: function(){
                //         $current_desc.animate({ opacity: 1 }, 300);
                //         $current_spdesc.animate({ opacity: 1 }, 300);
                //     }
                // });
//            }
//        });

             //   $current_desc_pc.delay(600).animate({ opacity: 1 }, { duration: 1300, easing: "easeInOutQuad" });
             //   $current_desc_sp.delay(600).animate({ opacity: 1 }, { duration: 1300, easing: "easeInOutQuad" });
             //   $current_head.delay(200).animate({ opacity: 1 },    { duration: 800, easing: "easeInOutQuad" });

            $current_desc_pc.animate({ opacity: 1 }, { duration: 600, easing: "easeInOutQuad" });
            $current_desc_sp.animate({ opacity: 1 }, { duration: 600, easing: "easeInOutQuad" });
            $current_head.animate({ opacity: 1 },    { duration: 400, easing: "easeInOutQuad" });
            $('.style_description, .style_popup_link, .style_block_headertxt').css('opacity',0);

    });




})(jQuery);
