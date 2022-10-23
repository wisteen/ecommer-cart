const form = document.querySelector("form");
const usend = form.querySelector('#signup');

form.onsubmit = (e)=>{
    e.preventDefault();

}

usend.addEventListener("click", ()=>{
    const h = new XMLHttpRequest();
    h.open('POST', 'config/signup.php', true);

    h.onload = () =>{
        if (h.readyState === XMLHttpRequest.DONE) {
            if(h.status == 200){
                let data = h.response;
                
                if(data == "success"){
                    location.href = "admin.php";
                } else{
                    
                }


            }
        }
    }

    let formData = new FormData(form);
    h.send(formData);
    
});