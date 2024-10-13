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
                    'title': {
                        validators: {
                            notEmpty: {
                                message: 'Bill Title  is required'
                            }
                        }
                    },
                    'bill_amount': {
                        validators: {
                            notEmpty: {
                                message: 'Bill Amount  is required'
                            }
                        }
                    },
                    'desciption': {
                        validators: {
                            notEmpty: {
                                message: 'Description is required'
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
    $(".sel-bill").click(function () {
      //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES

        var id = $(this).parents("tr").find("#tid").val();
        var a = $.trim($(this).parents("tr").find(".title").text());
        var b = $.trim($(this).parents("tr").find(".bill_amount").text());
        var c = $.trim($(this).parents("tr").find(".description").text());

        function removeCharacter(position) {
           let originalString = b;
           let newString = originalString.substr(0, position - 1)+
                originalString.substr(
                    position,
                    originalString.length
                );


           //return newString;
           let originalString_r = newString
           let newString_r = Array.from(originalString_r)
                                     .filter(char => char !== ',')
                                     .join('');
                      return newString_r
        }

       let new_b = removeCharacter(1);

        // CREATING DATA TO SHOW ON MODEL

        var  content = "";
        content +='<div class="fv-row mb-10">'
        +'<input type="hidden"  name="id" value="'+id+'" />'
        +'<label class="fs-5 fw-bold form-label mb-2">'
        +'<span class="required">Title name</span>'
        +'</label>'
          +'<input class="form-control form-control-solid" placeholder="Bill Title" name="title" id="title" value="'+a+'" />'
          +' </div>'



          +'<div class="fv-row mb-7">'
        +'<label class="required fw-semibold fs-6 mb-2">School Fess (₦)</label>'
          +'<input class="form-control form-control-solid" placeholder="Bill Amount" name="bill_amount" id="bill_amount" value="'+new_b+'" />'
          +' </div>'


          +'<div class="fv-row mb-7">'

          +'<label class="required fw-semibold fs-6 mb-2">Remark</label>'

          +'<input type="text" name="description" id="description" value="'+c+'" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Description ..." required  />'

          +'</div>'
           +'</div>';
        //CLEARING THE PREFILLED DATA
        $("#content").empty();

        //WRITING THE DATA ON MODEL
        $("#content").append(content);


    });
});
