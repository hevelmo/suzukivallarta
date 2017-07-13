$(document).ready(function() {

    $("#header-panel").resize(function(){
        var _this = $(this);
        $('#header-spacer').stop().animate({height: _this.height()}, 300);
    });

    /* ------------------------------------------------------ *\
     [METHOS Control] Serialize Form
    \* ------------------------------------------------------ */

    //This method change a form into a JSON
    $.fn.serializeFormJSON = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };


    /* ------------------------------------------------------ *\
     [METHOS Control] Currency Format
    \* ------------------------------------------------------ */

    Number.prototype.format = function(n, x) {
        var re = '(\\d)(?=(\\d{' + (x || 3) + '}) + ' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
    };

    /* ------------------------------------------------------ *\
        EVENT CONTROL
    \* ------------------------------------------------------ */

    /*
    */
    // GENERAL CLICK RADIO & CHECKBOX
    $(":checkbox").on('change', changeInputsMethods.clickChangeCheckbox);
    $(".label-radio").on('click', changeInputsMethods.clcikChangeRadio);

    $('body').on('click', "#header-mobile i", is_mobileMethods.clickHeaderMobile);
    $('body').on('click', "#mobile-menu a", is_mobileMethods.clickMobileMenuLink);
    $('body').on('click', "#footer-content .row-1 .footer-column", is_mobileMethods.clickFooterContent);
    $('body').on('click', ".header-column", is_mobileMethods.clickHeaderColumn);
    $('body').on('click', ".back-list-arrow", is_mobileMethods.clickBackListArrow);

    $('body').on('click', ".menu-catalogs", is_mobileMethods.clickMobileMenuContent);
    
    $('body').on('click', ".scroll-up", up.init);

    // HEADER PANEL
    $('body').on('click', 'a.expand-header', openPanelMenuMethods.clickPanel_general);
    //$('#footer-wrapper').on('click', domEl.header_models_button, openPanelMenuMethods.clickPanel_general);

    // EVENT CLICK GO OWNERS
    $('body').on('click', '#header-owners-button', openPanelMenuMethods.clickOwnersPanel);
    $('body').on('click', '#header-menu-before-buy', openPanelMenuMethods.clickBeforeByPanelMobile);
    // EVENT CLICK GO BEFORE BYU
    $('body').on('click', '#header-before-buy-button', openPanelMenuMethods.clickBeforeByPanel);
    $('body').on('click', '#header-menu-owners', openPanelMenuMethods.clickOwnersPanelMobile);
    
    //$('body').on('click', '#header-catalog-button', openPanelMenuMethods.clickCatalogPanel);

    // EVENT CLICK GO CLOSE PANEL
    //$('body').on('click', domEl.button_close_model_panel_menu, closePanelMenuMethods.closePanelModels);
    //$('body').on('click', domEl.button_close_financing_panel_menu, closePanelMenuMethods.closePanelFinancing);
    $('body').on('click', '#close-owners-panel', closePanelMenuMethods.closePanelOwners);
    $('body').on('click', '#close-before-buy-panel', closePanelMenuMethods.closePanelBeforeBuy);
    //$('body').on('click', '#close-catalog-panel', closePanelMenuMethods.closePanelCatalog);

    //smooth scroll to top
    $("body").on('click', '.cd-top', scrolltotop.init);
    // 
    $('#suk_model_newsletter').on('click', newsletter.news);

    // VALIDATE FORM ITEMS
    $('body').on('focusout', '.validate-required', function() { $.validate_input( $(this) ) });

    // TEST DRIVE FORM
    $('body').on("click", '.testdrive-form-send', testDriveForm.clickSend);
    // FINANCING FORM
    $('body').on("click", '.financing-form-send', financingForm.clickSend);
    // CONTACT FORM
    $('body').on("click", '.contact-form-send', contactForm.clickSend);

    $('body').on('click', 'a.catalogo-dropdown', function(event) {
        $('.inner-menu').addClass('active');
    });
    $('.close-list-dropdown', '.inner-menu').on('click', function(event) {
        $('#list-menu').removeClass('active');
    });

    /* ------------------------------------------------------ *\
     [Methods] BOLSA DE TRABAJO
    \* ------------------------------------------------------ */

    $(domEl.div_recurrent).on("click", ".job-board-form-send", formJobBoard.clickSend);

    file = $("#suk_update_file");
    file.on("change", handleFileSelect);
    //console.log(file);
    //selDiv = $("#selectedFiles");

    //var selDiv = "";
    // var selDivM="";
    //var storedFiles = [];
    function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var sizeByte = this.files[0].size;
        var siezekiloByte = parseInt(sizeByte / 1024);
        if(siezekiloByte > $(this).attr('size')){
            //alert('El tamaño supera el limite permitido');
            $(this).val('');
            alertify.error("El tamaño supera el limite permitido, no mayor a 2MB");
            $('input[type="text"]#suk_upload_file_input').attr('value','');
            $('input[type="text"]#suk_upload_file_input').val('');
            $('.file-upload-input').removeAttr('style');
        } else {
            //alert('El tamaño es permitido');            
            alertify.success("El tamaño es permitido, " + siezekiloByte + " MB");
        }
        filesArr.forEach(function(f) {
            var getName, name, getContent, content, getType, type;
            /*if(!f.type.match("image.*")) {
                return;
            }
            */
            //storedFiles.push(f);            
            var reader = new FileReader();
            reader.onloadend = function (e) {
                //var html = "<div><img src=\"" + e.target.result + "\" data-file='"+f.name+"' class='selFile' title='Click to remove'>" + f.name + "<br clear=\"left\"/></div>";
                name = f.name;
                content = e.target.result.split(",",2)[1];//obtenemos el contenido del archivo, estará codificado en Base64
                type = f.type;
                day = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                f = new Date();
                month = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                SUK.setValue('#suk_date', day[f.getDay()] + ", " + f.getDate() + " de " + month[f.getMonth()] + " de " + f.getFullYear()/* + ", " + hour*/);
                //console.log(day[f.getDay()] + ", " + f.getDate() + " de " + month[f.getMonth()] + " de " + f.getFullYear());
                getName = SUK.setValue('#suk_filename', name);
                console.log(name);
                getType = SUK.setValue('#suk_mime', type);
                console.log(type);
                getContent = SUK.setValue('#suk_filecontent', content);
                console.log(content);
                //selDivM.append(html);
            }
            reader.readAsDataURL(f);
        });
        //var button = "<button id=\"button\" name=\"button\">Submit</button>";
        //sleDivM.append(button);
    }
    /*function handleForm(e) {
        e.preventDefault();
        var data = new FormData();
        for(var i=0, len=storedFiles.length; i<len; i++) {
            data.append('files', storedFiles[i]);
        }
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'handler.cfm', true);
        xhr.onload = function(e) {
            if(this.status == 200) {
                console.log(e.currentTarget.responseText);
                alert(e.currentTarget.responseText + ' items uploaded.');
            }
        }
        xhr.send(data);
    }
    function removeFile(e) {
        var file = $(this).data("file");
        for(var i=0;i<storedFiles.length;i++) {
            if(storedFiles[i].name === file) {
                storedFiles.splice(i,1);
                break;
            }
        }
        $(this).parent().remove();
    }*/

});
