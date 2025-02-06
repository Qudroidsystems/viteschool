"use strict";

// Class definition
var KTUsersUpdatePermissions = function () {
    // Shared variables
    const element = document.getElementById('kt_modal_update_role');
    const form = element.querySelector('#kt_modal_update_role_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initUpdatePermissions = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'update_schoolclass': {
                        validators: {
                            notEmpty: {
                                message: 'School Class is required'
                            }
                        }
                    },
                    'update_arm': {
                        validators: {
                            notEmpty: {
                                message: 'Class Arm  is required'
                            }
                        }
                    },
                    'update_classcategoryid': {
                        validators: {
                            notEmpty: {
                                message: 'Class Category  is required'
                            }
                        }
                    },
                    'update_termid': {
                        validators: {
                            notEmpty: {
                                message: 'Term is required'
                            }
                        }
                    },
                    'update_sessionid': {
                        validators: {
                            notEmpty: {
                                message: 'Session is required'
                            }
                        }
                    },

                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Close button handler
        const closeButton = element.querySelector('[data-kt-roles-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to close?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, close it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                    removeitems();
                }
            });
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-roles-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-roles-modal-action="submit"]');
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            // Show popup confirmation
                            Swal.fire({
                                text: "Form has been successfully submitted!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });

                            form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });
    }

    // Select all handler
    const handleSelectAll = () => {
        // Define variables
        const selectAll = form.querySelector('#kt_roles_select_all');
        const allCheckboxes = form.querySelectorAll('[type="checkbox"]');

        // Handle check state
        selectAll.addEventListener('change', e => {

            // Apply check state to all checkboxes
            allCheckboxes.forEach(c => {
                c.checked = e.target.checked;
            });
        });
    }

    return {
        // Public functions
        init: function () {
            initUpdatePermissions();
            handleSelectAll();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersUpdatePermissions.init();
});


$(function () {

    // ON SELECTING ROW
    $(".sel-house").click(function () {
      //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
    var id = $(this).parents("tr").find("#tid").val();
    var a = $.trim($(this).parents("tr").find(".schoolclass").text());
    var arm = $.trim($(this).parents("tr").find(".arm").text());
    var classcategory = $.trim($(this).parents("tr").find(".classcategory").text());



    var arm_options_v = $.map($('#armid option'), e=>$(e).val());
    var arm_values_v = $.map($('#armid option'), e=>$(e).text());
   populate(update_armid,arm_options_v,arm_values_v);

     var classcategory_options_v = $.map($('#classcategoryid option'), e=>$(e).val());
     var classcategory_values_v = $.map($('#classcategoryid option'), e=>$(e).text());
    populate(update_classcategoryid,classcategory_options_v,classcategory_values_v);




     function populate(selectid,valuearr,optionarr,){;
            for (var i = 0, ii = optionarr.length; i<ii; i++) {
                let optn = optionarr[i];
                let el = document.createElement("option");
                el.textContent = optn;
                el.value = valuearr[i];
                selectid.appendChild(el);
            }
        }



        $("#kt_modal_update_role").on('hide.bs.modal', function(){
            $("#update_armid").find("option").remove().end().append('');
            $("#update_classcategoryid").find("option").remove().end().append('');

          });

        // CREATING DATA TO SHOW ON MODEL

        var  content = "";
        content +='<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">'

       + '<div class="fv-row mb-10">'
        +'<input type="hidden"  name="id" value="'+id+'" />'



        +'<div class="fv-row mb-7">'

        +'<label class="required fw-semibold fs-6 mb-2">Class Name</label>'



        +'<input type="text" name="schoolclass" id="update_schoolclass" value="'+a+'" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="House Name ..." required  />'

        +'</div>'





                    +'  </div>';
        var prev_arm = "";
        prev_arm +='Previous Selection: <input type="text" value="'+arm+'" class="form-control form-control-solid mb-3 mb-lg-0" readonly/>';
        var prev_classcategory = "";
        prev_classcategory +='Previous Selection: <input type="text" value="'+classcategory+'" class="form-control form-control-solid mb-3 mb-lg-0" readonly/>';


        //CLEARING THE PREFILLED DATA

        $("#content").empty();

        //WRITING THE DATA ON MODEL
        $("#content").append(content);
        $("#prev_arm").append(prev_arm);
        $("#prev_classcategory").append(prev_classcategory);



    });
});
