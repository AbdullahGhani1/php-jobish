// input function handling ..
 function cal(d){
    var v = document.getElementById('res').value;
    v = v+d;
    document.getElementById('res').value = v;
}
// clear function ..
function clr(){
 document.getElementById('res').value = " ";   
}
// mannual Calculation
function cal2(c){
    var v1 = document.getElementById('v1').value;
    var v2 = document.getElementById('v2').value;
    if(c == "+"){
        var r = parseInt(v1) + parseInt(v2);
    } else if(c == "-"){
        var r = parseInt(v1) - parseInt(v2);
    } else if (c == "/"){
        var r = parseInt(v1) / parseInt(v2);
    }
    document.getElementById('result').value = r;
}
// result
function result(){
    var v = document.getElementById("res").value;
    var r = eval(v);
    document.getElementById('res').value = r;
}