


const registerButton = document.getElementById("registerButton")
const registerForm = document.getElementById("registerForm")

registerButton.addEventListener('click', () =>{
registerForm.style.display= "block";
}) ;



const registeredCustomers = [];//empty array

function register(){
let userName = document.getElementById("userName").value;
let Name = document.getElementById("Name").value;
let contact = document.getElementById("contact").value;
let address = document.getElementById("address").value;

let newCustomer = {
    newCustomeruserName: userName,
    newCustomerName: Name,
    newCustomerContact: contact,
    newCustomerAddress: address,

};
registeredUsers.push(newCustomer);
alert(`New Customer ${userName}, has been registered`);
clearForm()
}


function clearForm(){
    let userName = document.getElementById("userName").value ='';
let Name = document.getElementById("Name").value ='';
let contact = document.getElementById("contact").value ='';
let address = document.getElementById("address").value ='';
}



document.querySelector("#show-login").addEventListener("click", function(){
  document.querySelector(".popup").classList.add("active");
});





document.querySelector(".popup .close-btn").addEventListener("click", function(){
    document.querySelector(".popup").classList.remove("active");
});







