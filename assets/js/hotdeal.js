// Class for Hot Deals
      class hotDeal {

        constructor() {
            this.name = 'fastfood';
          }
        countOrder(count){
            this.count = count;
            // console.log(this.count)
        }
        // countOrder();
        addToOrder(name,image,quantity,price,totalPrice,itemInstrcution){
            let template = `<div class="row">
                <div class="col-2">
                    <button type="button" class="close mt-5 remove-order">
                        <i class="fa fa-close mb-2"></i>
                    </button>
                    <p class="serial-order d-none">`+this.count+`</p>
                </div>
                <div class="col-3 text-center border-bottom">
                    <img src="`+image+`" height="120px" width="120px" class="model-img">
                </div>
                <div class="col-4 border-bottom border-right">
                    <h6 class="mt-3 instruction-h">`+name+`</h6>
                    <h6 class="instruction-p"><small><strong >Quantity: <span class="qty"> `+quantity+`</span></strong></small></h6>
                    <h6 class="instruction-p"><small><strong >Price: $<span class="itemPrice">`+price+`</span></strong></small></h6>
                    <h6 class="instruction-p"><small><strong>Total Price: $<span class="totalPrice">`+totalPrice+`</span></strong></small></h6>
                    <h6 class="instruction-p d-none"><small><strong>Item Instrcution: <span class="item-instruction">`+ itemInstrcution +`</span></strong></small></h6>
                </div>
                <div class="col-3 border-bottom">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h6 class="mt-3 instruction-p"><small><strong>Change Quantity</strong></small></h6>
                        </div>
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col-3 text-center p-0 offset-2">
                            <button class="qty-btn minus">
                                <i class="fa fa-minus mb-1" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-3 text-center p-0 ">
                            <h5 class="half-add-p font-weight-light ">
                                <small class="instruction-p" style="font-size: 16px"><strong class="qty-value">`+quantity+`</strong></small>
                            </h5>
                        </div>
                        <div class="col-3 text-center p-0">
                            <button class="qty-btn plus">
                                <i class="fa fa-plus mb-1" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>`;
            let key = 'addOrder' + this.count;
            $('.itemsForFinalOrder').append(template);
            // adding order to sessionStorage
            sessionStorage.setItem(key,template);
            sessionStorage.setItem('countOrder',this.count);
          }

      }