/*COUNTDOWN*/
var countDownDate = new Date("Sep 20, 2017 10:55:00").getTime();
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


/*CLUB INFO*/
function changeAbout(n){
    var abtImg = document.getElementById("about-img");
    var lrnImg = document.getElementById("learn-img");
    var about = document.getElementById("about-text");
    var learn = document.getElementById("learn-text");
    
    if(n==1){
        abtImg.classList.toggle("hide");
        about.classList.toggle("hide");
        lrnImg.classList.toggle("hide");
        learn.classList.toggle("hide");
    }
    if(n==0){
        lrnImg.classList.toggle("hide");
        learn.classList.toggle("hide");
        abtImg.classList.toggle("hide");
        about.classList.toggle("hide");
    }
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




/*RESOURCE SET CATEGORY*/
function setCtgy(){
    if (location.hash == "#sec_input"){
        openSection(event, 'inputIntro')
        openCtgy(input);
    }
    else if(location.hash == "#sec_arrays") {
        openSection(event, 'arrayIntro')
        openCtgy(arrays);
    }
    else if(location.hash == "#sec_arraylists") {
        openSection(event, 'arrayListsIntro')
        openCtgy(arrayLists);
    }
    else if(location.hash == "#sec_recursion") {
        openSection(event, 'recursionIntro')
        openCtgy(recursion);
    }
}
                

/*RESOURCES CONTENT*/
function openSection(evt, sectionName){
        document.getElementById("intro")
.style.display = "none";
    
    var content, contentLinks;

    content = document.getElementsByClassName("content");

    for(var x=0; x<content.length; x++){
        content[x].style.display = "none";
    }

    contentLinks = document.getElementsByClassName("expanded");

    for(var x=0; x<contentLinks.length; x++){
        contentLinks[x].className = contentLinks[x].className.replace(" active", "");
    }
        
    document.getElementById(sectionName).style.display = "block";
    evt.currentTarget.className += " active";
}


/*RESOURCES ACCORDIAN*/
function openCtgy(link){
    document.getElementById("instruct").style.display = "none";
    var expansions = document.getElementsByClassName("accordion");

    for(var x=0; x<expansions.length; x++){
        if (window.matchMedia("(max-width: 1024px)").matches){
            for(var y=0; y<expansions.length; y++){
                expansions[y].className = expansions[y].className.replace(" active", "");
                var panel = expansions[y].nextElementSibling;
                panel.style.display = "none";
            }
        }
        link.classList.toggle("active");

        var panel = link.nextElementSibling;
        if(panel.style.display === "block"){
            panel.style.display = "none";
        }
        else {
            panel.style.display = "block";
        }
    }
}


/*RESOURCES NAV RESIZE*/
function fixNav() {
    if (window.matchMedia("(max-width: 1024px)").matches){
        var expansions = document.getElementsByClassName("accordion");

        for(var y=0; y<expansions.length; y++){
            expansions[y].className = expansions[y].className.replace(" active", "");
            var panel = expansions[y].nextElementSibling;
            panel.style.display = "none";
        }
    }
}



/*CALENDAR BACK*/
function setBack(){
    var backLink =  document.getElementById("page-from");
    var backPage =  document.getElementById("back-page");
    
    if (location.hash != ""){
        if (location.hash == "#from_home"){
            backLink.setAttribute("href","index.html");
            backPage.innerHTML = "Home";
        }
        else if (location.hash == "#from_news"){
            backLink.setAttribute("href","index.html#announcements");
            backPage.innerHTML = "Announcements";
        }
        else if (location.hash == "#from_problems"){
            backLink.setAttribute("href","problems.html");
            backPage.innerHTML = "Weekly Problems";
        }
        else if (location.hash == "#from_contests"){
            backLink.setAttribute("href","contests.html");
            backPage.innerHTML = "Contests";
        }
        else if (location.hash == "#from_resources"){
            backLink.setAttribute("href","resources.html");
            backPage.innerHTML = "Resources";
        }
        document.getElementById("back-link").style.display = "block";
    }
}