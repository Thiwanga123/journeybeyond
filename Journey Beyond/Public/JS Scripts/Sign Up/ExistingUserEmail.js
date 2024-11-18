function showExistingUserEmailAlert() {
    setTimeout(function() {
        alert("Username or email already exists. Please choose a different one.");
        window.location.href = "../User.php";
    }, 1);
}
