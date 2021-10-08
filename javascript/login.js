const form = document.querySelector("form");
const submit = form.querySelector(".button input")

form.onsubmit = (x) => {
    x.preventDefault();
}



submit.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/login.php", true);
    xhr.onreadystatechange = () => {
        if(xhr.readyState === 4 && xhr.status === 200) {
            
            let data = xhr.response;
           
            if(data === "success") {
                console.log(data)
                location.href = "usersList.php";

            } else {
                form.querySelector(".error-text").innerHTML = data;
            }
        
        
        }
    }
   const formData = new FormData(form);
    xhr.send(formData);

}

