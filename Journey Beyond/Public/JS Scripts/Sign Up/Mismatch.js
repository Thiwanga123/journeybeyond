//psasword mismatching message
function showPasswordMismatchAlert() {
    setTimeout(function() {
        alert("Password mismatch. Please check your password.");
        window.location.href = "./job_finder_signup.php";
    }, 1);
}