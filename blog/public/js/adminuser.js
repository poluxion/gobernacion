$(document).ready(function() {
    $(document).on("click", "#boton", function() {
        $.ajax({
            url: base + "/blogControllers/user_table",
            success: function(data) {
                $('#userV').html(data);
            }
        })
    });

    var array = [];
    $(document).on("click", "#profileBtn", function() {
        array = array;
        //alert(array);
        var usuario = $(this).attr('usuario');
        suiche = 0;
        // alert(array);
        //var usuarioArray = [];
        for (let valor of array) {
            if (valor == usuario) {
                suiche = 1;
                return;
                //  alert(valor);
            }
        }
        if (suiche == 1) {
            alert("El registro ya existe");
        } else {
            array.push(usuario);
            // for (let j = array[i]; j < usuarioArray.length; j++) {
            //     console.log(usuarioArray)
            // }
            $.ajax({
                url: base + "/blogControllers/obtenerName/" + usuario,
                type: 'POST',
                async: true,
                data: { usuario },
                success: function(data) {
                    $('#td2').append(data);

                }
            })
        }

    });


    $(document).on("click", "#enviar1", function() {
        ///  e.preventDefault();
        var num = $("#numero2").val();
        url2 = base + "/blogControllers/convert";
        datastring = "numero=" + num;
        alert(url2);
        $.ajax({

            async: false,
            url: url2,
            type: 'POST',
            data: datastring,
            success: function(data) {
                $('#respuesta').html(data);
            }
        })
    });

    ///ajax javascript jquer
})