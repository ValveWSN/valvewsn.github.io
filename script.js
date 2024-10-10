document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll("nav a");
    links.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            alert("This feature is under development. Stay tuned!");
        });
    });
});
