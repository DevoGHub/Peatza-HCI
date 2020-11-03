function setFav(){
  var ans=confirm('Are you sure you want to add this order to your favourites list?');
  if(ans){
    alert('Order set as favourite successfully!!!');
  }
}

function checkout(){
  var ans=confirm('Are you sure you want to continue to payment for this order?');
  if(ans){
    var ans2=confirm("uh-oh! we have encountered a problem while connecting to online payment gateway. Your order will be processed as a 'Pay on Delivery' order.");
    if(ans2){
      location.replace('http://localhost/projects/peatza-hci/index.php');
    }
  }
}
