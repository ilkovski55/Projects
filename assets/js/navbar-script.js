// NAVBAR SCRIPT
document.querySelector(".navbar-toggler").addEventListener("click", toggleAll);

function toggleAll() {
    var logoVisibility = document.querySelector(".navbar-brand").style.visibility;
    if (logoVisibility == "visible" || logoVisibility == "") {
        document.querySelector(".navbar-brand").style.visibility = "hidden";
    } else {
        document.querySelector(".navbar-brand").style.visibility = "visible";
    }

    var displayAll = document.querySelector(".none").style.display;
    if (displayAll == "inline-block" || displayAll == "") {
        document.querySelector(".none").style.display = "none";
    } else {
        document.querySelector(".none").style.display = "inline-block";
    }

    document.querySelector(".navbar").classList.toggle("nav-shown");
    document.querySelector(".navbar").classList.toggle("bg-dark");
}

document.ready($(function() {
    var navbtn = $('.navbar-toggler');
    navbtn.click(function() {
        navbtn.toggleClass('active');
    });
}));