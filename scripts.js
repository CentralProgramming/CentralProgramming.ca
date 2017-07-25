/*COUNTDOWN*/
var countDownDate = new Date("Sep 5, 2017 10:55:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 *24));
    var hours = Math.floor((distance % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "already passed"
    }
}, 1000);

function hideCountdown() {
    document.getElementById("countdown").style.display = "none";
    document.getElementById("countdown").style.padding = "0";
}


/*NAVIGATION*/
function resize() {
    if (window.matchMedia("(min-width: 801px)").matches) {
        document.getElementById("nav").className = "topNav";

        document.getElementById("navbar").style.height = "auto";
        document.getElementById("navbar").style.position = "sticky";
        document.getElementById("navbar").style.position = "-webkit-sticky";
        document.getElementById("body").style.overflow = "auto";
    }
}

function navButton() {
    var x = document.getElementById("nav");

    if(x.className === "topNav") {
        x.className += " responsive";
        if (window.matchMedia("(max-width: 800px), (max-height: 500px)").matches) {
            document.getElementById("navbar").style.height = "100%";
            document.getElementById("navbar").style.position = "fixed";
            document.getElementById("body").style.overflow = "hidden";
        }
    }
    else {
        x.className = "topNav";
        document.getElementById("navbar").style.height = "auto";
        document.getElementById("navbar").style.position = "sticky";
        document.getElementById("navbar").style.position = "-webkit-sticky";
        document.getElementById("body").style.overflow = "auto";
    }
}


/*TOP BUTTON*/
window.onscroll = function() {scrollFunction()};

function scrollFunction(){
    if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        document.getElementById("topBtn").style.display = "block";
    }
    else{
        document.getElementById("topBtn").style.display = "none";
        }
    }
function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }