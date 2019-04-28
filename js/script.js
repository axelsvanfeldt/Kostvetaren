var app = {
    toggleIntro: function() {
        if (window.location.hash == ''){
            setTimeout(function() {
                location.href = "#search-page";
            }, 3000);
        }        
    },
    clearResult: function() {
        $(".search-input").val("");
        $("#search-result").empty();
    },
    toggleFoodContent: function(e) {
        var item = $(e.target).closest(".search-result-item");
        var icon = item.find("span");
        item.hasClass("search-result-item-open") ? app.hideFoodContent(item, icon) : app.showFoodContent(item, icon);
    },
    showFoodContent: function(item, icon) {
            $(".search-result-item").css("display", "none");
            item.css("display", "block");
            item.addClass("search-result-item-open");
            icon.removeClass("ui-icon-plus");
            icon.addClass("ui-icon-delete");       
    },
    hideFoodContent: function(item, icon) {
            $(".search-result-item").css("display", "block");
            item.removeClass("search-result-item-open");
            icon.removeClass("ui-icon-delete");
            icon.addClass("ui-icon-plus");        
    },
    xmlRequest: function() {
        var url = "content/results.php?q=" + $(".search-input").val();
        var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $("#search-result").html(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
    }
};

$(document).ready(function(){
    app.toggleIntro();
    $("#search-page").on("keyup", ".search-input", app.xmlRequest);
    $("#search-page").on("click", ".clear-button", app.clearResult);
    $("#search-page").on("click", ".search-result-item table thead", app.toggleFoodContent);
    
});
