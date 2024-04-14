// Function to toggle the mobile menu
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});

// Function to toggle the profile dropdown menu in desktop view
document.getElementById('profileBtn').addEventListener('click', function() {
    document.getElementById('profileDropdownContent').classList.toggle('hidden');
});

// Function to toggle the profile dropdown menu in mobile view
document.getElementById('profileBtnMobile').addEventListener('click', function() {
    document.getElementById('profileDropdownContentMobile').classList.toggle('hidden');
});
