 $(function () {
  const Form = document.getElementById("Form");
  const FullName = document.getElementById("FullName");
  const PhoneNumber = document.getElementById("PhoneNumber");
  const Email = document.getElementById("Email");
  const Textarea = document.getElementById("Textarea");
// if (Form.addEventListener) {
//   Form.addEventListener("submit", (e) => {
//     e.preventDefault();
//     checkInputs();
//   });
// }else{
//   Form.attchEvent("onsubmit", (e) => {
//     e.preventDefault();
//     checkInputs();
//   });

 
  

  $( "form" ).on( "submit", function( event ) {
    event.preventDefault();
    checkInputs();
  });
  
  
  function checkInputs() {
    const FullNameValue = FullName.value.trim();
    const PhoneNumberValue = PhoneNumber.value.trim();
    const EmailValue = Email.value.trim();
    const TextareaValue = Textarea.value.trim();

    if (FullNameValue === "") {
      setErrorFor(FullName, "username can not be blank");
    } else {
      setSuccessFor(FullName);
    }

    if (EmailValue === "") {
      setErrorFor(Email, "Email can not be blank");
    } else if (!isEmail(EmailValue)) {
      setErrorFor(Email, "email is not valid");
    } else {
      setSuccessFor(Email);
    }

    if (PhoneNumberValue === "") {
      setErrorFor(PhoneNumber, "Phone number can not be blank");
    } else if (!isPhoneNum(PhoneNumberValue)) {
      setErrorFor(PhoneNumber, "Phone number is not valid");
    } else {
      setSuccessFor(PhoneNumber);
    }

    if (TextareaValue === "") {
      setErrorFor(Textarea, "Text area can not be blank");
    } else {
      setSuccessFor(Textarea);
    }
  }

  function setErrorFor(input, message) {
    const groupControl = input.parentElement;
    const small = groupControl.querySelector("small");
    small.innerText = message;
    groupControl.classList.remove("success");

    groupControl.classList.add("error");
  }

  function setSuccessFor(input) {
    const groupControl = input.parentElement;
    groupControl.classList.remove("error");
    
    groupControl.classList.add("success");
  }

  function isEmail(Email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(Email);
  }
  function isPhoneNum(num) {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(num);
  }
});
