/*document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Replace this condition with your authentication logic
  if (username === "example" && password === "password") {
    alert("Login successful!");
    // Redirect to the dashboard or homepage after successful login
    window.location.href = "index.html";
  } else {
    alert("Invalid credentials. Please try again.");
  }
});*/

document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Retrieve user information from local storage
  const users = JSON.parse(localStorage.getItem("users")) || [];
  const user = users.find(
    (u) => u.username === username && u.password === password
  );

  if (user) {
    alert("Login successful!");
    // Redirect to the dashboard or homepage after successful login
    window.location.href = "index.html";
  } else {
    alert("Invalid credentials. Please try again.");
  }
});

