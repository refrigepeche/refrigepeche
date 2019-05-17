function getXMLHttpRequest(){
var xhr = null;
if (window.getXMLHttpRequest|| window.ActiveXObject){
    if(window.ActiveXObject){
        try{
            xhr = new ActiveXObject("Mxml2.XMLHTTP");
        }catch(e){
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }else{
        xhr = new XMLHttpRequest();
    }
}else{
    alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
    return null;
}
return xhr;
}

function validation() {
    var xhr = getXMLHttpRequest();
    var checked = new Array();
    $("input:checkbox").each(function(){
    var $this = $(this);
    if($this.is(":checked")){
        checked.push($this.attr("id"));
    }
    xhr.open("POST", "/api/validation", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("list="+checked);
    //location.reload();
    })
}
