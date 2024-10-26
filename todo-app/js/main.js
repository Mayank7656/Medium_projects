document.addEventListener('DOMContentLoaded', function() {

    var signupForm = document.querySelector('form[action="php/signup.php"]');
    
    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            var username = signupForm.querySelector('input[name="username"]').value.trim();
            var email = signupForm.querySelector('input[name="email"]').value.trim();
            var password = signupForm.querySelector('input[name="password"]').value.trim();

            if (!username || !email || !password) {
                alert('All fields are required.');
                event.preventDefault();
            }
        });
    }

    var signinForm = document.querySelector('form[action="php/signin.php"]');
    if (signinForm) {
        signinForm.addEventListener('submit', function(event) {
            var email = signinForm.querySelector('input[name="email"]').value.trim();
            var password = signinForm.querySelector('input[name="password"]').value.trim();

            if (!email || !password) {
                alert('Email and password are required.');
                event.preventDefault();
            }
        });
    }

    var taskForm = document.querySelector('form[action="php/add_task.php"]');
    if (taskForm) {
        taskForm.addEventListener('submit', function(event) {
            var task = taskForm.querySelector('input[name="task"]').value.trim();

            if (!task) {
                alert('Task description cannot be empty.');
                event.preventDefault();
            }
        });
    }
});
