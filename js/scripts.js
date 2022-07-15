$(document).ready(function(){
    $(".menu > li").click(function(event){
        event.stopPropagation()
        let seleccion = $(this).attr("data-producto"); 
        $(".menu li:not(#"+ seleccion +")").removeClass("activo")
        $("nav").addClass("activo");
        $(this).addClass("activo"); 
        $("header h1").removeClass("titulo")
    });

    $(".burger").click(function(){
        $(".burger i").toggleClass("activo");
        $(".menu").toggleClass("mostrar");
    });
    $("nav").click(function(){
        $("nav").removeClass("activo");
        $(".menu li").removeClass("activo")
        $("header h1").addClass("titulo")
    });
    $("header").click(function(){
        $("nav").removeClass("activo");
        $(".menu li").removeClass("activo")
        $("header h1").addClass("titulo")
    });
    $(".submenu").click(function(event){ 
        event.stopPropagation()
        $("nav").removeClass("activo");
        $(".menu li").removeClass("activo")
    })
    $(".mini").hover(function(){
        let seleccion = $(this).attr("data-imagen");
        let seccion = $(this).attr("data-seccion");
        $("#"+ seccion +" .mostrar img").addClass("esconder");
        $("#"+ seleccion ).removeClass("esconder")
    });
    //footer
    $(".final h5").click(function(){
        let seleccion = $(this).attr("data-desplegar")
        $("#"+seleccion).slideToggle();
        $("#mas-menos-" + seleccion + ".mas-menos i" ).toggleClass("suplantar")
      });
      //comparador
    $(".selector").click(function(){
        $(".tabla-comparador").removeClass("tapar");
        let imagen = $(this).children(".foto").attr("src");
        let info = $(this).children(".info").html(); 
        let ventana = $(window).width();

        if (!$(this).hasClass("activo")) {
            $(this).addClass("activo");
            if (!$("#columna-primera").hasClass("activo")) {
                $("#columna-primera").addClass("activo")
                $("#columna-primera").html(info)
                $("#columna-primera img").attr("src", imagen);
                $(this).attr("data-columna","primera")    
            }
            else if (!$("#columna-segunda").hasClass("activo")) {
                $("#columna-segunda").addClass("activo")
                $("#columna-segunda").html(info)
                $("#columna-segunda img").attr("src", imagen);
                $(this).attr("data-columna","segunda") 
            }
            else if (!$("#columna-tercera").hasClass("activo")) {
                console.log(ventana);
                if (ventana <= 1005) {
                    $(this).removeClass("activo");
                }
                else{
                    $("#columna-tercera").addClass("activo")
                    $("#columna-tercera").html(info)
                    $("#columna-tercera img").attr("src", imagen);
                    $(this).attr("data-columna","tercera") 
                }
            }
            else{
                $(this).removeClass("activo");
            }
        }
        else {
            $(this).removeClass("activo");
            let seleccion = $(this).attr("data-columna")
            $("#columna-"+ seleccion).html(" ")
            $("#columna-"+ seleccion).removeClass("activo")
        }
        if(!$("#columna-primera").hasClass("activo") && 
        !$("#columna-segunda").hasClass("activo") && 
        !$("#columna-tercera").hasClass("activo")){
            $(".tabla-comparador").addClass("tapar");
        }
    });
});