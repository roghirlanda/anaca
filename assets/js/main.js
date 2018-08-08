(function($) {
	$(document).ready(function(){		
		// HOME
		$('.bxslider').bxSlider({
			controls: true,
    		pager: true,
		});
		$('.bxslider-jardins').bxSlider();


		var alturaBoxUnidades = $(".box-unidades").height() - 5;
		var alturaUnidades = $(".box-unidades li").height();

		$(".topo-box-form").css("height", alturaUnidades);
		$(".box-form-unidades").css("height", alturaBoxUnidades);
		// FIM DO HOME


		// FAQ
		var altBoxFaq = $(".box-trabalhe-conosco-1").height();
		$(".box-trabalhe-conosco-2").css("height", altBoxFaq);
		
		var alturaBtnFaq = $(".titulo-faq").height() + 10;
		$("li[class^='faq-']").css("height", alturaBtnFaq);

		var numeroFaq;
		var faqSelecionado;

		function mostraFaq(){
			$("li[class^='faq-']").css("height", alturaBtnFaq);
			faqSelecionado = ".faq-" + numeroFaq
			$(faqSelecionado).css('height', 'auto');
		}
		$("li[class^='faq-']").on('click', function(){
			numeroFaq = $(this).attr('class').split('-')[1];
			mostraFaq();
		})

		// AULAS
		var modalidadeAula;
		var listaSelecionada;

		function mostraAulas (){
			$("div[id^='lista-aula-']").css('display', 'none');
			$(".menu-aulas li").css({
				'border-radius' : '10px',
				'background' : 'transparent',
				'color' : '#620c39'  
			});
			listaSelecionada = "#lista-aula-" + modalidadeAula;
			$(listaSelecionada).css("display", "block");
		};

		$(".menu-aulas li").on('click', function(){
			modalidadeAula = $(this).attr('id');
			mostraAulas ();
			$(this).css({
				'border-radius' : '10px',
				'background' : '#620c39',
				'color' : '#FFF'  
			});
		});
		
		// PROFISSIONAIS
		var nprofissional;
		var vprofissional;
		var avatarSelect;

		function mostraProfissional() {
			$("div[class^='mini-avatar-']").css('opacity', .5);
			avatarSelect = '.mini-avatar-' + nprofissional;
			$(avatarSelect).css('opacity', 1);
			$("div[class^='bio-']").css('display', 'none');
			vprofissional = ".bio-" + nprofissional;
			$(vprofissional).css('display', 'block');
		}
		// PROFISSIONAIS
		$("div[class^='mini-avatar-']").on('click', function(){
			nprofissional = $(this).attr('class').split('-')[2];
			mostraProfissional();

		});

		// MENU ALFABETICO
		var letraSelecionada = 'a';

		$(".menu-alfabetico li").on('click', function(){
			$("li[name]").css('display', 'none');
			$(".menu-alfabetico li").css({
				'background' : 'transparent',
				'color' : '#58585a'
			})
			$(this).css({
				'background' : '#620c39',
				'color' : '#FFF',
				'border-radius': '5px'
			})
			letraSelecionada = $(this).text();

			switch (letraSelecionada) {
			  case "a":
			    $("li[name^='a']").css('display', 'block');
			    break;
			  case "b":
			    $("li[name^='b']").css('display', 'block');
			    break;
			  case "c":
			    $("li[name^='c']").css('display', 'block');
			    break;
			  case "d":
			    $("li[name^='d']").css('display', 'block');
			    break;
			  case "e":
			    $("li[name^='e']").css('display', 'block');
			    break;
			  case "f":
			    $("li[name^='f']").css('display', 'block');
			    break;
			  case "g":
			    $("li[name^='g']").css('display', 'block');
			    break;
			  case "h":
			    $("li[name^='h']").css('display', 'block');
			    break;
			  case "i":
			    $("li[name^='i']").css('display', 'block');
			    break;
			  case "j":
			    $("li[name^='j']").css('display', 'block');
			    break;
			  case "k":
			    $("li[name^='k']").css('display', 'block');
			    break;
			  case "l":
			    $("li[name^='l']").css('display', 'block');
			    break;
			  case "m":
			    $("li[name^='m']").css('display', 'block');
			    break;
			  case "n":
			    $("li[name^='n']").css('display', 'block');
			    break;
			  case "o":
			    $("li[name^='o']").css('display', 'block');
			    break;
			  case "p":
			    $("li[name^='p']").css('display', 'block');
			    break;
			  case "q":
			    $("li[name^='q']").css('display', 'block');
			    break;
			  case "r":
			    $("li[name^='r']").css('display', 'block');
			    break;
			  case "s":
			    $("li[name^='s']").css('display', 'block');
			    break;
			  case "t":
			    $("li[name^='t']").css('display', 'block');
			    break;
			  case "u":
			    $("li[name^='u']").css('display', 'block');
			    break;
			  case "v":
			    $("li[name^='v']").css('display', 'block');
			    break;
			  case "w":
			    $("li[name^='w']").css('display', 'block');
			    break;
			  case "x":
			    $("li[name^='x']").css('display', 'block');
			    break;
			  case "y":
			    $("li[name^='y']").css('display', 'block');
			    break;
			  case "z":
			    $("li[name^='z']").css('display', 'block');
			    break;
			  default:
			}
		});

		// SLIDER COM THUMB
		if ($('.bxslider2 img').length > 0) {
    
  // Cache the thumb selector for speed
  var thumb = $('#gallery-thumbs').find('.thumb');

  // How many thumbs do you want to show & scroll by
  var visibleThumbs = 8;

  // Put slider into variable to use public functions
  var gallerySlider = $('.bxslider2').bxSlider({
    controls: false,
    pager: false,
    easing: 'easeInOutQuint',
    infiniteLoop: false,
    speed: 500,
    nextText: '&gt;',
    prevText: '&lt;',

    onSlideAfter: function ($slideElement, oldIndex, newIndex) {
      thumb.removeClass('pager-active');
      thumb.eq(newIndex).addClass('pager-active');
      // Action next carousel slide on one before the end, so newIndex + 1
      slideThumbs(newIndex + 1, visibleThumbs);
    }
  });

  // When clicking a thumb
  thumb.click(function (e) {

    // -6 as BX slider clones a bunch of elements
    gallerySlider.goToSlide($(this).closest('.thumb-item').index());

    // Prevent default click behaviour
    e.preventDefault();
  });

  // Function to calculate which slide to move the thumbs to
  function slideThumbs(currentSlideNumber, visibleThumbs) {

    // Calculate the first number and ignore the remainder
    var m = Math.floor(currentSlideNumber / visibleThumbs);
    // Multiply by the number of visible slides to calculate the exact slide we need to move to
    var slideTo = m;

    // Tell the slider to move
    thumbsSlider.goToSlide(slideTo);
  }

  // When you click on a thumb
  $('#gallery-thumbs').find('.thumb').click(function () {

    // Remove the active class from all thumbs
    $('#gallery-thumbs').find('.thumb').removeClass('pager-active');

    // Add the active class to the clicked thumb
    $(this).addClass('pager-active');

  });


  // Thumbnail slider
  var thumbsSlider = $('#gallery-thumbs').bxSlider({
    controls: false,
    pager: false,
    easing: 'easeInOutQuint',
    //displaySlideQty: visibleThumbs,
    //moveSlideQty: visibleThumbs,
    infiniteLoop: false,
    minSlides: visibleThumbs,
    maxSlides: visibleThumbs,
  });



}
	});
})( jQuery );



