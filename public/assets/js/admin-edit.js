//const $ = require('jquery');
//global.$ = $;
//require('../css/lib/bootstrapValidator.min.css');
//require('../js/lib/bootstrapValidator.min.js');
require('../css/admin/admin.css');

$(document).ready(function () {
   /*================================================
    > FORMS
    ================================================*/
   /*================================================
    >> FORMS - SET LABEL TO PLACEHOLDER
    ================================================*/
   $(function () {
      $("body2").on("input propertychange", ".floating-label-form-group", function (e) {
         $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
      }).on("focus", ".floating-label-form-group", function () {
         $(this).addClass("floating-label-form-group-with-focus");
      }).on("blur", ".floating-label-form-group", function () {
         $(this).removeClass("floating-label-form-group-with-focus");
      });
   });

   /*================================================
    >> FORMS - REAL-TIME VALIDATING OF FORM INPUT FIELDS
    ================================================*/
   $('.edit_user_form').bootstrapValidator({
      // to use feedback icons ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {
         first_name: {
            validators: {
               stringLength: {
                  min: 2,
               },
               notEmpty: {
                  message: 'Please supply your first name'
               }
            }
         },
         last_name: {
            validators: {
               stringLength: {
                  min: 2,
               },
               notEmpty: {
                  message: 'Please supply your last name'
               }
            }
         },
         email: {
            validators: {
               notEmpty: {
                  message: 'Please supply your email address'
               },
               emailAddress: {
                  message: 'Please supply a valid email address'
               }
            }
         },
         phone: {
            validators: {
               notEmpty: {
                  message: 'Please supply your phone number'
               },
               phone: {
                  country: 'US',
                  message: 'Please supply a vaild phone number with area code'
               }
            }
         },
         address: {
            validators: {
               stringLength: {
                  min: 8,
               },
               notEmpty: {
                  message: 'Please supply your street address'
               }
            }
         },
         city: {
            validators: {
               stringLength: {
                  min: 4,
               },
               notEmpty: {
                  message: 'Please supply your city'
               }
            }
         },
         state: {
            validators: {
               notEmpty: {
                  message: 'Please select your state'
               }
            }
         },
         zip: {
            validators: {
               notEmpty: {
                  message: 'Please supply your zip code'
               },
               zipCode: {
                  country: 'US',
                  message: 'Please supply a vaild zip code'
               }
            }
         },
         comment: {
            validators: {
               stringLength: {
                  min: 10,
                  max: 200,
                  message: 'Please enter at least 10 characters and no more than 200'
               },
               notEmpty: {
                  message: 'Please supply a description of your project'
               }
            }
         }
      }
   })

      .on('success.form.bv2', function (e) {
         /*
          $('#success_message').slideDown({opacity: "show"}, "slow") // Do something ...
          $('#edit_user_form').data('bootstrapValidator').resetForm();
          // Prevent form submission
          e.preventDefault();

          // Get the form instance
          var $form = $(e.target);

          // Get the BootstrapValidator instance
          var bv = $form.data('bootstrapValidator');

          console.log($form.attr('action'));
          $('#edit_user_form_save').prop('disabled', true);
          $('#edit_user_form_quit').prop('disabled', true);
          //$form.submit()
          $.post("", function (data) {
          $(".result").html(data);
          });
          $.post($form.attr('action'), function ($form) {
          console.log(result);
          }, 'json');
          */
      })
      .on('success.form.bv', function (e) {
         $('#edit_user_form_quit').prop('disabled', true);
         $('#edit_user_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow");
      });

   $('.new_user_form').bootstrapValidator({
      // to use feedback icons ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

      .on('success.form.bv', function (e) {
         //console.log("done");
         $('#new_user_form_quit').prop('disabled', true);
         $('#new_user_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow")
      });

   $('.edit_address_form').bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

      .on('success.form.bv', function (e) {
         //console.log("done");
         $('#edit_address_form_quit').prop('disabled', true);
         $('#edit_address_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow")
      });


   $('.new_address_form').bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

      .on('success.form.bv', function (e) {
         //console.log("done");
         $('#new_address_form_quit').prop('disabled', true);
         $('#new_address_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow")
      });


   $('.edit_bank_form').bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

      .on('success.form.bv', function (e) {
         //console.log("done");
         $('#edit_bank_form_quit').prop('disabled', true);
         $('#edit_bank_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow")
      });

   $('.new_bank_form').bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

      .on('success.form.bv', function (e) {
         //console.log("done");
         $('#new_bank_form_quit').prop('disabled', true);
         $('#new_bank_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow")
      });

   $('.edit_tariff_form').bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

      .on('success.form.bv', function (e) {
         //console.log("done");
         $('#edit_tariff_form_quit').prop('disabled', true);
         $('#edit_tariff_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow")
      });

   $('.edit_company_form').bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

      .on('success.form.bv', function (e) {
         //console.log("done");
         $('#edit_company_form_quit').prop('disabled', true);
         $('#edit_company_form_save').prop('disabled', true);
         $('#success_message').slideDown({opacity: "show"}, "slow")
      });

   $('.new_company_form').bootstrapValidator({
      feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
      },
      submitButtons: 'button[type="submit"]',
      fields: {}
   })

       .on('success.form.bv', function (e) {
          //console.log("done");
          $('#new_company_form_quit').prop('disabled', true);
          $('#new_company_form_save').prop('disabled', true);
          $('#success_message').slideDown({opacity: "show"}, "slow")
       });


});