// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $.validator.addMethod("nameRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z'-]+$/i.test(value);
    }, "Name must contain only alphabetic characters.");

  $.validator.addMethod("stateRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
    }, "State must contain only two characters.");

  $.validator.addMethod("cityRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
    }, "City must contain only two characters.");

  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      first: {
        required: true,
        nameRegex: true,
      },
      last: {
        required: true,
        nameRegex: true,
      },
      email: {
        required: true,
        email: true,
      },
      zip: {
        required: true,
        maxlength: 10,
        digits: true,
      },
      city: {
        required: true,
        cityRegex: true,
      },
      state: {
        required: true,
        stateRegex: true,
        maxlength: 2,
      },
      password: {
        required: true,
        minlength: 5,
      }
    },
    // Specify validation error messages
    messages: {
      // first: {
      //   required: "Please enter your first name",
      //   // nameRegex: "Names may only contain alphabetic characters."
      // },
      // last: {
      //   required: "Please enter your last name",
      //   // nameRegex: "Names may only contain alphabetic characters."
      // },
      // zip: "Please enter a valid 5-digit zip code",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});