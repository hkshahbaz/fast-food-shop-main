// each order (html) displaying in modal when page reloads retreving from session
let totalOrder = sessionStorage.getItem('countOrder');
    for(var i=1; i <= totalOrder ; i++){

      let addOrder = sessionStorage.getItem('addOrder'+i);
      if(addOrder != ""){
        $('.itemsForFinalOrder').append(addOrder);
      }
    }

// total amount in bottom-left or sidebar displaying when page reloads retreving from session
var count = sessionStorage.getItem('countOrder');
      $('.add-to-order').click(function(){
        // hotDeal = new hotDeal(); // object of class hotDeal
        if(count == null){
          count = 0;
          count ++;
          hotDeal.countOrder(count)
        }
        else{
          count++;
          hotDeal.countOrder(count)
        }
      });
// total-numbers of orders displaying in modal when page reloads retreving from session
let sessionTotalOrder = sessionStorage.getItem('totalOrder');
if(sessionTotalOrder != null){
  $('.items-to-be-order').html(sessionTotalOrder); // update No. of Items/Dishes: from session
}
// quanty and total-price of each order displaying in modal when page reloads retreving from session
for(var i = 0; i<count; i++){
  let value =  sessionStorage.getItem('value'+i) // dynamic session value geting modal qty
  let qty =    sessionStorage.getItem('qty'+i)  // dynamic session value geting  modal qty

  let totalPrice = sessionStorage.getItem('totalPrice'+i); 
  let qtyvalueElement = $('.qty-value');
  let qtyElement = $('.qty');
  let totalPriceElement = $('.totalPrice');
  let itemPrice = $('.itemPrice');
  $(itemPrice[i]).attr('id','itemPrice'+i);
  if(value != null && totalPrice != null){
    $(qtyvalueElement[i]).attr('id','value'+i).html(value);
    $(qtyElement[i]).attr('id','qty'+i).html(qty);
    $(totalPriceElement[i]).attr('id','totalPrice'+i).html(totalPrice);
  }
  else{
    $(qtyvalueElement[i]).attr('id','value'+i);
    $(qtyElement[i]).attr('id','qty'+i);
    $(totalPriceElement[i]).attr('id','totalPrice'+i);
  }
  
  let minusBtn = $('.minus');
  let plusBtn = $('.plus');
  $(minusBtn[i]).attr('id','minus'+i);
  $(plusBtn[i]).attr('id','plus'+i);

  $('#minus'+i).click(function(){
    let numValueId = $(this).attr('id').slice(-1);
    let currentValue = $('#value'+numValueId).text();
    let qtyCurrentValue = $('#qty'+numValueId).text();
    currentValue--;
    qtyCurrentValue--;
    sessionStorage.setItem('value'+numValueId,currentValue) // dynamic session value geting modal qty
    sessionStorage.setItem('qty'+numValueId,qtyCurrentValue)  // dynamic session value geting  modal qty

    if(currentValue < 2){
      $(this).attr('disabled','');
      }
    $('#value'+numValueId).html(currentValue); // minus quanty value which is on right side
    $('#qty'+numValueId).html(qtyCurrentValue); // minus quanty value which is on middle
    let itemPrice = parseFloat($('#itemPrice'+numValueId).html()); // item price of each item
    totalPrice = itemPrice * currentValue;    // pendinggggggggg code**********
    $('#totalPrice'+numValueId).html(totalPrice);
    sessionStorage.setItem('totalPrice'+numValueId,totalPrice)

    // update total-amount when minus btn click in modal
    totalAmount = parseFloat($('.total-amount').html());
    totalAmount = totalAmount - itemPrice; // total-amount
    $('.total-amount').html(totalAmount + '.00');
    // updating total amount in sessionStorage
    sessionStorage.setItem('totalAmount',totalAmount);

  })
  $('#plus'+i).click(function(){
    let numValueId = $(this).attr('id').slice(-1);
    let currentValue = $('#value'+numValueId).text();
    let qtyCurrentValue = $('#qty'+numValueId).text();
    currentValue++;
    qtyCurrentValue++;
    sessionStorage.setItem('value'+numValueId,currentValue) // dynamic session value geting modal qty
    sessionStorage.setItem('qty'+numValueId,qtyCurrentValue)  // dynamic session value geting  modal qty

    if(currentValue < 2){
      $(this).attr('disabled','');
      }
    $('#value'+numValueId).html(currentValue); // minus quanty value which is on right side
    $('#qty'+numValueId).html(qtyCurrentValue); // minus quanty value which is on middle
    let itemPrice = parseFloat($('#itemPrice'+numValueId).html()); // item price of each item
    totalPrice = itemPrice * currentValue;    // pendinggggggggg code**********
    $('#totalPrice'+numValueId).html(totalPrice);
    sessionStorage.setItem('totalPrice'+numValueId,totalPrice)

    // update total-amount when minus btn click in modal
    totalAmount = parseFloat($('.total-amount').html());
    totalAmount = totalAmount + itemPrice; // total-amount
    $('.total-amount').html(totalAmount + '.00');
    // updating total amount in sessionStorage
    sessionStorage.setItem('totalAmount',totalAmount);
  })
 
}
// total-amount displaying in modal when page reloads retreving from session
let sessionTotalAmount = sessionStorage.getItem('totalAmount');
if(sessionTotalAmount != null){
  $('.total-amount').html(sessionTotalAmount + '.00');
}

          // updating total amount in sessionStorage

            
