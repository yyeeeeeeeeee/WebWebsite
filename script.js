
const formOpenBtn = document.querySelector("#form-open");
const home = document.querySelector(".home");
const formContainer = document.querySelector(".form_container");
const formCloseBtn = document.querySelector(".form_close");
const signupBtn = document.querySelector("#signup");
const loginBtn = document.querySelector("#login");
const pwShowHide = document.querySelectorAll(".pw_hide");

// control the form to show or hide
formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

// control the password icon type
pwShowHide.forEach( (icon) =>{
    icon.addEventListener("click", () => {
        let getPwInput = icon.parentElement.querySelector("input");
        if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("fa-eye-slash", "fa-eye");
        } else {
            getPwInput.type = "password";
            icon.classList.replace("fa-eye","fa-eye-slash");
        }
    });
});

// control to access the signup page from login page by clicking the link
signupBtn.addEventListener("click", (event) => {
    event.preventDefault();
    formContainer.classList.add("active");
});

// control to access the login page from signup page by clicking the link
loginBtn.addEventListener("click", (event) => {
    event.preventDefault();
    formContainer.classList.remove("active");
});


const Lform = document.getElementById('loginForm');
const loginFormBtn = document.getElementById('loginFormSubmit');

const Sform = document.getElementById('signupForm');
const signupFormBtn = document.getElementById('signupFormSubmit');

// Add event listeners to form buttons
loginFormBtn.addEventListener('click', validateAccLoginForm);
signupFormBtn.addEventListener('click', validateAccSignupForm);

// validate the login form attributes
function validateAccLoginForm(event) { 
  
    const emailAccInput = document.getElementById('emailLogin');
    const pswAccInput = document.getElementById('passwordLogin');

    const emailErr = document.getElementById('emailErrLogin');
    const pswErr = document.getElementById('pswErrLogin');
  
    emailErr.innerHTML = '';
    pswErr.innerHTML = '';
  
    let isValid = true;
  
    if (emailAccInput.value.trim() === '') {
      console.log("Please enter your email address");
      emailErr.innerHTML = 'Please enter your email address';
      isValid = false;
    } else if (!isValidEmail(emailAccInput.value.trim())) {
      emailErr.innerHTML = 'Please enter a valid email address';
      isValid = false;
    }

    if (pswAccInput.value.trim() === '') {
        console.log("Please enter your password");
        pswErr.innerHTML = 'Please enter your password';
        isValid = false;
      } else if (!isValidPsw(pswAccInput.value.trim())) {
        pswErr.innerHTML = 'Wrong password entered';
        isValid = false;
      }
  
      if (isValid === true) {
        window.onload = handleFormSuccess();
        Lform.onsubmit();
      } else {
        event.preventDefault();
      }
  };

  // validate the signup from attributes
  function validateAccSignupForm(event) {

    const emailAccInput = document.getElementById('emailSignup');
    const pswAccInput = document.getElementById('passwordSignup');
    const pswAccReInput = document.getElementById('repasswordSignup');

    const emailErr = document.getElementById('emailErrSignup');
    const pswErr = document.getElementById('pswErrSignup');
    const repswErr = document.getElementById('repswErrSignup');
  
    emailErr.innerHTML = '';
    pswErr.innerHTML = '';
    repswErr.innerHTML = '';
  
    let isValid = true;
  
    if (emailAccInput.value.trim() === '') {
      emailErr.innerHTML = 'Please enter your email address';
      isValid = false;
    } else if (!isValidEmail(emailAccInput.value.trim())) {
      emailErr.innerHTML = 'Please enter a valid email address';
      isValid = false;
    }

    if (pswAccInput.value.trim() === '' || pswAccReInput.value.trim() === '') {
        pswErr.innerHTML = 'Please enter your password';
        repswErr.innerHTML = 'Please enter your password';
        isValid = false;
      } else if (!isValidPsw(pswAccInput.value.trim()) || !isValidPsw(pswAccReInput.value.trim())) {
        pswErr.innerHTML = 'Please enter a valid password (at least 8 characters with at least 1 uppercase, 1 lowercase, 1 special characters, and no whitespace).';
        repswErr.innerHTML = 'Please enter a valid password (at least 8 characters with at least 1 uppercase, 1 lowercase, 1 special characters, and no whitespace).';
        isValid = false;
      }
    else if (pswAccInput.value.trim() != pswAccReInput.value.trim()) {
        repswErr.innerHTML = 'Your password is not matched.Please re-enter your password';
        isValid = false;
      }
      
      if (isValid === true) {
        Sform.onsubmit();
      } else {
        event.preventDefault();
      }
  };
  
  // check the validity of email
  function isValidEmail(email) {
    const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    return emailRegex.test(email);
  };

  // check the validity of password
  function isValidPsw(password) {
    const pswRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W])(?!.*\s).{8,}$/;
    return pswRegex.test(password);
  };

const iconShowHide = document.querySelector('.user-form-group .userAcc');

// Login
function handleFormSuccess() {
  // Hide the button
  formOpenBtn.classList.add("hidden");

  // Show the success icon
  iconShowHide.classList.add("active");

  // Set a session or local storage variable to track login status
  localStorage.setItem('isLoggedIn', 'true');

  // Simulate form submission
  setTimeout(function() {
    console.log("Login successfully!");}, 1000);
}

  // Add event listener to logout button
const logoutIconBtn = document.querySelector('.logoutIcon');

// Logout
function handleLogout() {
  // Hide the button
  formOpenBtn.classList.remove("hidden");

  // Show the success icon
  iconShowHide.classList.remove("active");

  // Set a session or local storage variable to track login status
  localStorage.setItem('isLoggedOut', 'true');

  // Simulate form submission
  setTimeout(function() {
    console.log("Logout successfully!")
    window.location.href = "/test/login/logout.php";}, 1000);
}

// Check if the user is logged in on page load
document.addEventListener('DOMContentLoaded', function() {
  var isLoggedIn = localStorage.getItem('isLoggedIn');
  if (isLoggedIn === 'true') {
    // Hide the login button
    formOpenBtn.classList.add("hidden");

    // Show the user icon and dropdown
    iconShowHide.classList.add("active");
  }

  var isLoggedOut = localStorage.getItem('isLoggedOut');
  if (isLoggedOut === 'true') {
      // Hide the button
      formOpenBtn.classList.remove("hidden");

      // Show the success icon
      iconShowHide.classList.remove("active");
  }
});

// Add event listener to logout icon
logoutIconBtn.addEventListener('click', function() {
  handleLogout();
});


