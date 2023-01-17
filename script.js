const submitPassword = document.getElementById("submit-password");

submitPassword.addEventListener("click", (event) => {
    event.preventDefault();
    const password = document.getElementById("password").value;
    if (password === "123") {
        window.location.href = "https://www.example.com";
    } else {
        alert("Incorrect password. Please try again.");
    }
});