var selectThumnailOnSlideChange = function() {
         // select that specific thumbnail when slider changes slide
        let itemLength = $('.carousel-inner').children('div').length;
        let item = $('.carousel-inner').children('div.carousel-item');
        let thumbnail = $('.addscrollbar').children('div');
        let selectedItemBtn = $('.sidebar').find('.selected-item-btn');

        for(var i =0 ; i< itemLength; i++){
          let selectedSlide = $(item[i]).attr('class').includes('active');
          let dataIndex = $(thumbnail[i]).attr('data-slide-to');
          let selectedThumbnail = $(thumbnail[i]).attr('class').includes('selected-item');
          if(selectedThumbnail == true){

            $(thumbnail[i]).removeClass('selected-item');
            
              $(thumbnail[i]).find('.item-price').removeClass('d-none');
              $(thumbnail[i]).find('.selected-item-btn').addClass('d-none');
          }
          if(selectedSlide == true){
            if(i == dataIndex){
              $(thumbnail[i]).addClass('selected-item');
              $(thumbnail[i]).find('.item-price').addClass('d-none');
              $(thumbnail[i]).find('.selected-item-btn').removeClass('d-none');
            }
          }
        } 
      };
      var timer =  setInterval(selectThumnailOnSlideChange,100); // call every 1000 milliseconds
   var resetChangeThumbnailOnSlideMove = function(){
      let carouselInner = $('.carousel-inner').children('div.carousel-item').attr('class').length;
        if(carouselInner<20){
          // setInterval(selectThumnailOnSlideChange,100);
        }
        else{
          setInterval(selectThumnailOnSlideChange,1000);
        }
   }
   
    $(document).ready(function(){

        $(".sidebar-dropdown > a").click(function() {
          $(".sidebar-submenu").slideUp(200);
          if (
            $(this)
              .parent()
              .hasClass("active")
          ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
              .parent()
              .removeClass("active");
          } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
              .next(".sidebar-submenu")
              .slideDown(200);
            $(this)
              .parent()
              .addClass("active");
          }
        });

        $("#close-sidebar").click(function() {
          $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
          $(".page-wrapper").addClass("toggled");
        });
        // change select class for item selected/clicked
        $('.item').click(function(){

            $("#carouselExampleIndicators").attr('data-interval','false');
            var retimer =  setInterval(resetChangeThumbnailOnSlideMove,1000); // call every 1000 milliseconds
            clearInterval(timer); //disable function stored in timer variable

            let prevSelectedItemMove = $('.sidebar').children('div.selected-item');
            let prevSelectedItemClass = $(prevSelectedItemMove).attr('class');
            let prevSelectedItemPricebtn = $(prevSelectedItemMove).children('.item-price');
            let prevSelectedItemArrowbtn = $(prevSelectedItemMove).children('.selected-item-btn');

            prevSelectedItemMove.removeClass('selected-item');
            $(this).addClass('selected-item');
            if(prevSelectedItemClass.includes('selected-item') == true){
              // remove/add class d-none from previous selected item
              $(prevSelectedItemPricebtn[0]).removeClass('d-none');
              $(prevSelectedItemArrowbtn[0]).addClass('d-none');
            } 
            // remove/add class d-none from item which is clicked
              let clickedItemBtn = $(this).children('.item-price');
              let selectedItemBtn = $(this).children('.selected-item-btn');
              
              $(selectedItemBtn[0]).removeClass('d-none');
              $(clickedItemBtn[0]).addClass('d-none');   
        });

    let quantity = 2;
    $('.half-add-qty-p').html(quantity);
    var itemLength = $('.carousel-inner').children('div').length;
      hotDeal = new hotDeal(); // object of class hotDeal
      for(var i=0; i < itemLength; i++){

        //  assign dynamic ids to each item for no conflict 
        let itemImage = $('.zinger-image')[i];
        $(itemImage).attr('id','zinger-image'+i);
        let itemName = $('.zinger-name')[i];
        $(itemName).attr('id','zinger-name'+i);
        let itemPrice = $('.price')[i];
        $(itemPrice).attr('id','price'+i);
        let minusBtn = $('.minus-btn')[i];
        $(minusBtn).attr('id','minus-btn'+i);
        let plusBtn = $('.plus-btn')[i];
        $(plusBtn).attr('id','plus-btn'+i);
        let itemQty = $('.half-add-qty-p')[i];
        $(itemQty).attr('id','quantity'+i);
        let itemTotalPrice = $('.total-price')[i];
        $(itemTotalPrice).attr('id','total-price'+i);
        let giveInstruction = $('.give-instruction')[i];
        $(giveInstruction).attr('id','giveInstruction'+i);
        let outputInstruction = $('.output-instruction')[i];
        $(outputInstruction).attr('id','outputInstruction'+i);
        let addToOrder = $('.add-to-order')[i];
        $(addToOrder).attr('id','add-to-order'+i);

        // quantity increse/decrese code start

        let price = $('#price'+i).text();
        let totalPrice = price * quantity;
        $('#total-price'+i).html(totalPrice);

        $('#plus-btn'+i).click(function(){
          let num = $(this).attr('id').slice(-1);
          $('#minus-btn'+num).removeAttr('disabled');
          price = $('#price'+num).text();
          quantity= $('#quantity'+num).text();
          quantity++;
          $('#quantity'+num).html(quantity);
          totalPrice = price * quantity;
          $('#total-price'+num).html(totalPrice);
        })
        $('#minus-btn'+i).click(function(){
          let num = $(this).attr('id').slice(-1);
          quantity = $('#quantity'+num).text();
          quantity--;
          if(quantity == 1){
            $('#minus-btn'+num).attr('disabled','')
          }
          price = $('#price'+num).text();
          $('#quantity'+num).html(quantity);
          totalPrice = price * quantity;
          $('#total-price'+num).html(totalPrice);
        })
        // quantity increse/decrese code end 

        // when Add to order button is pressed following code works
        $('#add-to-order'+i).click(function(){
          
          let num = $(this).attr('id').slice(-1);
           itemImage = $('#zinger-image'+num).attr('src');
           itemName = $('#zinger-name'+num).html();
           itemPrice = $('#price'+num).html();
           itemQty = $('#quantity'+num).html();
           itemTotalPrice = $('#total-price'+num).html();
           itemInstrcution = $('#outputInstruction'+num).html();
           hotDeal.addToOrder(itemName,itemImage,itemQty,itemPrice,itemTotalPrice,itemInstrcution); //hotDeal function
        })
      }
       // bind each instruction with each order
       $('.give-instruction').click(function(){
        let num = $(this).attr('id').slice(-1);
          $('.add-instruction').click(function(){
            let inputInstruction = $(this).parents('.container').find('textarea').val();
            $('#outputInstruction'+num).html(inputInstruction)
        })
       })
      
      var totalPriceManyItem = 0; // global varible to store total-amount
      
      // modal quantity increse/decrese 
      $('.add-to-order').click(function(){
        //remove html element you have not order anything yet!
        let removeNoItemsMessage = $('.itemsForFinalOrder').children('h4');
        $(removeNoItemsMessage).remove();

        let totalOrder = $('.itemsForFinalOrder').children().length;
        let btnMinus = $('.itemsForFinalOrder').find('.minus');
        let btnPlus = $('.itemsForFinalOrder').find('.plus');
        let value = $('.qty-value');
        let qty = $('.qty');
        let totalPrice = $('.totalPrice');
        let removeOrder = $('.remove-order');
        let itemPriceElement = $('.itemPrice'); 

        $('.items-to-be-order').html(totalOrder); // No. of Items/Dishes:
        sessionStorage.setItem('totalOrder',totalOrder);

        for(var i=0; i < totalOrder ; i++){

          // dynamic ids to each element to avoid conflict
          $(btnMinus[i]).attr('id','minus'+i);
          $(btnPlus[i]).attr('id','plus'+i);
          $(value[i]).attr('id','value'+i);
          $(qty[i]).attr('id','qty'+i);
          $(totalPrice[i]).attr('id','totalPrice'+i);
          $(removeOrder[i]).attr('id','removeOrder'+i);
          $(itemPriceElement[i]).attr('id','itemPrice'+i);

          var minusId = $('#minus'+i).attr('id');
          var plusId = $('#plus'+i).attr('id');
          var valueId = $('#value'+i).attr('id');
          var qtyId = $('#qty'+i).attr('id');
          var totalPriceId = $('#totalPrice'+i).attr('id');
          var removeOrderId = $('#removeOrder'+i).attr('id');
          var itemPriceId = $('#itemPrice'+i).attr('id');
        }
        // when minus button is pressed in modal
        var itemTotalPrice = 0 ;
        var totalAmount = 0;
        var itemPrice = 0;
        $('#'+minusId).click(function(){
            let currentValue = $('#'+valueId).html(); 
            let qtyCurrentValue = $('#'+qtyId).html(); 
            currentValue--; 
            qtyCurrentValue--;
            let numValueId = valueId.slice(-1);
            let numQtyId = qtyId.slice(-1);

            sessionStorage.setItem('value'+numValueId,currentValue) // dynamic session value storing modal qty
            sessionStorage.setItem('qty'+numQtyId,qtyCurrentValue)  // dynamic session value storing modal qty
            if(currentValue < 2){
              $('#'+minusId).attr('disabled','');
            }
            $('#'+valueId).html(currentValue); // minus quanty value which is on right side
            $('#'+qtyId).html(qtyCurrentValue); // minus quanty value which is on middle
            itemPrice = parseFloat($('#itemPrice'+numValueId).html()); // item price of each item
            let totalPrice = itemPrice * currentValue;
            $('#'+totalPriceId).html(totalPrice);
            let numTotalPriceId = totalPriceId.slice(-1);
            sessionStorage.setItem('totalPrice'+numTotalPriceId,totalPrice)

            // update total-amount when minus btn click in modal     
            totalAmount = parseFloat($('.total-amount').html());
            totalAmount = totalAmount - itemPrice; // total-amount
            $('.total-amount').html(totalAmount + '.00');
            // updating total amount in sessionStorage
            sessionStorage.setItem('totalAmount',totalAmount);
            
          })
        // when plus button is pressed in modal
          $('#'+plusId).click(function(){
            $('#'+minusId).removeAttr('disabled');
            let currentValue = $('#'+valueId).html();
            let qtyCurrentValue = $('#'+qtyId).html();
            currentValue++;
            qtyCurrentValue++;
            let numValueId = valueId.slice(-1);
            let numQtyId = qtyId.slice(-1);

            sessionStorage.setItem('value'+numValueId,currentValue) // dynamic session value storing modal qty
            sessionStorage.setItem('qty'+numQtyId,qtyCurrentValue)  // dynamic session value storing modal qty
            $('#'+valueId).html(currentValue); // plus quanty value which is on right side
            $('#'+qtyId).html(qtyCurrentValue); // plus quanty value which is on left side
            itemPrice = parseFloat($('#itemPrice'+numValueId).html()); // item price of each item
            let totalPrice = itemPrice * currentValue;
            $('#'+totalPriceId).html(totalPrice);
            let numTotalPriceId = totalPriceId.slice(-1);
            sessionStorage.setItem('totalPrice'+numTotalPriceId,totalPrice)

            // update total-amount when plus btn click in modal
            totalAmount = parseFloat($('.total-amount').html());
            totalAmount = totalAmount + itemPrice; // total-amount
            $('.total-amount').html(totalAmount + '.00');

            // updating total amount in sessionStorage
                sessionStorage.setItem('totalAmount',totalAmount);
          })

          // total-amount code start
        if(totalOrder == 1){
          for(var i=0; i < totalOrder ; i++){
            let totalPriceOneItem = parseFloat($('#totalPrice'+i).text());
            totalPriceManyItem = parseFloat($('#totalPrice'+i).text());
            $('.total-amount').html(totalPriceOneItem + '.00');
            // updating total amount in sessionStorage
            sessionStorage.setItem('totalAmount',totalPriceOneItem);
          }
        }
        else{
          var totalPriceManyItem1 = 0;
          let totalAmount = sessionStorage.getItem('totalAmount');
          
          for(var i=0; i < totalOrder ; i++){
            totalPriceManyItem1 = parseFloat($('#totalPrice'+i).text());

          }
          
          if(totalAmount != null){
            totalPriceManyItem = totalPriceManyItem1 + parseFloat(totalAmount) ;
          }
          else{
            totalPriceManyItem = totalPriceManyItem + totalPriceManyItem1;
          }
          $('.total-amount').html(totalPriceManyItem + '.00');
          // updating total amount in sessionStorage
            sessionStorage.setItem('totalAmount',totalPriceManyItem);
        }
          // total-amount code end

          // Remove order/items from list when close button is pressed
          $('.remove-order').click(function(){
            itemTotalPrice = 0 ;
            totalAmount = 0;
            var itemRowID = $(this).attr('id');
            let itemRow = $('#'+itemRowID).closest('.row');
            let num = $(this).attr('id').slice(-1);
            itemTotalPrice = parseFloat($('#totalPrice'+num).html()); // total price of each item
            $(itemRow).slideUp(500,function(){
            $(itemRow).remove();
            totalOrder = $('.itemsForFinalOrder').children().length;
             if(totalOrder==0){
                // print no items message if all items are deleted
                let template = `<h4 class='total-amount-color text-center mt-5'>You have not order anything yet! </h4>`;
                $('.itemsForFinalOrder').html(template);

                // update total-amount when items deleted
                totalAmount = parseFloat($('.total-amount').html());
                totalAmount = totalAmount - itemTotalPrice; // total-amount
                $('.total-amount').html(totalAmount + '.00');
                // updating total amount in sessionStorage
                sessionStorage.setItem('totalAmount',totalAmount);
                // removing order from sessionStorage
                let count = sessionStorage.getItem('countOrder');
                count = count-1;
                sessionStorage.setItem('countOrder',count);
                let orderSerial = $(this).find('p').text();
                let key = 'addOrder' + orderSerial;
                sessionStorage.removeItem(key);
                sessionStorage.removeItem('totalOrder');
                sessionStorage.removeItem('countOrder');
                sessionStorage.removeItem('totalAmount');
              }
              else{
                // update total-amount when items deleted
                totalAmount = parseFloat($('.total-amount').html());
                totalAmount = totalAmount - itemTotalPrice; // total-amount
                $('.total-amount').html(totalAmount + '.00');
                // updating total amount in sessionStorage
                sessionStorage.setItem('totalAmount',totalAmount);
                // removing order from sessionStorage
                let count = sessionStorage.getItem('countOrder');
                count = count-1;
                sessionStorage.setItem('countOrder',count);
                let orderSerial = $(this).find('p').text();
                let key = 'addOrder' + orderSerial;
                sessionStorage.removeItem(key);
              }
             });

            if(totalOrder >= 1){
                totalOrder = totalOrder-1;
                $('.items-to-be-order').html(totalOrder); // update No. of Items/Dishes: on delte items
                sessionStorage.setItem('totalOrder',totalOrder);
              }
            

          })
      })

      //when Orders button is clicked 
      $('.order').click(function(){
        let totalOrder = $('.itemsForFinalOrder').children().length;
        if(totalOrder == 0){
          let template = `<h4 class='total-amount-color text-center mt-5'>You have not order anything yet! </h4>`;
          $('.itemsForFinalOrder').html(template);
        }
      })

      $('.remove-order').click(function(){

            itemTotalPrice = 0 ;
            totalAmount = 0;
            // var itemRowID = $(this);
            let itemRow = $(this).parents('.row');
            itemTotalPrice = parseFloat($(itemRow).find('.totalPrice').text());
            let totalOrder = $('.itemsForFinalOrder').children().length;
            $(itemRow).slideUp(500,function(){
              $(itemRow).remove();
              // totalOrder = sessionStorage.getItem('totalOrder');
              
              // alert(totalOrder)
              if(totalOrder==1 ){
                // update total-amount when items deleted
                totalAmount = parseFloat($('.total-amount').html());
                totalAmount = totalAmount - itemTotalPrice; // total-amount
                $('.total-amount').html(totalAmount + '.00');
                // updating total amount in sessionStorage
                sessionStorage.setItem('totalAmount',totalAmount);

                // print no items message if all items are deleted
                let template = `<h4 class='total-amount-color text-center mt-5'>You have not order anything yet! </h4>`;
                $('.itemsForFinalOrder').html(template);
                // removing order from sessionStorage
                let count = sessionStorage.getItem('countOrder');
                if(count>=1){
                  count = count-1;
                }
                sessionStorage.setItem('countOrder',count);
                let orderSerial = $(this).find('p').text();
                let key = 'addOrder' + orderSerial;
                sessionStorage.removeItem(key);
                sessionStorage.removeItem('totalOrder');
                sessionStorage.removeItem('countOrder');
                sessionStorage.removeItem('totalAmount');
              }
              else{
                // update total-amount when items deleted
                totalAmount = parseFloat($('.total-amount').html());
                totalAmount = totalAmount - itemTotalPrice; // total-amount
                $('.total-amount').html(totalAmount + '.00');
                // updating total amount in sessionStorage
                sessionStorage.setItem('totalAmount',totalAmount);

                // removing order from sessionStorage
                let count = sessionStorage.getItem('countOrder');
                count = count-1;
                sessionStorage.setItem('countOrder',count);
                let orderSerial = $(this).find('p').text();
                let key = 'addOrder' + orderSerial;
                sessionStorage.removeItem(key);
              }
              if(totalOrder >= 1){
                totalOrder = totalOrder-1;
                $('.items-to-be-order').html(totalOrder); // update No. of Items/Dishes: on delte items
                sessionStorage.setItem('totalOrder',totalOrder);
              }
              
            });
      });
      // ajax request when place order button clicked
      $('.place-order').click(function(){
          $.ajax('order/add.php', {
            method: 'POST',
            // type: 'application/json',  // http method
            data: { 
            order1: 'order1',
            order2: 'order2' },  // data to submit
            success: function (data, status, xhr) {
              data = JSON.parse(data);
              console.log(data)
              // $('p').append('status: ' + status + ', data: ' + data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
              console.log(errorMessage)
                // $('p').append('Error: ' + errorMessage);
              }
          });
      })
    });