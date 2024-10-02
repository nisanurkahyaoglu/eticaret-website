$(document).ready(function(){
    
    $('button[name=add]').click(function(){

        var url = "sepet7.php";
        var data = {
            p : "addToCart",
            id: $(this).attr("id")

        }

        $.post(url,data,function(response){
            $(".cart-count").text(response); 
        })

    })


    $('button[name=remove]').click(function(){

        var url = "sepet7.php";
        var data = {
            p : "removeFromCart",
            id: $(this).attr("id")

        }

        $.post(url,data,function(response){

            window.location.reload();

        })

    })

})