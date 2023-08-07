document.getElementById("signupForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Replace this with your sign-up logic (e.g., store the user's credentials in a database)

  alert("Account created successfully! You can now login.");
  // Redirect to the login page after successful sign-up
  window.location.href = "login.html";
});
