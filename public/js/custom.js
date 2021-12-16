function collapseToggle(e) { 
    var parent=$(e.target).closest(".c-collapse-1");
    if(parent.hasClass('show')){
        parent.removeClass("show");
    }else{
        parent.addClass("show");
    }
};

$(function()
{
    $('.c-collapse-1 .c-toggle-open').on('click',collapseToggle);
    $('.c-collapse-1 .c-toggle-close').on('click',collapseToggle);
    $.each($('.c-collapse-1'), function(k,v){
        if($(v).find('.collapse-content').first().height()<=64){
            $(v).find('.c-toggle-open').parent().remove();
            $(v).find('.c-toggle-close').parent().remove();
        }
    });
});