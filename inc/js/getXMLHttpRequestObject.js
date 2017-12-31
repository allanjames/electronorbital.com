function getXMLHttpRequestObject() {
        var xmlhttp = false;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else if (window.ActiveXObject) {
            // code for IE6, IE5
            try {
                xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
            }catch(e) {
                 try {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                 }catch (e) {}
            }
        }
        return xmlhttp;
    }    