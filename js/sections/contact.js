/* ------------------------------------------------------ *\
    [Methods] contactForm
\* ------------------------------------------------------ */
    var contactForm = {
        /*
        sendButtons: "",
        contactForm: "",
        loaderIcon: "",
        */
        sendLeads: function() {
            var data, dataRenamed;
            data = $(contactForm.contactForm).serializeFormJSON();
            dataRenamed = LDR.renameArrayObjKeys([data], {
                "name": "nombre",
                "lastname": "apellidos",
                "email": "correo",
                "phone": "telefono",
                "agencie": "agencia",
                "comment": "mensaje"
            });
            dataRenamed = dataRenamed[0];
            dataRenamed["business_max"] = $('#ldr_business_max').val(); //Max Id;
            dataRenamed["producto"] = data["departamento"] + " - " + data["modelo"];
            dataRenamed["news"] = "0";
            dataRenamed["origen_type"] = "2";
            dataRenamed["campaign_max"] = "Contacto";
            dataRenamed["web_max"] = window.location.href;
            dataRenamed["exit_web"] = window.location.href;
            return LDR.postalService(GLOBALMasterMax, dataRenamed);
        },
        handlerPromiseSend: function (data1) {
            var contactSendPromise, ldr_agn, rootApi;

            rootApi = LDR.getValue('#master-host');
            url_location = rootApi;
            
            ldr_agn = LDR.getValue('#ldr_agn');
            ldr_product = LDR.getValue('#ldr_producto');
            console.log(ldr_agn, ldr_product);

            resetAlert();
            alertify.set({
                labels: {
                    ok: 'Aceptar',
                    cancel: 'Cancelar'
                }
            });
            data = $(contactForm.contactForm).serializeFormJSON();
            contactSendPromise = contactForm.sendContacto();
            contactSendPromise.success( function (data2) {
                ga('send', 'event', 'button-send-form--contact', ldr_product, 'form-contact');
                setTimeout(function () {
                    setTimeout(function () {
                        //$('#form-wrapper').fadeOut(1000);
                        $('.form-thanks').fadeIn(1000);
                        setTimeout(function() {
                            contactForm.resetContact();
                            alertify.alert("¡Muchas gracias!<br>" + 
                                           "Hemos enviado su formulario exitosamente a un representante de la concesionaria " + ldr_agn + ", " +
                                           "En breve nos contactaremos con usted.", function(e) {
                                                $(location).attr('href', url_location); 
                                           });
                            alertify.success("Datos enviados.");
                        }, 1800);
                    }, 1800);
                }, 1400);
            });
            contactSendPromise.error( function (data2) {
                contactForm.resetContact();
                alertify.error("No se han podido enviar los datos <br /> Inténtelo más tarde.");
            });
        },
        handlerPromiseLeads: function (data) {
            var contactSndPromise;
            contactSndPromise = contactForm.sendContacto();
            contactSndPromise.success(contactForm.handlerPromiseSend);
            contactSndPromise.error(contactForm.handlerPromiseSend);
        },
        sendContacto: function () {
            var urlSen, data;
            data = $(contactForm.contactForm).serializeFormJSON();
            urlSen = GLOBALRootApi;
            return LDR.postalService(urlSen + urlsApi.snd_con, data);
        },
        resetContact: function () {
            var $btnSend;
            $btnSend = $(".send_contact_form");
            LDR.resetForm(contactForm.contactForm);
            $(contactForm.loaderIcon).css("display", "none");
            $btnSend.removeAttr("disabled");
        },
        clickSend: function(event) {
            // Loader Icon
            contactForm.loaderIcon = "#loader_send_icon";
            // Get and save current button id
            contactForm.sendButton = "#" + $(this).attr('id');
            // Get the current form id, find the form with the same data-scope value
            contactForm.contactForm = "form#" + $(domEl.div_recurrent).find("form").attr("id");

            formErrors = formValidation.required(contactForm.contactForm, '.validate-required', contactForm.sendButton);
            if (formErrors) {
                $(contactForm.contactForm).css("cursor", "auto").prop("disabled", true);
                $(contactForm.loaderIcon).css("display", "block");
                leadsPromise = contactForm.sendLeads();
                leadsPromise.success(contactForm.handlerPromiseLeads);
                leadsPromise.error(contactForm.handlerPromiseLeads);
                /*
                contactForm.sendLeads();
                contactForm.sendContacto();
                contactForm.addContacto();
                */
            }
        }
    }