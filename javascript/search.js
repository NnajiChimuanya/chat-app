const search = document.getElementById("search");





search.onkeyup = () => {

    let searchValue = search.value;
    if(searchValue != ""){
        search.classList.add("active");
    } else {
        search.classList.remove("active");
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onreadystatechange = () => {
        if(xhr.readyState === 4 && xhr.status === 200) {
            
            let data = xhr.response;
            document.getElementById("usern").innerHTML = data;
           
           
        
        }
    }
    
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send("searchValue=" + searchValue);
  
    // console.log("typing...");
  
}