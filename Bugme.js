window.onload = function() {
    document.getElementById("submit").addEventListener("click", function() {

        var password = document.getElementById("password").value;
        var patt1 = /[A-Z]/g;
        var patt2 = /\d/g;
        var patt3 = /[a-z]/g;
        if (password.length >= 8 && password.length <= 12) {
            if (password.match(patt1) && password.match(patt2) && password.match(patt3)) {










            }
        } //else if (!(password.length >= 8 && password.length <= 12)) {
        //console.log("did not worked")
        //var result = document.getElementById("result");
        //result.innerHTML = "Password must have only 8 to 12 characters including at least one uppercase,lowercase letters and numbers";;

        //console.log(password);
    });





}