function showMessage(){

document.getElementById("msg").innerHTML =
"Thank you for visiting my portfolio!";
}

/* Smooth Scroll */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

anchor.addEventListener("click", function(e){

e.preventDefault();

document.querySelector(this.getAttribute("href"))
.scrollIntoView({
behavior: "smooth"
});

});

});