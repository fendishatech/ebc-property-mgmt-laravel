const dropDownButton = document.querySelector("#menu-button");
dropDownButton.addEventListener("click", function () {
    const dropDownMenu = document.querySelector("#dropdown-menu");

    if (dropDownMenu.classList.contains("hidden")) {
        dropDownMenu.classList.remove("hidden");
    } else {
        dropDownMenu.classList.add("hidden");
    }
});
