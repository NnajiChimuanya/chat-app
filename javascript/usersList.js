const usersList = document.querySelector(".user .usersList");


setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/usersList.php", true);
    xhr.onreadystatechange = () => {
        if(xhr.readyState === 4 && xhr.status === 200) {
            
            let data = xhr.response;

            if(!search.classList.contains('active')) {
                document.getElementById("usern").innerHTML = data;
            }
            
        
        }
    }
   
    xhr.send();
  

}, 5000)