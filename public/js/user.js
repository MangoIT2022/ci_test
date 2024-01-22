$(document).ready(function () {
    $("#addUserForm").validate({
        rules: {
            name: {
                required: true,
                alphanumeric: true // Add custom rule for alphanumeric validation
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            confirmPassword: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            }
        },
        messages: {
            name: {
                required: "Please enter a name",
                alphanumeric: "Username must contain only letters and numbers"
            },
            email: {
                required: "Please enter a valid email address",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            confirmPassword: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
                equalTo: "Please enter the same password as above"
            },
        }
    });
    
    $("#editUserForm").validate({
        rules: {
            name: {
                required: true,
                alphanumeric: true // Add custom rule for alphanumeric validation
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: "Please enter a name",
                alphanumeric: "Username must contain only letters and numbers"
            },
            email: {
                required: "Please enter a valid email address",
                email: "Please enter a valid email address"
            }
        }
    });
});
