/*-- FUNCIONES PROPIAS DE LA VISTA --*/
function showNewSearch(){
  $('.back-container').delay(2000).show('slide', { direction: "right" }, 500);
}

function newSearchEvent(){
  $('input[type="text"]').val('');
  $('.nombre').text('');
  $('.desc-body').text('');
  $('#comics').text('');
  $('.thumbnail').attr("src" , "img/default.png")
  $('#series').text('');
  $('#stories').text('');
  $('#events').text('');
  $('html, body').animate(
    {
      scrollTop: 0
    },1300, function(){$('.back-container').hide()});

  }

/*-- ----------------------------- --*/
function ActionTxt(event){
  event.preventDefault();
  var PersonFind = $('input[type="text"]').val();
  console.log("person Find "+ PersonFind);
  var UrlApiMarvel = "http://gateway.marvel.com/v1/public/characters?ts=3&apikey=1b899dd0f1cbe3291876ec3a1f14c166&hash=35ec9efbae1cd4ef3bce259252fd44ce";
  $.get(UrlApiMarvel , {name: PersonFind},function(response){
    appendHTML(response);
  })
}


/* Función appendHTML que recibe la respuesta de la API como parámetro*/
function appendHTML(response){
  console.log("estructura de response CON ARRAY " + Object.values(response));
  console.log("estructura de response CON STRINGIFY  " + JSON.stringify(response.data.results[0]));
  $('.nombre').text(response.data.results[0].name);
  $('.desc-body').text(response.data.results[0].description);
  $('.thumbnail').attr("src" , response.data.results[0].thumbnail.path + "." + response.data.results[0].thumbnail.extension)
  $.each(response.data.results[0].comics.items, function(index,value){
    $('#comics').append(`<li><a href="#">${value.name}</a></li>`);
  })
  $.each(response.data.results[0].series.items, function(index,value){
    $('#series').append(`<li><a href="#">${value.name}</a></li>`);
  })
  $.each(response.data.results[0].stories.items, function(index,value){
    $('#stories').append(`<li><a href="#">${value.name}</a></li>`);
  })
  $.each(response.data.results[0].events.items, function(index,value){
    $('#events').append(`<li><a href="#">${value.name}</a></li>`);
  })
  //console.log("Demas datos " +  response.data.results[0].thumbnail.path + "." + response.data.results[0].thumbnail.extension)

  
  /*INGRESA AQUÍ EL CÓDIGO PARA REALIZAR EL PASO 7 DE LAS INSTRUCCIONES
  *
  *
  *
  *
  **/



/*-- ANIMACIÓN PROPIA DE LA VISTA, NO MODIFICAR --*/
  $('html, body').animate(
    {
      scrollTop: $("#page2").offset().top
    },1300, showNewSearch);
/*-- ------------------------------------------ --*/
}

/* FUNCIÓN DOCUMENT.READY */
$(function(){
  $(window).scrollTop(0)
  $('input[type="text"]').val('');
  $('.character-form').submit(ActionTxt);
  $('.back-container').click(newSearchEvent);
})
