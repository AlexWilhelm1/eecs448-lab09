var i = 0;
function Submit()
{
 var password = document.getElementById("pass").value;
 var itemType = document.getElementById("beanpole").value;
 var shipping = document.getElementbyId("sevenDay").value;
 if (password.length < 1)
 {
   alert("Your password is too short.")
 }
 if (document.getElementById("sevenDay").checked() == false)
 {
   alert(itemType);
 }
}

function Reset()
{
  document.getElementById("pass").reset();
  // document.getElementById("beanpole").reset();
  // document.getElementById("sevenDay").reset();
}
