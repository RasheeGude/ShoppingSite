/*document.getElementById("signupForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Replace this with your sign-up logic (e.g., store the user's credentials in a database)

  alert("Account created successfully! You can now login.");
  // Redirect to the login page after successful sign-up
  window.location.href = "login.html";
});*/

document.getElementById("signupForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Retrieve existing users from local storage or initialize an empty array
  const users = JSON.parse(localStorage.getItem("users")) || [];

  // Check if the username is already taken
  const isUsernameTaken = users.some((user) => user.username === username);
  if (isUsernameTaken) {
    alert("Username is already taken. Please choose a different one.");
  } else {
    // Add the new user to the array
    users.push({ username, password });

    // Store the updated array back in local storage
    localStorage.setItem("users", JSON.stringify(users));

    alert("Account created successfully! You can now login.");
    // Redirect to the login page after successful sign-up
    window.location.href = "login.html";
  }
});

