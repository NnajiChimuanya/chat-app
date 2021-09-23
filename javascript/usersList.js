const searchButton = document.querySelector(".user .search button");
const searchInput = document.querySelector(".user .search input");


searchButton.onclick = () => {
    searchInput.toggle("active");
    
    searchButton.toggle("active");
    searchButton.focus();
};