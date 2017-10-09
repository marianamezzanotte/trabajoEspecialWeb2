$("document").ready(function(){
    renderSection("home");
});


$(".sectionLink").on("click", function(e){
    e.preventDefault();
    renderSection(this.name);
});


function renderSection(name){
    $.post(name,"", function(response){
        $(".js-section-content").html(response);
        activateButtonHanlers();
    });
}


function activateButtonHanlers(){
    $(".js-category-buttons").on("click", function(){
        renderCategory(this.id);
    });
}

function renderCategory(categoryId){
    let url = "categoryFilter/"+ categoryId;
    $.post(url,"", function(response){
        $(".js-product-list").html(response);
    });
}