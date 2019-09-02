function order(){
        var x= $("#getpro").parents("#pro").attr("productid");
        url= 'https://api.whatsapp.com/send?phone=' + 919999089262 + '&text=%20' + x;
        location.href =url;
    }