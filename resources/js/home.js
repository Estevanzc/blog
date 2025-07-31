let filter = document.getElementsByClassName("filter")//bar_background
let filter_background = document.getElementById("filter_background")
for (let i = 0; i <= filter.length-1; i ++) {
    filter[i].addEventListener("click", function() {
        filter_item(this)
    })
}
function filter_item(element) {
    for (let i = 0; i <= filter.length-1; i ++) {
        if (filter[i].classList.contains("selected")) {
            filter[i].classList.remove("selected")
        }
    }
    element.classList.add("selected")
    let element_data = element.getBoundingClientRect();
    let element_parent_data = element.parentNode.getBoundingClientRect();
    filter_background.style.marginTop = element_data.top - element_parent_data.top + "px"
    filter_background.style.marginLeft = element_data.left - element_parent_data.left + "px"
    filter_background.style.width = element_data.width + "px"
}
filter_item(filter[0])
