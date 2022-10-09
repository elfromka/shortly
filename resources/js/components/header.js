const toggleMobileNavbar = () => {
    const menuList = document.getElementById("menuList");
    const openIcon = document.getElementById("openIcon");
    const closeIcon = document.getElementById("closeIcon");

    if (menuList) menuList.classList.toggle("hidden");
    if (openIcon) openIcon.classList.toggle("hidden");
    if (closeIcon) closeIcon.classList.toggle("hidden");
};

const elementsStartUp = () => {
    const menuButton = document.getElementById("menuButton");

    if (menuButton) menuButton.addEventListener("click", toggleMobileNavbar);
};

elementsStartUp();
