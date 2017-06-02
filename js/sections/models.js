detectNavigatorMethods.IE10();
is_mobileMethods.is_mobile();
modifyHeight("#features-space .suzuki-table .row");
features_tables.init_is_mobile();
is_mobileMethods.is_mobile_versions_price_table();


//addStylesMethods.addStyleModel_ignis();
modelsMenuMethods.scrollSwitchMethod();


//$('body').prepend( patch_bar );
//$('body').prepend( td_id_flag );
// FANCYBOX
    $(domEl.div_recurrent).on('click', 'a.gallery-box-link', fancyBoxMethods.onClickGalery);
    //Fancybox Trigger in all gallery elements
    $('a.fancybox-thumbs').on('click mouseup', function( e ){
        e.preventDefault();
    }).fancybox({
        arrows    : true,
        autoSize    : false,
        closeBtn  : true,
        fitToView   : false,
        height      : '70%',
        helpers : {
            overlay: {
                locked: false
            },
            title : {
                type : 'over'
            },
            thumbs : {
                width  : 50,
                height : 50
            }
        },
        maxHeight   : 550,
        maxWidth    : 1200,
        nextEffect  : 'none',
        nextClick   : true,
        padding     : 0,
        prevEffect  : 'none',
        width       : '70%'
    });

    //Specifications Slider controls and functionality
    var specifications_i = 0;
    var specifications_total =  $('.specifications-wrapper .specification').length - 1;
    $('a.specifications-controls').on('click', function( e ){
        e.preventDefault();
        var direction, fake_div, copy_div;
        $('.specifications-wrapper .fake_div').remove();
        if( $(this).attr('href') == '#left' ){
            if( specifications_i > 0 ){
                specifications_i--;
            }else{
                specifications_i = specifications_total ;
                fake_div = true;
                copy_div = $('#features-wrapper .specification').eq( 0).clone();
                copy_div.addClass('fake_div');
                $('#features-wrapper').append( copy_div ).css({marginLeft: ( ( specifications_i + 1 ) * -100 )+'%' }).stop().animate({marginLeft: ( specifications_i * -100) + '%' });
            }
        }else{
            if( specifications_i < specifications_total ){
                specifications_i++;
            }else{
                fake_div = true;
                specifications_i = 0;
                copy_div = $('#features-wrapper .specification').eq( specifications_i -1  ).clone();
                $('#features-wrapper').prepend( copy_div ).css({marginLeft: '100%' }).stop();
                copy_div.addClass('fake_div').css({marginLeft:"-99%", position:"absolute", width: "100%"}).stop().animate({marginLeft:'-100%'} );
                $('#features-wrapper').animate({marginLeft: '0'});
            }
        }
        if( !fake_div ){
            $('.specifications-wrapper .specifications').stop().animate({marginLeft: ( specifications_i * -100) + '%' });
        }
    });
    $("#versions-price-table").find(".pdf-download:gt(2)").css("visibility", "hidden");
    var $display_tables = $('.display-tables'), display_vct_class = 'prices';
    function display_versions_comparative(){
        var $div;
        $display_tables.each(function(){
            $div = $(this);
            if( display_vct_class == $div.data('display-table') ){
                $div.fadeOut().fadeIn(1000);
                modifyHeight("#features-space .suzuki-table .row");
                //modifyHeight("#features-space .suzuki-table .body .row");
            }else{
                $div.hide();
            }
        });
    }
    $('a.swap-display-tables').on('click', function( e ){
        e.preventDefault();
        display_vct_class = $(this).data('display-table');
        $.scroll_to('precios');
        var timeout = setTimeout(function(){
            display_versions_comparative();
        }, 900 );
    });
    display_versions_comparative();
    /*$.fn.equalHeights = function(){
        var max_height = 0;
        $(this).each(function(){
            max_height = Math.max($(this).height(), max_height);
        });
        $(this).each(function(){
            $(this).height(max_height);
        });
    };
    $('#features-space .suzuki-table .body .row .cell.equal-height').equalHeights();*/
    modelsMenuMethods.changeNameModel($(this));

    $('body').on('click', '#model-test-drive-flag-link', modelsMenuMethods.preventDefault_flag_link);
    $('body').on('click', '#prueba-de-manejo', modelsMenuMethods.preventDefault_test_drive);
    $('body').on('click', '#accesorios', modelsMenuMethods.preventDefault_accesories);
    $('body').on('click', '#galeria', modelsMenuMethods.preventDefault_galery);
    $('body').on('click', '#precios', modelsMenuMethods.preventDefault_prices);
    $('body').on('click', '#caracteristicas', modelsMenuMethods.preventDefault_characterics);
    $('body').on('click', '.top', modelsMenuMethods.preventDefault_class_top);
    $('body').on('click', '#top', modelsMenuMethods.preventDefault_id_top);