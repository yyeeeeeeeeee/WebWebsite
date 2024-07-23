function validateForm() {
  const form = document.getElementById('contactForm');
  const nameInput = document.getElementById('username');
  const emailInput = document.getElementById('email');
  const phoneInput = document.getElementById('contact');
  const enquiryInput = document.getElementById('enquiry');
  const messageInput = document.getElementById('desc');

  const nameError = document.getElementById('nameError');
  const emailError = document.getElementById('emailError');
  const contactError = document.getElementById('contactError');
  const enquiryError = document.getElementById('enquiryError');
  const messageError = document.getElementById('messageError');

  nameError.innerHTML = '';
  emailError.innerHTML = '';
  contactError.innerHTML = '';
  messageError.innerHTML = '';

  let isValid = true;

  if (nameInput.value.trim() === '') {
    nameError.innerHTML = 'Please enter your name';
    isValid = false;
  }

  if (emailInput.value.trim() === '') {
    emailError.innerHTML = 'Please enter your email address';
    isValid = false;
  } else if (!isValidEmail(emailInput.value.trim())) {
    emailError.innerHTML = 'Please enter a valid email address';
    isValid = false;
  }

  if (phoneInput.value.trim() === '') {
    contactError.innerHTML = 'Please enter your phone number';
    isValid = false;
  } else if (!isValidPhone(phoneInput.value.trim())) {
    contactError.innerHTML = 'Please enter a valid Malaysia phone number';
    isValid = false;
  }

  if (!enquiryInput.querySelector('option:checked')) {
    enquiryError.innerHTML = 'Please select at least one type of enquiry';
    isValid = false;
  }

  if (messageInput.value.trim() === '') {
    messageError.innerHTML = 'Please enter your message';
    isValid = false;
  }

  return isValid;
}

function isValidPhone(contact) {
  const phoneRegex = /^(\+?6?01)[02-46-9][0-9]{7,8}$/;
  return phoneRegex.test(contact);
}

function isValidEmail(email) {
  const emailRegex = /^[\w_\.]+@([\w]+\.)+[\w]{2,4}$/;
  return emailRegex.test(email);
}
