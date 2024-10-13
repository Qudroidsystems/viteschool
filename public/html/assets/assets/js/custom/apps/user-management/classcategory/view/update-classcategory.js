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
                    'update_ca1score': {
                        validators: {
                            notEmpty: {
                                message: 'CA 1 Score is required'
                            }
                        }
                    },
                    'update_ca2score': {
                        validators: {
                            notEmpty: {
                                message: 'CA 2 Score  is required'
                            }
                        }
                    },
                    'update_examscore': {
                        validators: {
                            notEmpty: {
                                message: 'Exam Score  is required'
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

function check() {


    var txtFirsttextValue= 0;
    var txtSecondtextValue = 0;
    var txtExamtextValue = 0;
    var result = 0;
    var total = 0;

        var txtFirsttextValue = document.getElementById('update_ca1score').value;
        var txtSecondtextValue = document.getElementById('update_ca2score').value;
        var txtExamtextValue = document.getElementById('update_examscore').value;

        if(isNaN(txtFirsttextValue) || txtExamtextValue == ""){
            alert("First CA  is not a digit please");
            return false;
        }

        if(isNaN(txtSecondtextValue) ||txtSecondtextValue== "" ){
            alert("Second CA is not a digit please");
            return false;
        }

        if(isNaN(txtExamtextValue) || txtExamtextValue == ""){
            alert("Exam score is not a digit please");
            return false;
        }

        var result = parseFloat(txtFirsttextValue) +
                     parseFloat(txtSecondtextValue) +
                     parseFloat(txtExamtextValue) ;
        total = parseFloat(result);

        if (!isNaN(result)) {

            document.getElementById('update_totalscore').value = total;

            if (total != 100){
                alert("Score should not be more or less than 100%");
                return false;
            }




        }
}

$(function () {

    // ON SELECTING ROW
    $(".sel-house").click(function () {
      //FINDING ELEMENTS OF ROWS AND STORING THEM IN VARIABLES
    var id = $(this).parents("tr").find("#tid").val();
    var a = $.trim($(this).parents("tr").find(".ca1score").text());
    var b = $.trim($(this).parents("tr").find(".ca2score").text());
    var c = $.trim($(this).parents("tr").find(".examscore").text());
 




        // CREATING DATA TO SHOW ON MODEL

        var  content = "";
        content +='<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">'

       + '<div class="fv-row mb-10">'
        +'<input type="hidden"  name="id" value="'+id+'" />'



        +'<div class="fv-row mb-7">'

        +'<label class="required fw-semibold fs-6 mb-2">CA 1 Score</label>'



        +'<input type="text" name="ca1score" id="update_ca1score" value="'+a+'" class="form-control form-control-solid mb-3 mb-lg-0" onkeyup="check()"  required  />'

        +'</div>'




        +' <div class="fv-row mb-7">'

        +'<label class="required fw-semibold fs-6 mb-2">CA 2 Score</label>'



        +'<input type="text" name="ca2score" id="update_ca2score" value="'+b+'" class="form-control form-control-solid mb-3 mb-lg-0" onkeyup="check()" required   />'

        +'</div>'

        +' <div class="fv-row mb-7">'

        +'<label class="required fw-semibold fs-6 mb-2">Exam Score</label>'



        +'<input type="text" name="examscore" id="update_examscore" value="'+c+'" class="form-control form-control-solid mb-3 mb-lg-0"  onkeyup="check()" required   />'

        +'</div>'

        +' <div class="fv-row mb-7">'

        +'<label class="required fw-semibold fs-6 mb-2">Total</label>'



        +'<input type="text" name="totalscore" id="update_totalscore" onkeyup="check()" class="form-control form-control-solid mb-3 mb-lg-0" required   />'

        +'</div>'


                    +'  </div>';

        //CLEARING THE PREFILLED DATA

        $("#content").empty();

        //WRITING THE DATA ON MODEL
        $("#content").append(content);


    });
});
