const usersList = document.querySelector(".usersList");


setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        if(xhr.readyState == 4 && xhr.status == 200) {
            let data = "xxxxx";
           console.log(data)
        }
    }
    xhr.open();
    xhr.send();
  

}, 500)