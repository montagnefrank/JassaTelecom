$(document).on("click", ".showmodal", function (event){
    ////////////////////////////////////////////////////////////////////////////RECOLECTAMOS LA DATA
    var img1,img2,img3,title,subtitle,text;
    img1 = $(this).find(".image:eq(0) img").attr('src').split("/");
    img2 = $(this).find(".image:eq(1) img").attr('src').split("/");
    img3 = $(this).find(".image:eq(2) img").attr('src').split("/");
    title = $(this).find("h2").html();
    subtitle = $(this).find("p:eq(0)").html();
    text = $(this).find("p:eq(1)").html();
    
    ////////////////////////////////////////////////////////////////////////////MANDAMOS LA DATA AL MODAL
    $("#modalimg1 img").attr('src', "assets/img/portfolio/"+img1[3]);
    $("#modalimg2 img").attr('src', "assets/img/portfolio/"+img2[3]);
    $("#modalimg5 img").attr('src', "assets/img/portfolio/"+img3[3]);
    $("#modaltitulo").html(title);
    $("#modalsubtitulo").html(subtitle);
    $("#modaltexto").html(text);
});