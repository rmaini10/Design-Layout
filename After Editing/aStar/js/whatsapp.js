function order(){
        //var x= $("#getpro").parents("#pro").attr("productid");
        var x= document.getElementById("btn_whatsapp").parentNode.getAttribute("productid");
        url= 'https://api.whatsapp.com/send?phone=' + 919999089262 + '&text=%20' + x;
        location.href =url;
        
    }
function whatsapp(){
    var x = document.getElementById("whatsapp").parentNode.children[0].children[0].children[0].innerHTML;
    url= 'https://api.whatsapp.com/send?phone=' + 919999089262 + '&text=%20' + x;
        location.href =url;
}