function ajaxProduct(name_product) {
  $('#lista_produtos').fadeOut();
  $('#loading').fadeIn();
  $.get("class/class.getproduto.php", {produto: name_product})
    .done(function (data) {
      $('#loading').fadeOut();
      $('#house').hide();
      $('#rollback').fadeIn();
      $('#this_produtos').html(data);
      $('#this_produtos').fadeIn();
      funclick();
    })
    .fail(function () {
      alert("ERROR 500: Contate o Admistrador");
    });
}
function rollback(){
    $('#this_produtos').fadeOut();
    $('#rollback').hide();
    $('#house').fadeIn();
    $('#lista_produtos').fadeIn();
}
function show() {
    $(".modal").modal('hide');
    $(".toast").toast('show');
}
function modalFadein(){
    this_name = $("#name_product").html();
    $('#message-name').val(this_name+", da cor: ");
}
function funclick(){
  $(".color-choose input").on("click", function () {
    var color = $(this).attr("data-image");

    $(".active").removeClass("active");
    $(".left-column div img[data-image = " + color + "]").addClass("active");
    $(this).addClass("active");
  });
}