document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll("nav ul li a");
    const currentPage = window.location.pathname.split("/").pop() || "index.php";

    function setActiveLink(clickedLink) {
        links.forEach(link => {
            link.classList.remove("active");
            link.removeAttribute("aria-current");
        });
        clickedLink.classList.add("active");
        clickedLink.setAttribute("aria-current", "page");
    }

    links.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            setActiveLink(link);
        }
        link.addEventListener("click", function(e) {
            setActiveLink(this);
        });
    });
});
