// $(document).ready(function () {
//     // Navbar desplegable
//     $('#btn-responsive').click(function () {
//         console.log('click');
//         $('#menu-responsive').toggle()
//     })
//     //     // Desplegar boletos
//     $('#verboletos').click(() => {
//         $('.boletos-disponibles').toggle('hidden');
//     })
//     // Agregar los boletos a apartar
//     $('.boletoDisponible').click(function () {
//         let id = $(this).attr('id');
//         console.log(boletosApartados);
//         // Validar si ya esta apartado el boleto
//         if (boletosApartados.search(id) >= 0) {
//             alert('El boleto ya esta apartado')

//         }
//         else {
//             boletosApartados = boletosApartados + id;
//             boletosApartados.concat("|");

//             $('.boletos-apartados').append(`<p class="${id} p-4 m-2 fa-solid boleto boletoApartado  rounded  bg-teal-700 fa-ticket text-2xl text-white">${id}</p>`)
//             $(this).removeClass('bg-teal-700')
//             $(this).removeClass('boletoDisponible')
//             $(this).addClass('bg-gray-700');

//             if ($('.boletoApartado') == null) {
//                 console.log('No hay ningun boleto apartado');
//                 return
//             }
//             // Elimiancion de los boletos
//             $('.boletoApartado').click(function () {
//                 let valor = $(this).text();
//                 boletosApartados = boletosApartados.replace(valor, "")
//                 console.log(boletosApartados);
//                 boleto = document.getElementById(valor);
//                 $(boleto).addClass('bg-teal-700')
//                 $(boleto).addClass('boletoDisponible')
//                 $(this).hide();
//             })
//         }

//     })

// });


$(document).ready(function () {
    // Variables del documento
    const btnResponsive = $('#btn-responsive');
    const menuResposive = $('#menu-responsive');
    let boletosApartados = "";

    $(btnResponsive).click(function(){
        $(menuResposive).toggle()
    })

         // Desplegar boletos
    $('#verboletos').click(function(){
        $('.boletos-disponibles').toggle('slow');
        $(this).rotate({endDeg: 180, persist:true});
       
    })
    // Agregar los boletos a apartar
    $('.boletoDisponible').click(function () {
        let id = $(this).attr('id');
        console.log(boletosApartados);
        // Validar si ya esta apartado el boleto  
        if (boletosApartados.search(id) >= 0) {
            alert('El boleto ya esta apartado')

        }
        else {
            boletosApartados = boletosApartados + id;
            boletosApartados.concat("|");

            $('.boletos-apartados').append(`<p class="${id} p-4 m-2 fa-solid boleto boletoApartado  rounded  bg-teal-700 fa-ticket text-2xl text-white">${id}</p>`)
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
                console.log(boletosApartados);
                boleto = document.getElementById(valor);
                $(boleto).addClass('bg-teal-700')
                $(boleto).addClass('boletoDisponible')
                $(this).hide();
            })
        }

    })
})