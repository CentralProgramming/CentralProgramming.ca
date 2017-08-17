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
function navJS() {
    if(window.matchMedia("(min-width: 651px)").matches) {
        document.getElementById("countdown").style.display = "inline-block";
    }
    document.getElementById("navbar").className = "jsEnabled";   
}

function resize() {
    if (window.matchMedia("(min-width: 651px)").matches) {
        document.getElementById("nav").className = "topNav";

        document.getElementById("navbar").className = "jsEnabled";
        document.getElementById("body").style.overflow = "auto";
        stopBodyScrolling(false);
    }
}

function navButton() {
    var m = document.getElementById("nav");

    if(m.className === "topNav") {
        m.className += " responsive";
        if(window.matchMedia("(max-width: 650px), (max-height: 500px)").matches) {
            document.getElementById("navbar").className += " open";
            document.getElementById("body").style.overflow = "hidden";
            stopBodyScrolling(true);
        }
        if(window.matchMedia("(max-width: 650px) and (max-height: 430px)").matches){
            m.className += " reduced"
        }
    }
    else {
        m.className = "topNav";
        document.getElementById("navbar").className = "jsEnabled";
        document.getElementById("body").style.overflow = "auto";
        stopBodyScrolling(false);
    }
}

function stopBodyScrolling(bool){
    if(bool === true){
        document.body.addEventListener("touchmove", freezeVp, false);
    }
    else{
        document.body.removeEventListener("touchmove", freezeVp, false);
    }
}

var freezeVp = function(e){
    e.preventDefault();
};


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


/*CONTEST CARD FLIP*/
function jsEnabled() {
    var front = document.getElementsByClassName("front");
    for(var x=0; x<front.length; x++){
        front[x].className += " js";
    }
    var back = document.getElementsByClassName("back");
    for(var x=0; x<back.length; x++){
        back[x].className += " js";
    }
}

function flipBack(linkElement){
   linkElement.parentElement.parentElement.className += " flipped";
}
function flipFront(linkElement){
    linkElement.parentElement.parentElement.className = "contest";
}