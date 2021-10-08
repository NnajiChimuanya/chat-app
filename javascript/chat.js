const form = document.querySelector("form");
const message = form.querySelector("input");
const submit = form.querySelector("button");
const chatbox = document.querySelector(".chat-box");


form.onsubmit = (x) => {
    x.preventDefault();
}


setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/chat.php", true);
    xhr.onreadystatechange = () => {
        if(xhr.readyState === 4 && xhr.status === 200) {
            
            let data = xhr.response;
            chatbox.innerHTML = data;
        
        }
    }
    const formData = new FormData(form);
    xhr.send(formData);
}, 500)


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