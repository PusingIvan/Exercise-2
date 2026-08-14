window.onload = function() {
    alert("Welcome to ANONYMOUS GRP.!");
};

const profiles = document.querySelectorAll(".profile");

profiles.forEach(function(profile) {
    profile.addEventListener("click", function() {
        this.classList.toggle("selected");
    });
});