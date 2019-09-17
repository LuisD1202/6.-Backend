(function($){
  var inputUser = $('#username');
  var URL = "http://api.github.com/users/"
  inputUser.on('keypress',function(e){
    if(e.which === 13){
      var username = $(this).val().trim().toLowerCase();
      if (username !== ""){
        console.log("usuario difernte a vacio " + username);
        var XHR = new XMLHttpRequest();
        var UrlUser = URL + username;
        XHR.open('GET', UrlUser);
        console.log("se abrio");
        XHR.onreadystatechange = function(){
          if(XHR.readyState === 4){
            var data = JSON.parse(XHR.responseText);
            console.log("data user " + data);
            if (data.message == "Not Found") {
              alert("El usuario no EXISTE !!! ");
            }
            else {
              $('img').attr('src',data.avatar_url)
              $('.name').text(data.name)
              $('.username').text(data.login)
              $('.email').text(data.email)
              $('.company').text(data.company)
              $('.location').text(data.location)
              $('.followers').text(data.followers)
            }
          }
        }
        XHR.send(null);
      }else {
        console.log("Debe ingresar un nombre de usuario valido");
        alert('Debe ingresar un nombre de usuario valido')
      }
    }
  });
})(jQuery);
