let category = document.getElementsByClassName("category")//bar_background
let bar_background = document.getElementById("bar_background")
for (let i = 0; i <= category.length-1; i ++) {
    category[i].addEventListener("click", function() {
        filter(this)
    })
}
function filter(element) {
    for (let i = 0; i <= category.length-1; i ++) {
        if (category[i].classList.contains("selected")) {
            category[i].classList.remove("selected")
        }
    }
    element.classList.add("selected")
    let element_data = element.getBoundingClientRect();
    let element_parent_data = element.parentNode.getBoundingClientRect();
    bar_background.style.marginTop = element_data.top - element_parent_data.top + "px"
    bar_background.style.marginLeft = element_data.left - element_parent_data.left + "px"
    bar_background.style.width = element_data.width + "px"
}
filter(category[0])
