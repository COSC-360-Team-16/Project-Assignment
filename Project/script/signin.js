function validateForm(){
    var uname = document.getElementById("uname");
    var pass = document.getElementById("password");
    var input = document.getElementsByTagName("input");

    for(var i=0; i<input.length;i++){
        if(input[i].value == ""){
            input[i].style.backgroundColor ="yellow";
            
        }else{
           input[i].style.backgroundColor ="";
        }
    }
    if(uname.value == "" || pass.value == ""){
        alert("Please fill in all highlighted fields");
        return false;
    }
}