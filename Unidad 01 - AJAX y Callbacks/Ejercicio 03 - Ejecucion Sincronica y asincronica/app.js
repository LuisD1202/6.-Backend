var inputUser = $('#username');
inputUser.on('keypress',function(e){
    if(e.which === 13){
      ajaxSync()
    }
})
function ajaxSync (){
  var URL = "http://api.github.com/users/"
  var username = inputUser.val().trim().toLowerCase();
  if (username !== ""){
    console.log("usuario difernte a vacio " + username);
    var UrlUser = URL + username;
    console.log("url a consultar " + UrlUser);
    $.ajax({
      url: UrlUser,
      type: 'GET',
      async: true,
      success: function(response){
        var data = response
          console.log("llenando informacion" + data);
          $('img').attr('src',data.avatar_url)
          $('.name').text(data.name)
          $('.username').text(data.login)
          $('.email').text(data.email)
          $('.company').text(data.company)
          $('.location').text(data.location)
          $('.followers').text(data.followers)

      },
      error: function (response) {
        var data = response.responseJSON;
        if (data.message && data.message === "Not Found") {
          console.log("no existe el usuario consukltado");
          alert("NO existe el usuario consultado")
        }
      }
    })
  }
  else {
    alert('Debe ingresar un nombre de usuario valido')
  }
}
