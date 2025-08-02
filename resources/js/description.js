let bar_options = document.getElementById("profile_bar")
for (let i = 0; i <= bar_options.children.length-1; i ++) {
    bar_options.children[i].addEventListener("click", function() {
        profile_options(this)
    })
}
function profile_options(element) {
    for (let i = 0; i <= bar_options.children.length-1; i ++) {
        if (bar_options.children[i].classList.contains("selected")) {
            bar_options.children[i].classList.remove("selected")
        }
    }
    element.classList.add("selected")
}
