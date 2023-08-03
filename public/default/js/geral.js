jQuery(function() {

    /*  Máscaras Campos */
    var behavior = function(val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
        options = {
            onKeyPress: function(val, e, field, options) {
                field.mask(behavior.apply({}, arguments), options);
            }
        };

    $('.telefone, #celular').mask(behavior, options);


    var cpf = function(val) {


        return '000.000.000-00';
    },
        opcoes = {
            onKeyPress: function(val, e, field, options) {
                field.mask(cpf.apply({}, arguments), options);
            }
        };

    $('.cpf').mask(cpf, opcoes);

    $('.mask-money').mask("#.##0,00", {reverse: true});

    $('.hora').mask('00:00');

    $('.dia').mask('00/00/0000');

    var cnpj = function(val) {
        return '00.000.000/0000-00';
    },
        opcoes = {
            onKeyPress: function(val, e, field, options) {
                field.mask(cnpj.apply({}, arguments), options);
            }
        };

    $('.cnpj').mask(cnpj, opcoes);

    /*  Bar Fixed   */
    $(window).on('scroll', function() {
        if($(this).scrollTop() > 280 && window.innerWidth >= 992) {
            $('.fixed-bar').removeClass('hidden');
            $('.botao_whatsapp').addClass('scroll');
            $('body').addClass('compensar');
            $('.menu-fixed').addClass('fixed');
        } else {
            $('.fixed-bar').addClass('hidden');
            $('.botao_whatsapp').removeClass('scroll');
            $('body').removeClass('compensar');
            $('.menu-fixed').removeClass('fixed');
        }

    });

    /* FUNCTION RESIZE */
    var resolucao_progrmaacao = 1920;
    var resolucao_minima = 992;

    window.onresize = function() {
        redimensionar();
    };

    function redimensionar() {
        var largura = window.innerWidth;
        if(largura >= resolucao_minima && resolucao_progrmaacao > largura) {
            var proporcao = (largura / resolucao_progrmaacao);
            $('body').css('zoom', proporcao);
        } else {
            $('body').css('zoom', 'unset');
        }
    }

    redimensionar();

    setTimeout(function() {
        window.dispatchEvent(new Event('resize'));

        setTimeout(() => {
            $("#preloader").fadeOut('slow');
        }, 200);
    }, 500);
});

// //Checkboxs
// function toggleActive(childElement) {
//     if (childElement.parentNode.classList.contains('active')) {
//     // Remove a classe 'active' do elemento pai
//         childElement.parentNode.classList.remove('active');
//     }
//     else {
//     // Adiciona a classe 'active' ao elemento pai
//         childElement.parentNode.classList.add('active');
//     }
// }
// //ClearMarks
// window.addEventListener('removeFilterActiveClass', function () {
//     let filterItems = document.querySelectorAll('.item-category');

//     filterItems.forEach(function (item) {
//         item.classList.remove('active');
//     });
// });
// //ClearType
// window.addEventListener('removeFilterActiveClassType', function () {
//     let filterItems = document.querySelectorAll('.item-category-2');

//     // Remove a classe "active" dos elementos que possuem a classe "item-category-2"
//     filterItems.forEach(function (item) {
//         item.classList.remove('active');
//     });
// });
// //Remove class active-2 of todos
// document.addEventListener('DOMContentLoaded', function() {
//     let filterItems = document.querySelectorAll('.item-category');

//     filterItems.forEach(item => {
//         item.addEventListener('click', function() {
//             let clearBtn = document.querySelector('.clear-btn');
//             clearBtn.classList.remove('active-2');
//         });
//     })

//     let filterItems2 = document.querySelectorAll('.item-category-2');
//         filterItems2.forEach(item2 => {
//         item2.addEventListener('click', function() {
//             let clearBtn = document.querySelector('.clear-btn-2');
//             clearBtn.classList.remove('active-3')
//         })
//     })
//     let clearBtn = document.querySelector('.clear-btn');
//         clearBtn.addEventListener('click', function () {
//         clearBtn.classList.add('active-2');
//     })
//     let clearBtn2 = document.querySelector('.clear-btn-2');
//         clearBtn2.addEventListener('click', function () {
//         clearBtn2.classList.add('active-3');
//     })
// });