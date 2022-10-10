const copyButtons = document.querySelectorAll(".copy-button");

const copyToClipboard = async (urlElement) => {
    const copyURL = urlElement.previousSibling.previousSibling;

    copyURL.select();
    copyURL.setSelectionRange(0, 99999);
    navigator.clipboard
        .writeText(copyURL.value)
        .then(() => {
            // copied
        })
        .catch(() => {
            console.error("Copy to clipboard doesn't work.");
        });
};

copyButtons.forEach((urlElement) => {
    urlElement.addEventListener("click", copyToClipboard(urlElement));
});
