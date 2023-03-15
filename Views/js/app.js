

$(document).ready(function () {
    
    let boletosApartados = "";
    const id_rifa =$('.tarjeta').attr("rifa");
    const tituloSorteo = $('#descripcion_sorteo').text();

    // Menu Responsivo
    $('#btn-responsive').click(function () {
        $('#menu-responsive').toggle()
    })

    // Desplegar boletos
    $('#verboletos').click(function () {
        $('.boletos-disponibles').toggle('slow');

    })

    // Agregar los boletos a apartar
    $('.boletoDisponible').click(function () {
        let id = $(this).attr('id');
        // Validar si ya esta apartado el boleto  
        if (boletosApartados.search(id) >= 0) {
            alert('El boleto ya esta apartado')
        }
        else {
            boletosApartados = boletosApartados + id;
            $('.boletos-apartados').append(`<p class="${id} 
            p-4 m-2 fa-solid boleto boletoApartado
            rounded  bg-teal-700 fa-ticket text-2xl 
            text-white">${id}</p>`)
            $(this).removeClass('bg-teal-700')
            $(this).removeClass('boletoDisponible')
            $(this).addClass('bg-gray-700');

            if ($('.boletoApartado') == null) {
                console.log('No hay ningun boleto apartado');
                return
            }
            // Elimiancion de los boletos
            $('.boletoApartado').click(function () {
                let valor = $(this).text();
                boletosApartados = boletosApartados.replace(valor, "")
                boleto = document.getElementById(valor);
                $(boleto).addClass('bg-teal-700')
                $(boleto).addClass('boletoDisponible')
                $(this).hide();
            });
        }

    });
    MostrarBoletos = function(){
        if (boletosApartados == '') {
            $('.content-boletos').text('No hay Boletos Apartados');
            $('formulario-boletos').hide();
        }
        else {
            $('.content-boletos').text(`Tus numeros de boletos son:  \n ${boletosApartados}`)
        }
    }
//    Formulario Boletos Apartados
    $(".apartarBoletos").click(function(){
       $('#confirmar').show();
       MostrarBoletos()
    })
    // Cerrar la modal
    $('#close-modal').click(function(){
        $('#confirmar').hide();
    })

    $('#formulario-boletos').submit(function(e){
        e.preventDefault();
        const url = location.href;
        const data = {
            boletos: boletosApartados,
            numero: $('#phone').val(),
            nombre: $('#first_name').val(),
            apellido: $('#last_name').val(),
            ciudad: "Arandas",
            estado: "Jalisco",
            rifa: id_rifa,

        }
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            beforeSend: function(){
                console.log('esperando respuesta');
            },
            success: function(response){
                console.log(response);
                const nombre = data.nombre+" "+data.apellido
                 Mensaje(data.boletos,nombre);
                Swal.fire({
                    title: 'Exito!',
                    text: 'Tus Boletos han sido Apartados',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }.then(location.reload()));
                
            }
        })
       
    })
    function Mensaje(boletos, nombre){
        const mensaje = `Hola, Aparté boletos para el Sorteo Express💫
    ${tituloSorteo}
    ——————————————
    🍀 5 BOLETOS:${boletos} , 
    
    Folio: 06668
    
    Nombre: ${nombre}
    
    🎫1 BOLETO POR $17
    5 BOLETOS POR $85
    10 BOLETOS POR $170
    50 BOLETOS POR $825
    100 BOLETOS POR $1,600
    ——————————————
    
    👇 CUENTAS DE PAGO AQUÍ:
    http://sorteoseltapatio.com/
    
    El siguiente paso es enviar foto del comprobante de pago por aquí!`

    window.open(`https://api.whatsapp.com/send?phone=523481270467&text=${mensaje}`)
 
    }
})