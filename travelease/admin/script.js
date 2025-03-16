function goToHome() {
    window.location.href = "dashboard.html"; // Change to the correct home page URL
}

function showSignInMenu() {
    var signInMenu = document.getElementById("signInMenu");
    if (signInMenu.style.display === "block") {
        signInMenu.style.display = "none";
    } else {
        signInMenu.style.display = "block";
    }
}

function showUserMenu() {
    var userMenu = document.getElementById("userMenu");
    if (userMenu.style.display === "block") {
        userMenu.style.display = "none";
    } else {
        userMenu.style.display = "block";
    }
}

function closeMenu() {
    document.getElementById("signInMenu").style.display = "none";
}

// Close the sign-in menu when clicking outside
document.addEventListener("click", function(event) {
    var signInMenu = document.getElementById("signInMenu");
    var signInButton = document.getElementById("signInButton");

    if (event.target !== signInMenu && event.target !== signInButton && !signInMenu.contains(event.target)) {
        signInMenu.style.display = "none";
    }
});

// Simulates SIGN OUT function for UI testing only
function signOut() {
    window.location.href = "landing_page.html";
}

function showNotifMenu() {
    var notifMenu = document.getElementById("notifMenu");
    if (notifMenu.style.display === "block") {
        notifMenu.style.display = "none";
    } else {
        notifMenu.style.display = "block";
    }
}