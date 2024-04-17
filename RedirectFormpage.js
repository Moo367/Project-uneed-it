
    function submitForm() {
    var form = document.getElementById("reviewForm");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", form.action, true);
    xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    // Handle success
    // For example, display a success message or redirect after a delay
    alert("Review submitted successfully!");
    setTimeout(function () {
    window.location.href = "index.php"; // Redirect to index.php after 5 seconds
}, 5000); // 5000 milliseconds = 5 seconds
} else if (xhr.readyState === XMLHttpRequest.DONE) {
    // Handle error
    alert("An error occurred while submitting the review.");
}
};
    xhr.send(formData);
}