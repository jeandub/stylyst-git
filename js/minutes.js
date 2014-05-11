function save(){
        /*var query = $('#formId').serialize();
        var url = '../process.php';
        $.ajax(url, query, function (response) {
        alert ("Sauvé !") 
        alert (response);
        });*/
        var xhr = getXMLHttpRequest();

        xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
          alert("OK"); // C'est bon \o/
          }
          };

        var username = encodeURIComponent(username);
        var email = encodeURIComponent(email);
        var password = encodeURIComponent(password);
        xhr.open("POST", "../process.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(username=" + username + "&email=" + email + "&password=" + password + ");
    }