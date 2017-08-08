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
        stopBodyScrolling(false);
    }
}

function navButton() {
    var x = document.getElementById("nav");

    if(x.className === "topNav") {
        x.className += " responsive";
        if(window.matchMedia("(max-width: 800px), (max-height: 500px)").matches) {
            document.getElementById("navbar").style.height = "100%";
            document.getElementById("navbar").style.position = "fixed";
            document.getElementById("body").style.overflow = "hidden";
            stopBodyScrolling(true);
        }
        if(window.matchMedia("(max-width: 800px) and (max-height: 430px)").matches){
            x.className += " reduced";
        }
    }
    else {
        x.className = "topNav";
        document.getElementById("navbar").style.height = "auto";
        document.getElementById("navbar").style.position = "sticky";
        document.getElementById("navbar").style.position = "-webkit-sticky";
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
function flipBack(linkElement){
   linkElement.parentElement.parentElement.className += " flipped";
}
function flipFront(linkElement){
    linkElement.parentElement.parentElement.className = "contest";
}




/*RESOURCES ACCORDION*/
var expansions = document.getElementsByClassName("accordion");

for(var x=0; x<expansions.length; x++){
    expansions[x].onclick = function(){
        this.classList.toggle("active");
        
        var panel = this.nextElementSibling;
        if(panel.style.display === "block"){
            panel.style.display = "none";
        }
        else {
            panel.style.display = "block";
        }
    }
}

/*RESOURCES CONTENT*/
function openSection(evt, sectionName){
    var content, contentLinks;

    content = document.getElementsByClassName("content");

    for(var x=0; x<content.length; x++){
        content[x].style.display = "none";
    }

    contentLinks = document.getElementsByClassName("content-links");

    for(var x=0; x<contentLinks.length; x++){
        contentLinks[x].className = contentLinks[x].className.replace(" active", "");
    }
        
    document.getElementById(sectionName).style.display = "block";
    evt.currentTarget.className += " active";
}