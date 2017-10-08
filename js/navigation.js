$("document").ready(renderHome);
$("#home").on("click", renderHome);
$("#products").on("click", renderProducts);
$("#offers").on("click", renderOffers);
$("#aboutUs").on("click", renderAboutUs);

function renderHome(){

    $.post("home","", function(response){
        $(".js-section-content").html(response);
   });

}

function renderProducts(){
    $.post("products","", function(response){
        $(".js-section-content").html(response);
   });
}

function renderOffers(){
    $.post("offers","", function(response){
        $(".js-section-content").html(response);
   });
}

function renderAboutUs(e){

    $.post("aboutUs","", function(response){
        $(".js-section-content").html(response);
   });
}