const addBtn = document.querySelector(".addMore");
const addtop = document.querySelector(".addtop");

let count = 0;


addBtn.addEventListener("click", ()=>{
       count += 1;
    addtop.insertAdjacentHTML('beforebegin',`
                            <div class="row mt-5 itemList">
                                        <div class="col-md-6">
                                             <input type="text" placeholder="Product Name" name="ProductName[]" class="form-control" value="">
                                            
                                        </div>

                                        <div class="col-sm-2">
                                                <select name="size[]" id="size" class="form-control" value="">
                                                        <option value="">Qty</option>
                                                        <option value="small">Small</option>
                                                        <option value="medium"> Medium</option>
                                                        <option value="big">Big</option>
                                                     </select>
                                        </div>

                                        <div class="col-sm-2">
                                                <select name="quality[]" id="quality" class="form-control d-md-flex" value="">
                                                        <option value="">Size</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="Others">Others</option>
                                                       
                                                     </select>
                                        </div>

                                        <div class="col-sm-2 removecnt">
                                               
                                                <div  class="btn btn-primary removePro" data-name="${count}" >
                                                        <i class="fa fa-trash icon" data-name="${count}"></i>

                                                </div>
                                        </div>
                                </div>
    `)
});

// remove product

document.addEventListener('click', function(e){
        if(e.target && e.target.classList.contains("removePro") || e.target.classList.contains("icon"))
        {
                // console.log( );

                if (e.target.dataset.name = count) {

                        if (e.target.classList.contains("icon")) {
                                console.log(e.target.parentElement.parentElement.parentElement.remove())
                                
                        }

                        if (e.target.classList.contains("removePro")) {
                                console.log(e.target.parentElement.parentElement.remove())
                                
                        }
                        
                }
                


        }
});


// validate inputs from users

// phone numbers
 const foneNo = document.querySelector('[type="number"]');

 foneNo.addEventListener("keyup", function(e){
        const val = e.target.value;
        const label = document.querySelector('[for="phone"]');
        const label2 = document.querySelector('[for="phone"]');
        const bttn = document.querySelector('.bttn');

        // console.log(label2);
        if(
        val.substring().length === 11 &&
        val.substring(0,3) === "080" 
          ){
                label.classList.remove('text-danger');
                label.classList.add('text-success');
                label2.innerHTML = `<i class="fa fa-check"></i>`;
                bttn.disabled = false;
                
        } else if(
        val.substring().length === 11 &&
        val.substring(0,3) === "081"
        ){
                label.classList.remove('text-danger');
                label.classList.add('text-success');
                label2.innerHTML = `<i class="fa fa-check"></i>`;
                bttn.disabled = false;

        } else if(
        val.substring().length === 11 &&
        val.substring(0,3) === "090"
        ){
                label.classList.remove('text-danger');
                label.classList.add('text-success');
                label2.innerHTML = `<i class="fa fa-check"></i>`;
                bttn.disabled = false;

        
        }else if(
        val.substring().length === 11 &&
        val.substring(0,3) === "091"
        ){
                label.classList.remove('text-danger');
                label.classList.add('text-success');
                label2.innerHTML = `<i class="fa fa-check"></i>`;
                bttn.disabled = false;

        
        }else if(
        val.substring().length === 11 &&
        val.substring(0,3) === "070"
        ){
                label.classList.remove('text-danger');
                label.classList.add('text-success');
                label2.innerHTML = `<i class="fa fa-check"></i>`;
                bttn.disabled = false;


        
        }else {
                label.classList.add('text-danger');
                label.classList.remove('text-success');
                label2.innerHTML = `<i class="fa fa-times"></i>`;
                bttn.disabled = true;

        }

        
 });





 const files = document.querySelector(".files");

 files.addEventListener('change', function(evt) {
        const bttn = document.querySelector('.bttn');
        var file = document.getElementById('file').files[0];
    
        if(file && file.size < 5242880) { // 5 MB (this size is in bytes)
            //Submit form   
            alert("Make sure you select not more than 3 files (5mb max) else you would not be able to proceed!");     
            bttn.disabled = false;

        } else {
            //Prevent default and display error
                bttn.disabled = true;

        }
    }, false);



//     document.addEventListener("click",function(event){
//         if(event.target){
//         console.log(event.target);
//         }
//     });



    