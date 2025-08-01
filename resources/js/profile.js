let profile = document.getElementById("profile")
let dropdown = document.getElementById("profile_dropdown")
let logo = document.getElementById("logo").children[0]
let dark_mode_button = document.getElementsByClassName("profile_option")[1]
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
dark_mode_button.addEventListener("click", function() {
    color_mode(this)
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
async function color_mode(element) {
    let dark_mode = element.dataset.dark_mode ? (element.dataset.dark_mode == 1 ? 1 : 0) : 0
    element.dataset.dark_mode = dark_mode == 1 ? 0 : 1
    let response = fetch(`http://localhost:8000/user/dark/${dark_mode == 1 ? 0 : 1}`)
    document.getElementsByTagName("body")[0].className = dark_mode == 1 ? "" : "dark"
    let logo_src = logo.getAttribute("src");
    let new_src = logo_src.replace(`${dark_mode == 1 ? "2" : "1"}.svg`, `${dark_mode == 1 ? "1" : "2"}.svg`);
    logo.setAttribute("src", new_src);
    dark_mode_button.innerHTML = dark_mode == 0 ? `<i class="fa-solid fa-sun"></i><p>White Mode</p>` : `<i class="fa-solid fa-moon"></i><p>Dark Mode</p>`
}
