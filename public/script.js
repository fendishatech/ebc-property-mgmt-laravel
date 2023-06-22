const dropDownButton = document.querySelector("#menu-button");
dropDownButton.addEventListener("click", function () {
    const dropDownMenu = document.querySelector("#dropdown-menu");

    if (dropDownMenu.classList.contains("hidden")) {
        dropDownMenu.classList.remove("hidden");
    } else {
        dropDownMenu.classList.add("hidden");
    }
});

// const realTimeDiv = document.querySelector("#real-time");
// realTimeDiv.addEventListener(showTime());

function showTime() {
    let dateTime = new Date();
    let time = dateTime.toLocaleTimeString();
    document.getElementById("real-time").innerHTML = time;
}

setInterval(showTime, 1000);
