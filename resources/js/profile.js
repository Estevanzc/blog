let profile = document.getElementById("profile")
let dropdown = document.getElementById("profile_dropdown")
let profile_data = profile.getBoundingClientRect()
dropdown.style.width = profile_data.width + "px"
dropdown.style.top = profile_data.top + profile_data.height + 5 + "px"
dropdown.style.left = profile_data.left + "px"
profile.addEventListener("click", function() {
    profile_menu()
})
document.addEventListener("click", function() {
    targer_verifyer(event)
})
function profile_menu() {
    if (profile.classList.contains("opened")) {
        profile.classList.remove("opened")
        dropdown.classList.remove("visible")
        setTimeout(() => {
            dropdown.style.display = "none"
        }, 250);
    } else {
        profile.classList.add("opened")
        dropdown.style.display = "flex"
        dropdown.classList.add("visible")
    }
}
function targer_verifyer(event) {
    if (!(profile.contains(event.target) || dropdown.contains(event.target)) && dropdown.classList.contains("visible")) {
        profile_menu()
    }
}
