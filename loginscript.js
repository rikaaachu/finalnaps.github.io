const passwordAccess = (loginPass, loginEye) => {
    const input = document.getElementById(loginPass),
          iconEye = document.getElementById(loginEye);
  
    iconEye.addEventListener('click', () => {
      // Toggle the input type between password and text
      input.type = input.type === 'password' ? 'text' : 'password';
  
      // Toggle the eye icons
      iconEye.classList.toggle('ri-eye-fill');
      iconEye.classList.toggle('ri-eye-off-fill');
    });
  };
  
  passwordAccess('password', 'loginPassword');

/*==========SHOW HIDE PASSWORD CREATE ACCOUNT===========*/
const passwordRegister =  (loginPass, loginEye) =>{
    const input = document.getElementById(loginPass),
        iconEye = document.getElementById(loginEye)
    iconEye.addEventListener('click', () =>{
        // Change password to text
        input.type === 'password' ? input.type = 'text'
                                  : input.type = 'password'
        // Icon change 
        iconEye.classList.toggle('ri-eye-fill')
        iconEye.classList.toggle('ri-eye-off-fill')
    })
}
passwordRegister('passwordCreate','loginPasswordCreate')

/*==========SHOW HIDE LOGIN &  CREATE ACCOUNT===========*/
const loginAccessRegister = document.getElementById('loginAccessRegister'),
      buttonRegister = document.getElementById('loginButtonRegister'), // Capital 'R' in buttonRegister
      buttonAccess = document.getElementById('loginButtonAccess');

buttonRegister.addEventListener('click', () => {
    loginAccessRegister.classList.add('active');
});

buttonAccess.addEventListener('click', () => {
    loginAccessRegister.classList.remove('active');
});




document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Simulate successful login (replace with your actual login logic)
    const loginSuccessful = true; // This should reflect the real login check

    if (loginSuccessful) {
        sessionStorage.setItem('loggedin', true); // Set logged-in status
        window.location.href = "index.html"; // Redirect to the home page
    } else {
        alert("Login failed. Please try again.");
    }
});