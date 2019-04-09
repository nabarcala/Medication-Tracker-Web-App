$(document).ready(() => {
  $('#submit').click(() => {
    // Validation checks should go here

    const email = $('#email').val();
    const password = $('#password').val();

    $.ajax({
      type: 'post',
      url: 'php/login.php',
      data: {
        email: email,
        password: password
      },
      success: () => {
        // Will automatically redirect to logged in page once it is created (Not yet implemeneted)
        console.log('Logged in');
      },
      statusCode: {
        // Wrong email or password
        401: () => {
          // Feedback should be given here to let user know that the email or password is wrong
          // Please avoid just using alert, but if you must then so be it
          // Take this log out when done
          console.log('Wrong email or password');
        }
      }
    });
  });
});
