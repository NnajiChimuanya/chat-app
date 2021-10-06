const form = document.querySelector("form");
const message = form.querySelector("input");
const submit = form.querySelector("button");


submit.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/chatInsert.php", true);
    xhr.onreadystatechange = () => {
        if(xhr.readyState === 4 && xhr.status === 200) {
            
            let data = xhr.response;
            console.log(data);
        
        
        }
    }
   
    xhr.send(form);
}