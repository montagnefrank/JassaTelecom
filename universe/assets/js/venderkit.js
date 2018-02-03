/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
  $("#agregarfila").click(function() {
    $("div.serieadicional").append('<div class="seriea2" input-group">');
    $("div.seriea2").append('<span class="seriea3" input-group-addon">##</span>');
    $("span.seriea3").append('<input type="text" class="seriea4 form-control" placeholder="Ingrese serie"/>');
    $("input.seriea4").append('</div>');
  });
});
