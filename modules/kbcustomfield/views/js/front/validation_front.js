/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * @author    knowband.com <support@knowband.com>
 * @copyright 2017 Knowband
 * @license   see file: LICENSE.txt
 * @category  PrestaShop Module
 */
var validation_fields = {
        'isGenericName': /^[^<>={}]*$/,
        'isAddress': /^[^!<>?=+@{}_$%]*$/,
        'isPhoneNumber': /^[+0-9. ()-]*$/,
        'isInt': /^[0-9]*$/,
        'isIntExcludeZero': /^[1-9]*$/,
        'isPrice': /^[0-9]*(?:\.\d{1,6})?$/,
        'isPriceExcludeZero': /^[1-9]*(?:\.\d{1,6})?$/,
        'isDate': /^([0-9]{4})-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/,
        'isUrl': /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi,
        'isEmail': /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
};

function kbValidateField(element)
{
//    console.log(element.attr('data-validate'));
    if (element.attr('data-validate') == 'isName') {
        if(element.val().length === 0){
            return true;
        }else{
            return validate_isName(element.val());
        }
    } else if (element.attr('data-validate') == 'isGenericName') {
          return validate_isGenericName(element.val());
    } else if (element.attr('data-validate') == 'isAddress') {
          return validate_isAddress(element.val());
    } else if (element.attr('data-validate') == 'isPostCode') {
          return validate_isPostCode(element.val());
    } else if (element.attr('data-validate') == 'isCityName') {
          return validate_isCityName(element.val());
    } else if (element.attr('data-validate') == 'isMessage') {
          return validate_isMessage(element.val());
    } else if (element.attr('data-validate') == 'isPhoneNumber') {
          return validate_isPhoneNumber(element.val());
    } else if (element.attr('data-validate') == 'isDniLite') {
          return validate_isDniLite(element.val());
    } else if (element.attr('data-validate') == 'isEmail') {
         return validate_isEmail(element.val());
    } else if (element.attr('data-validate') == 'isPasswd') {
         return validate_isPasswd(element.val());
    }
}


