$(document).ready(function(){
    $('.jquery1').css("color", "red");
    var owl1 = $('.qwe1').owlCarousel({
  autoplay: true, // автопрокрутка
	nav:false, //Отключение навигации
  loop:true, // бесконечное зацикливание
	
	responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
  });

  owl1.owlCarousel();
  $('.next1').click(function() {
    owl1.trigger('next.owl.carousel', [800]);
  });
  $('.prev1').click(function() {
    owl1.trigger('prev.owl.carousel', [800]);
  });
// Карусель, выводится 6 элементов на странице my/carousel.php
  var owl2 = $('.qwe2').owlCarousel({
	nav:false, //Отключение навигации
	loop:true, // бесконечное зацикливание
	responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:6
                    }
                }
  });

  owl2.owlCarousel();
  $('.next2').click(function() {
    owl2.trigger('next.owl.carousel', [600]);
  });
  $('.prev2').click(function() {
    owl2.trigger('prev.owl.carousel', [300]);
  });
  $('#slider1').hover(function() {
$('.strelka1').fadeIn();
  },// end hover
  function() {
    $('.strelka1').fadeOut();
  }
  ); 

  $('#slider2').hover(function() {
  $('.strelka2').fadeIn();
  },// end hover
  function() {
    $('.strelka2').fadeOut();
  }
  );
  /*
  $('.cart1').on('click', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
      $.ajax({
          url: '/cart/add',
          data: {id: id},
          type: 'GET',
          success: function(res) {
              if(!res) alert('Ошибка!');
              console.log(res);
              showCart(res);
          },
          error: function() {
          	  alert('Error');
          }
      });
  });
  */
  /*
Согласие
при клике div убирает
$('.solgldiv').css('display','none');
Затем, при перезагрузке страницы, на опеределенное время (180 секунд)
div убирает наличие куки soglasye
*/
  $('.sogl1').on('click', function(e) {
    e.preventDefault();
    $('.footer-soglasye').css('display','none');
    /*
    https://learn.javascript.ru/cookie
    Записываем куки
    max-age - через сколько секунд будет удалено куки
    */
    document.cookie = "soglasye=sogl; max-age=180";
  });
  
});
