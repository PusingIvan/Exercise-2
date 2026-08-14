// =========================
// CURRENT YEAR
// =========================

document.getElementById("year").textContent =
    new Date().getFullYear();


// =========================
// SHOW / HIDE PROFILE
// =========================

function toggleProfile(button) {

    // Get the profile card containing the clicked button
    const profile = button.closest(".profile");


    // Add or remove the showDetails class
    profile.classList.toggle("showDetails");


    // Change button text
    if (profile.classList.contains("showDetails")) {

        button.textContent = "Hide Profile";

    } else {

        button.textContent = "View Profile";

    }

}