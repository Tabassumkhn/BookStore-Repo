document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("loginForm");

  loginForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Get user input
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Hardcoded credentials (replace with your actual authentication logic)
    const storedUsername = "Tabassum khan";
    const storedPassword = "123";

    // Check if the input credentials match the stored credentials
    if (username === storedUsername && password === storedPassword) {
      alert("Login successful!");
      // Redirect user to another page or perform any other actions
    } else {
      alert("Invalid username or password. Please try again.");
    }

    // Clear the form fields
    loginForm.reset();
  });
});
