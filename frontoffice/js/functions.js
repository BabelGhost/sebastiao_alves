function goBack(){
    history.back();
}
function scrollTo(id){
    document.getElementById(id).scrollIntoView();
}
function _open(){
    document.getElementById("open-books").scrollIntoView();
    setTimeout(openBooks, 500);
}
function openBooks(){
    $("#menu-dropdown").dropdown("toggle");
}
function seeMore(){
    document.querySelector("#text-big").classList.remove("d-none");
    document.querySelector("#text-smal").classList.add("d-none");
    document.querySelector("#seemore").classList.add("d-none");
}
function changeIcon(){
    document.querySelector(".navbar-icon").classList.toggle("close");
}
function seeMore(){
    document.getElementById("author-desktop").style.display = "flex";
    document.getElementById("author-mobile").style.display = "none";
}