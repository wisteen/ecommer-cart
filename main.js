const addBtn = document.querySelector(".addMore");
const addtop = document.querySelector(".addtop");

let count = 0;


addBtn.addEventListener("click", ()=>{
       count += 1;
    addtop.insertAdjacentHTML('beforebegin',`
                            <div class="row mt-5 itemList">
                                        <div class="col-md-6">
                                             <input type="text" placeholder="Product Name" name="ProductName" class="form-control">
                                            
                                        </div>

                                        <div class="col-sm-2">
                                                <select name="size" id="size" class="form-control" >
                                                        <option value="">Qty</option>
                                                        <option value="small">Small</option>
                                                        <option value="medium"> Medium</option>
                                                        <option value="big">Big</option>
                                                     </select>
                                        </div>

                                        <div class="col-sm-2">
                                                <select name="quality" id="quality" class="form-control d-md-flex" >
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
})