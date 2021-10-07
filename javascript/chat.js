const form = document.querySelector("form");
const message = form.querySelector("input");
const submit = form.querySelector("button");


form.onsubmit = (x) => {
    x.preventDefault();
}


submit.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/chatInsert.php", true);
    xhr.onreadystatechange = () => {
        if(xhr.readyState === 4 && xhr.status === 200) {
            
            let data = xhr.response;
            if(data === "success") {
                form.querySelector(".message").value = "";
                console.log(data)
            } else {
                console.log(data);
            }
        
        
        }
    }
   const formData = new FormData(form);
    xhr.send(formData);
}