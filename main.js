//Loading the javascript when the document window is ready
$(document).ready(function(){
    //wrapping everything in an IIFE to keep the global scope clean
    (function(){
        //function to hide and show the placeholder on focus and blur of the input boxes
        (function removePlaceholder(){
            $("input").focus(function(){
                //set the data of the placeholder to the placeholder itself and then remove it on focus
               $(this).data("placeholder", $(this).attr("placeholder")).attr("placeholder", "");
            }).blur(function(){
                //set the data of the attribute back to itself on blur
                $(this).attr("placeholder", $(this).data("placeholder"));
            });
        })();

    })();
});