$(document).ready(function() { 
    
    $('#authentication').on("click", "#submitAccount", function () {
        var error = false;
        $('.error_message1').remove();
        $('input[type=text]').each(function () {
            $(this).removeClass('error_field');
            if ($(this).hasClass('kbfield')) {
                if ($(this).hasClass('is_required')) {
                    var min = $(this).attr('minlength');
                    var max = $(this).attr('maxlength');
                    var input_mand = velovalidation.checkMandatory($(this), max, min);
                    if (input_mand != true) {
                        error = true;
                        $(this).addClass('error_field');
                        if ($(this).closest('.form-group').find('.error_message').length) {
                            $(this).closest('.form-group').find('.error_message').show();
                        } else {
                                $(this).after('<p class="error_message1">' + input_mand + '</p>');

                        }
                    } else {
                        if ($(this).attr('data-validate')) {
                            if (!kbValidateField($(this))) {
                                error = true;
                                $(this).addClass('error_field');
                                if ($(this).closest('.form-group').find('.error_message').length) {
                                    $(this).closest('.form-group').find('.error_message').show();
                                } else {
                                    $(this).after('<p class="error_message1">' + kb_not_valid + '</p>');
                                }
                            } else {
                                $(this).closest('.form-group').find('.error_message').hide();
                            }
                        } else if (!$(this).hasClass('kbfielddatetime') && $(this).hasClass('hasDatepicker')) {
                            var date_valid = velovalidation.checkDateddmmyy($(this));
                            if (date_valid != true) {
                                $(this).addClass('error_field');
                                if ($(this).closest('.form-group').find('.error_message').length) {
                                    $(this).closest('.form-group').find('.error_message').show();
                                } else {
                                    $(this).after('<p class="error_message1">' + date_valid + '</p>');
                                }
                            } else {
                                $(this).closest('.form-group').find('.error_message').hide();
                            }
                        } else {
                            $(this).closest('.form-group').find('.error_message').hide();
                        }
                    }
                } else {
                    if ($(this).attr('data-validate')) {
                        if (!kbValidateField($(this))) {
                            error = true;
                            $(this).addClass('error_field');
                            if ($(this).closest('.form-group').find('.error_message').length) {
                                $(this).closest('.form-group').find('.error_message').show();
                            } else {
//                                if (is_error2 < 1) {
                                    $(this).after('<p class="error_message1">' + kb_not_valid + '</p>');
//                                    is_error2++;
//                                }
                            }
                        } else {
                            $(this).closest('.form-group').find('.error_message').hide();
                        }
                    } else {
                        $(this).closest('.form-group').find('.error_message').hide();
                    }
                }
            }
        });
        
        $('input[type="radio"]').closest('.clearfix').each(function () {
            $(this).removeClass('error_field');
            if ($(this).find('input:radio').hasClass('kbfield')) {
                if ($(this).find('input:radio').hasClass('is_required')) {
                    if ($(this).find('input:radio:checked').length == 0) {
                        error = true;
                        $(this).addClass('error_field');
                        $(this).after('<p class="error_message1">' + field_not_empty + '</p>');
                    }
                }
            }
        });
        
        if (error) {
            return false;
        } else {
            $('#account-creation_form').append('<input type="hidden" name="submitAccount" value="1"/>');
            /*Knowband button validation start*/
            $('button[name="submitAccount"]').attr('disabled', 'disabled');
            $('#account-creation_form').submit();
            /*Knowband button validation end*/
        }

    });
//    if(typeof submit_account_btn != 'undefined') {
//        $('#authentication').bind("DOMSubtreeModified", function () {
//            $('#account-creation_form').attr('enctype', 'multipart/form-data');
//          
//            
//        });
        
        
//    }
    
    
    $('button[name="submitIdentity"]').on('click', function () {
        var error = false;
        $('.error_message1').remove();
        $('input[type=text]').each(function () {
            $(this).removeClass('error_field');
            if ($(this).hasClass('kbfield')) {
                if ($(this).hasClass('is_required')) {
                    var min = $(this).attr('minlength');
                    var max = $(this).attr('maxlength');
                    var input_mand = velovalidation.checkMandatory($(this), max, min);
                    if (input_mand != true) {
                        error = true;
                        $(this).addClass('error_field');
                        if ($(this).closest('.form-group').find('.error_message').length) {
                            $(this).closest('.form-group').find('.error_message').show();
                        } else {
                                $(this).after('<p class="error_message1">' + input_mand + '</p>');

                        }
                    } else {
                        if ($(this).attr('data-validate')) {
                            if (!kbValidateField($(this))) {
                                error = true;
                                $(this).addClass('error_field');
                                if ($(this).closest('.form-group').find('.error_message').length) {
                                    $(this).closest('.form-group').find('.error_message').show();
                                } else {
                                    $(this).after('<p class="error_message1">' + kb_not_valid + '</p>');
                                }
                            } else {
                                $(this).closest('.form-group').find('.error_message').hide();
                            }
                        } else if (!$(this).hasClass('kbfielddatetime') && $(this).hasClass('hasDatepicker')) {
                            var date_valid = velovalidation.checkDateddmmyy($(this));
                            if (date_valid != true) {
                                $(this).addClass('error_field');
                                if ($(this).closest('.form-group').find('.error_message').length) {
                                    $(this).closest('.form-group').find('.error_message').show();
                                } else {
                                    $(this).after('<p class="error_message1">' + date_valid + '</p>');
                                }
                            } else {
                                $(this).closest('.form-group').find('.error_message').hide();
                            }
                        } else {
                            $(this).closest('.form-group').find('.error_message').hide();
                        }
                    }
                } else {
                    if ($(this).attr('data-validate')) {
                        if (!kbValidateField($(this))) {
                            error = true;
                            $(this).addClass('error_field');
                            if ($(this).closest('.form-group').find('.error_message').length) {
                                $(this).closest('.form-group').find('.error_message').show();
                            } else {
//                                if (is_error2 < 1) {
                                    $(this).after('<p class="error_message1">' + kb_not_valid + '</p>');
//                                    is_error2++;
//                                }
                            }
                        } else {
                            $(this).closest('.form-group').find('.error_message').hide();
                        }
                    } else {
                        $(this).closest('.form-group').find('.error_message').hide();
                    }
                }
            }
        });
        
        $('textarea').each(function () {
            $(this).removeClass('error_field');
            if ($(this).hasClass('kbfield')) {
                if ($(this).hasClass('is_required')) {
                    var min = $(this).attr('minlength');
                    var max = $(this).attr('maxlength');
                    var input_mand = velovalidation.checkMandatory($(this), max, min);
                    if (input_mand != true) {
                        error = true;
                        $(this).addClass('error_field');
                        if ($(this).closest('.form-group').find('.error_message').length) {
                            $(this).closest('.form-group').find('.error_message').show();
                        } else {
                                $(this).after('<p class="error_message1">' + input_mand + '</p>');

                        }
                    } else {
                        if ($(this).attr('data-validate')) {
                            if (!kbValidateField($(this))) {
                                error = true;
                                $(this).addClass('error_field');
                                if ($(this).closest('.form-group').find('.error_message').length) {
                                    $(this).closest('.form-group').find('.error_message').show();
                                } else {
                                    $(this).after('<p class="error_message1">' + kb_not_valid + '</p>');
                                }
                            } else {
                                $(this).closest('.form-group').find('.error_message').hide();
                            }
                        } else {
                            $(this).closest('.form-group').find('.error_message').hide();
                        }
                    }
                } else {
                    if ($(this).attr('data-validate')) {
                        if (!kbValidateField($(this))) {
                            error = true;
                            $(this).addClass('error_field');
                            if ($(this).closest('.form-group').find('.error_message').length) {
                                $(this).closest('.form-group').find('.error_message').show();
                            } else {
//                                if (is_error2 < 1) {
                                    $(this).after('<p class="error_message1">' + kb_not_valid + '</p>');
//                                    is_error2++;
//                                }
                            }
                        } else {
                            $(this).closest('.form-group').find('.error_message').hide();
                        }
                    } else {
                        
                    }
                }
            }
        });
        $('select').closest('.form-group').each(function() {
            $(this).find('select').removeClass('error_field');
            if ($(this).find('select').hasClass('kbfield')) {
                 if ($(this).find('select').hasClass('is_required')) {
                     if ($(this).find('select').val() == null) {
                         error = true;
                        $(this).find('select').addClass('error_field');
                        $(this).after('<span class="error_message1">' + field_not_empty + '</span>');
                     }
                 }
            }
        });
        
        $('input[type="radio"]').closest('.clearfix').each(function () {
            $(this).removeClass('error_field');
            if ($(this).find('input:radio').hasClass('kbfield')) {
                if ($(this).find('input:radio').hasClass('is_required')) {
                    if ($(this).find('input:radio:checked').length == 0) {
                        error = true;
                        $(this).addClass('error_field');
                        $(this).after('<p class="error_message1">' + field_not_empty + '</p>');
                    }
                }
            }
        });
        
        $('input[type="checkbox"]').closest('.form-group').each(function () {
            $(this).removeClass('error_field');
            if ($(this).find('input:checkbox').hasClass('kbfield')) {
                if ($(this).find('input:checkbox').hasClass('is_required')) {
                    if ($(this).find('input:checkbox:checked').length == 0) {
                        error = true;
                        $(this).addClass('error_field');
                        $(this).after('<p class="error_message1">' + field_not_empty + '</p>');
                    }
                }
            }
        });
        
        $('input[type="file"]').each(function() {
            $(this).removeClass('error_field');
            if ($(this).hasClass('kbfield')) {
                if ($(this).hasClass('is_required')) {
                    if ($(this).prop('files').length == 0) {
                        error = true;
                        $(this).addClass('error_field');
                        if ($(this).closest('.form-group').find('.error_message').length) {
                            $(this).closest('.form-group').find('.error_message').show();
                        } else {
                            if ($(this).closest('.form-group').find('.uploader').length) {
                                 $(this).closest('.uploader').after('<p class="error_message1">' + file_not_empty + '</p>');
                            } else {
                                 $(this).after('<p class="error_message1">' + file_not_empty + '</p>');
                            }
                           
                        }
                    } else {
                        var extension_string = $(this).closest('.form-group').find('.file_extension').html();
                        var extension_arr = extension_string.replace(/[ ]/g, '').split(',');
                        var file_ext = $(this).val().trim().substring($(this).val().trim().lastIndexOf('.') + 1).toLowerCase();
                        if ($.inArray(file_ext, extension_arr) == -1) {
                            error = true;
                            $(this).addClass('error_field');
                            if ($(this).closest('.form-group').find('.error_message').length) {
                                $(this).closest('.form-group').find('.error_message').show();
                            } else {
                                if ($(this).closest('.form-group').find('.uploader').length) {
                                    $(this).closest('.uploader').after('<p class="error_message1">' + file_format_error + '</p>');
                                } else {
                                    $(this).after('<p class="error_message1">' + file_format_error + '</p>');
                                }

                            }
                        } else {
                             $(this).closest('.form-group').find('.error_message').hide();
                        }
                    }
                } else {
                    if ($(this).prop('files').length != 0) {
                        var extension_string = $(this).closest('.form-group').find('.file_extension').html();
                        var extension_arr = extension_string.replace(/[ ]/g, '').split(',');
                        var file_ext = $(this).val().trim().substring($(this).val().trim().lastIndexOf('.') + 1).toLowerCase();
                        if ($.inArray(file_ext, extension_arr) == -1) {
                            error = true;
                            $(this).addClass('error_field');
                            if ($(this).closest('.form-group').find('.error_message').length) {
                                $(this).closest('.form-group').find('.error_message').show();
                            } else {
                                if ($(this).closest('.form-group').find('.uploader').length) {
                                    $(this).closest('.uploader').after('<p class="error_message1">' + file_format_error + '</p>');
                                } else {
                                    $(this).after('<p class="error_message1">' + file_format_error + '</p>');
                                }

                            }
                        } else {
                             $(this).closest('.form-group').find('.error_message').hide();
                        }
                    } else {
                        $(this).closest('.form-group').find('.error_message').hide();
                    }
                }
            }
        });
        if (error) {
            return false;
        } else {
//            $.ajax({
////                processData: false,
////                contentType: false,
//                type: "POST",
////                 dataType: 'json',
//                
//                data: 'customer_identity_submit=true&ajax=true&' + $(this).parents('form').serialize(),
////                processData: false,
////                contentType: false,
//                url: kb_front_controller,
////                data: formData,
//                
//                success: function (res) {
//                    
//                },
//                complete: function () {
//                    
//                }
//            });
//            $('#account-creation_form').append('<input type="hidden" name="submitAccount" value="1"/>');
//            /*Knowband button validation start*/
//            $('button[name="submitIdentity"]').attr('disabled', 'disabled');
//            $('#account-creation_form').submit();
//            /*Knowband button validation end*/
        }

    });
   
//    $("select.form-control,input[type='radio'],input[type='checkbox']").not(".not_uniform").uniform();
});

$(window).load(function() {
     $('input[type="checkbox"]').closest('.checkbox').find('.disabled').removeClass('disabled');
     $('input[type="radio"]').closest('.radio-inline').find('.disabled').removeClass('disabled');
});