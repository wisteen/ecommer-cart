const form = document.querySelector("form");
const usend = form.querySelector('#signin');

form.onsubmit = (e)=>{
    e.preventDefault();

}

usend.addEventListener("click", ()=>{
    const h = new XMLHttpRequest();
    h.open('POST', 'config/login.php', true);

    h.onload = () =>{
        if (h.readyState === XMLHttpRequest.DONE) {
            if(h.status == 200){
                let data = h.response;
                
                if(data == "success"){
                    location.href = "admin.php";
                } else{
                    const altt = document.querySelector(".altt");

                    altt.innerHTML = data;
                    let atype = "Warning!";
                    document.querySelector(".aaa").innerHTML=atype;
                    document.querySelector(".js-alt").setAttribute("class", "alert alert-primary alert-dismissible js-alt");
                }


            }
        }
    }

    let formData = new FormData(form);
    h.send(formData);
    
});