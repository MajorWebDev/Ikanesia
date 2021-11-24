function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if (browser == "Microsoft Internet Explorer") {
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        ro = new XMLHttpRequest();
    }
    return ro;
}

var http = createRequestObject();
var idData;


function ReqData(filedata, id) {
    http.open('get', filedata);
    http.onreadystatechange = handleResponse;
    http.send(null);
    idData = id;
}

function handleResponse() {
    if (http.readyState == 4) {
        var response = http.responseText;
        document.getElementById(idData).innerHTML = response;
    }
}