if (localStorage.email){$('input[type="email"]').val(localStorage.email);}
if (localStorage.name){$('input[name="name"]').val(localStorage.name);}
if (localStorage.phone){$('input[type="tel"]').val(localStorage.phone);}

$(function() {
  $("[name=send]").click(function (e) {
   var btn = $(this);
   var form = $(this).closest('form');

   $(":input.error").removeClass('error');
   $(".allert").remove();

   var error;
   var ref = btn.closest('form').find('[required]');
   var loc = ymaps.geolocation.city+', '+ymaps.geolocation.region+', '+ymaps.geolocation.country;

   $('[name=city').val(loc);
   $('[name=kolichestvo_mesyacev]').val($('#slider_month-value').text());
   $('[name=summa_kredita]').val($('#slider_sum-value').text());
   $('[name=total_sum]').val($('#total_sum').text());

   var msg = btn.closest('form').find('input, textarea, select');
   var short_msg = btn.closest('form').find('[name=project_name], [name=admin_email], [name=form_subject], [name=city], [name=page_url], [name=user_agent], [type="text"], [type="email"], [type="tel"], select, .checked.input_type, .checked.input_currency, [name=summa_kredita], [name=kolichestvo_mesyacev], [name=total_sum]');
   var calc_msg = btn.closest('form').find('select, .checked.input_type, .checked.input_currency, [name=summa_kredita], [name=kolichestvo_mesyacev], [name=total_sum]');
   var msg = btn.closest('form').find('input, textarea, select');
   var send_btn = btn.closest('form').find('[name=send]');
   var send_adress = btn.closest('form').find('[name=send_adress]').val();
   var send_options = btn.closest('form').find('[name=campaign_token]');;
   var formType = btn.closest('form').find('[name=form_type]').val();
   var redirect = btn.closest('form').find('[name=redirect]').val();
   var goal = btn.closest('form').find('[name=goal]').val();
   var alertImage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.1 286.1"><path d="M143 0C64 0 0 64 0 143c0 79 64 143 143 143 79 0 143-64 143-143C286.1 64 222 0 143 0zM143 259.2c-64.2 0-116.2-52-116.2-116.2S78.8 26.8 143 26.8s116.2 52 116.2 116.2S207.2 259.2 143 259.2zM143 62.7c-10.2 0-18 5.3-18 14v79.2c0 8.6 7.8 14 18 14 10 0 18-5.6 18-14V76.7C161 68.3 153 62.7 143 62.7zM143 187.7c-9.8 0-17.9 8-17.9 17.9 0 9.8 8 17.8 17.9 17.8s17.8-8 17.8-17.8C160.9 195.7 152.9 187.7 143 187.7z" fill="#E2574C"/></svg>';

   localStorage.name = form.find('input[name="name"]').val();
   localStorage.email = form.find('input[type="email"]').val();
   localStorage.phone = form.find('input[type="tel"]').val();


   $(ref).each(function() {
    if ($(this).val() == '') {
      var errorfield = $(this);
      $(this).addClass('error').parent('.field').append('<div class="allert"><span>Заполните это поле</span>' + alertImage + '</div>');
      error = 1;
      $(":input.error:first").focus();
      return;
    } else {
      var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
      if ($(this).attr("type") == 'email') {
        if (!pattern.test($(this).val())) {
          $("[name=email]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите коректный e-mail</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
      var patterntel = /^()[- +()0-9]{9,18}/i;
      if ($(this).attr("type") == 'tel') {
        if (!patterntel.test($(this).val())) {
          $("[name=phone]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите номер телефона в формате +3809999999</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
    }
  });
   if (!(error == 1)) {
    $(send_btn).each(function() {
      $(this).attr('disabled', true);
    });
    dataLayer.push({
      'event': 'formSubmit',
      'form_type': goal,
      'calc_data' : calc_msg
    });
     // Отправка в Google sheets
     $.ajax({
      type: 'POST',
      url: '',
      dataType: 'json',
      data: msg,
    });
    // Отправка на почту
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: short_msg,
      success: function() {
        setTimeout(function() {
          $("[name=send]").removeAttr("disabled");
        }, 1000);
          // Отправка в базу данных
          $.ajax({
           type: 'POST',
           url: 'db/registration.php',
           dataType: 'json',
           data: form.serialize(),
           success: function(response) {
             console.info(response);
             console.log(form.serialize());
             if (response.status == 'success') {
              $('form').trigger("reset");
              $('div.md-show').removeClass('md-show');
              window.location.href = 'http://lp.afa.com.ua/success';
            }
          }
        });
      },
      error: function(xhr, str) {
        console.log("Erorr")
      }
    });
  }
  return false;
})
});

 // Smooth scroll to anchor

 $('.scroll').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 1000);
  return false;
});

//  INPUT TEL MASK

jQuery(function($){
 $("input[type='tel']").mask("+38 (999) 999-9999");
});


$(document).ready(function(){
 $('.slider_testimonials').slick({
    slidesToShow: 1,
    dots: false,
    arrows: false,
    fade: true,
    slidesToScroll: 1,
    asNavFor: '.slider_control'
  });
});

$(document).ready(function(){
 $('.slider_control').slick({
    slidesToShow: 1,
    dots: false,
    arrows: true,
    fade: true,
    slidesToScroll: 1,
    asNavFor: '.slider_testimonials'
  });
});


// INPUT STYLIZATION

(function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
                return this.replace(rtrim, '');
            };
        })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
        // in case the input is already filled..
        if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
        }

        // events:
        inputEl.addEventListener( 'focus', onInputFocus );
        inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
        classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
        if( ev.target.value.trim() === '' || ev.target.value.trim() == '(___) ___-____' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
        }
    }
})();


// Scroll BAR

$(window).scroll(function() {
    // calculate the percentage the user has scrolled down the page
    var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

    $('.bar-long').css('width', scrollPercent +"%"  );

  });


//YOUTUBE

$(function() {
  $(".youtube").each(function() {
    $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');

    $(this).append($('<div/>', {'class': 'play'}));

    $(document).delegate('#'+this.id, 'click', function() {
      var iframe_url = "https://www.youtube.com/embed/" + this.id + "?rel=0&autoplay=1&autohide=1";
      if ($(this).data('params')) iframe_url+='&'+$(this).data('params');

      var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })

      $(this).replaceWith(iframe);
    });
  });
});

//  UP BUTTON

$( document ).ready(function() {
  $('#scrollup img').mouseover( function(){
    $( this ).animate({opacity: 0.65},100);
  }).mouseout( function(){
    $( this ).animate({opacity: 1},100);
  });

  $(window).scroll(function(){
    if ( $(document).scrollTop() > 0 ) {
      $('#scrollup').fadeIn('slow');
    } else {
      $('#scrollup').fadeOut('slow');
    }
  });

  $('#scrollup').click(function() {
    $('body,html').animate({scrollTop:0},1000);
  });
});

// PREVENT SCROLLING

$('.md-trigger').click(function() {
  $("body").addClass('unscroll');
});

$('.md-close').click(function() {
  $("body").removeClass('unscroll');
});

$('.md-overlay').click(function() {
  $("body").removeClass('unscroll');
});


//animate
    var decimal_places = 1;
    var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 1;

// waypoints
$('#sec_06').waypoint(
    function() {
        if ($("#sec_06").hasClass("animated")) {
        }
        else{
            $("#sec_06").addClass("animated");
        }
    },
    {offset: "150px"}

);

$('#sec_09').waypoint(
    function() {
        if ($("#sec_09").hasClass("animated")) {
        }
        else{
            $("#sec_09").addClass("animated");
        }
    },
    {offset: "250px"}
);

$('#sec_11').waypoint(
    function() {
        if ($("#sec_11").hasClass("number")) {
        }
        else{
            $("#sec_11").addClass("number");
            $('.first_animate_number').animateNumber(
            {
                number: 600 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text(floored_number + ' +');
                }
            },
            2000
            );

            $('.second_animate_number').animateNumber(
            {
                number: 2670000 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text('$ ' + floored_number + ' +');
                }
            },
            2000
            );

            $('.third_animate_number').animateNumber(
            {
                number: 10500 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text('$ ' + floored_number);
                }
            },
            2000
            );

            $('.fourth_animate_number').animateNumber(
            {
                number: 60 * decimal_factor,

                numberStep: function(now, tween) {
                    var floored_number = Math.floor(now) / decimal_factor,
                    target = $(tween.elem);
                    if (decimal_places > 0) {
                        floored_number = floored_number.toFixed();
                    }

                    target.text(floored_number + ' +');
                }
            },
            2000
            );
        }
    },
    {offset: "550px"}

);


// ====== Google Maps =====

function init() {

    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(50.437580, 30.527281),
        mapTypeControl: false,
        scrollwheel: false,
        streetViewControl: false,
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
      };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    var markerImage = new google.maps.MarkerImage('img/mapmarker.png');

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(50.437580, 30.527281),
      map: map,
      title: 'Snazzy!',
      icon: markerImage
    });
  }

  $(document).ready(init);

// Menu

$(document).ready(function() {
    (function() {
      var i, resize;

      i = setInterval(function() {
        return $("#nav .wrapper").toggleClass("cross");
    }, 1500);

      $("#nav .wrapper").click(function() {
        clearInterval(i);
        if($('#nav').hasClass('open')){
            return $("#nav .wrapper").addClass("cross");
        } else {
            return $("#nav .wrapper").removeClass("cross");
        }
    });
      $('.callback').click(function(){
        clearInterval(i);
        $("#nav .wrapper").addClass("cross");
      });
  }).call(this);

    $('#menu').click(function(){
        $('#nav').toggleClass('open');
        $('body').toggleClass('unscroll');
    });

    $('#nav li a').click(function(){
      $('#nav').removeClass('open');
      $('body').removeClass('unscroll');
      $("#nav .wrapper").removeClass("cross");
    })

});

// Calculator

var slider_sum = document.getElementById('slider_sum');

noUiSlider.create(slider_sum, {
 start: [500],
 connect: true,
 step: 100,
 connect: [true, false],
 range: {
   'min': 500,
   '17%' : [5000,  1000],
   '33%' : [20000,  2000],
   '50%' : [100000,  5000],
   '66%' : [200000,  10000],
   '83%' : [350000,  10000],
   'max': 500000
 },
 pips: {
    mode: 'range',
    stepped: true,
    density: 2
  },
  format: wNumb({
    decimals: 0,
  })
});


function updateSliderUsd () {
  slider_sum.noUiSlider.updateOptions({
    step: 100,
    range: {
      'min': 500,
      '17%' : [5000,  1000],
      '33%' : [20000,  2000],
      '50%' : [100000,  5000],
      '66%' : [200000,  10000],
      '83%' : [350000,  10000],
      'max': 500000
    },
  });
  var pips = slider_sum.querySelector('.noUi-pips'); pips.parentElement.removeChild(pips);

  slider_sum.noUiSlider.pips(slider_sum.noUiSlider.options.pips);
}

function updateSliderUah () {
  slider_sum.noUiSlider.updateOptions({
    step: 1000,
    range: {
      'min': 10000,
      '17%' : [50000,  5000],
      '33%' : [200000,  10000],
      '50%' : [1000000,  10000],
      '66%' : [2000000,  20000],
      '83%' : [5000000,  50000],
      'max': 10000000
    }
  });
  // Remove current pips
  var pips = slider_sum.querySelector('.noUi-pips'); pips.parentElement.removeChild(pips);

  slider_sum.noUiSlider.pips(slider_sum.noUiSlider.options.pips);

}

uah.addEventListener('click', function(){
  updateSliderUah();
});

usd.addEventListener('click', function(){
  updateSliderUsd();
});



var sliderSumValueElement = document.getElementById('slider_sum-value');

slider_sum.noUiSlider.on('update', function( values, handle ) {
  var fixedValues = Number(values[handle]).toFixed();
  if ($('#usd').hasClass('checked')) {
    sliderSumValueElement.innerHTML =  '$ ' + fixedValues;
  } else if ($('#uah').hasClass('checked')) {
    sliderSumValueElement.innerHTML =  '₴ ' + fixedValues;
  }
});


var slider_month = document.getElementById('slider_month');
noUiSlider.create(slider_month, {
  start: [1],
  connect: true,
  step: 1,
  connect: [true, false],
  range: {
   'min': 1,
   '19%' : [6,  1],
   '40%' : [12,  1],
   '60%' : [18,  1],
   '80%' : [24,  1],
   'max': 30
  },
  pips: {
    mode: 'range',
    stepped: true,
    density: 3.5
  },
  format: wNumb({
    decimals: 0,
  })
});




var sliderMonthValueElement = document.getElementById('slider_month-value');

slider_month.noUiSlider.on('update', function( values, handle ) {
  var fixedValues = Number(values[handle]).toFixed();
  sliderMonthValueElement.innerHTML = fixedValues + ' мес.';
});

// Обработчик выбора типа кредита

$('.input_type').click(function(event) {
  $('.input_type').removeClass('checked');
  $(this).addClass('checked');
  slider_month.noUiSlider.reset();
  slider_sum.noUiSlider.reset();
});


$('.input_currency').click(function(event) {
  $('.input_currency').removeClass('checked');
  $(this).addClass('checked');
  $('.input_currency').val('');
  $(this).val('chek');
  if($('#uah').hasClass('checked')){
    updateSliderUah();
  }
  slider_month.noUiSlider.reset();
  slider_sum.noUiSlider.reset();
});

// Поля для ввода значений

var totalSum = document.getElementById('total_sum');
var totalMonth = document.getElementById('total_month');
var repaymentTypeValue = document.getElementById('repayment_type_value');
var repaymentTypeLabel = document.getElementById('repayment_type_label');


// Обработчик слайдера суммы

slider_sum.noUiSlider.on('update', function(  values, handle ) {
  var sliderSumValue = +Number(slider_sum.noUiSlider.get()).toFixed();
  var sliderMonthValue = +Number(slider_month.noUiSlider.get()).toFixed();

  if($('#usd').hasClass('checked')){
    totalMonth.innerHTML = sliderMonthValue + ' мес.';
    if ($('#only_percents').hasClass('checked')){
      totalSum.innerHTML = '$ ' + (sliderSumValue + (sliderSumValue * 0.02 * sliderMonthValue));
      repaymentTypeValue.innerHTML = '$ ' + sliderSumValue * 0.02
      + '<div> <p class="value_label repayment_type_label">Последний платеж : </p> <p class="payments_value">$ ' + sliderSumValue + '</p> </div>';
    } else if ($('#equal_parts').hasClass('checked')){
        totalSum.innerHTML = '$ ' + (sliderSumValue + (sliderSumValue * 0.02 * sliderMonthValue));
        repaymentTypeValue.innerHTML = '$ ' + (((sliderSumValue + (sliderSumValue * 0.02 * sliderMonthValue)).toFixed()/sliderMonthValue).toFixed());
    } else {
      repaymentTypeLabel.innerHTML = 'Платеж по кредиту: ';
      totalSum.innerHTML = '$ ' + (+sliderSumValue + +((sliderSumValue * 24 * (sliderMonthValue +1))/(2400)).toFixed());
      repaymentTypeValue.innerHTML = '$ ' + (((sliderSumValue * 24 * (sliderMonthValue +1))/(2400)).toFixed());
    }
  } else if ($('#uah').hasClass('checked')){
    totalMonth.innerHTML = sliderMonthValue + ' мес.';
    if ($('#only_percents').hasClass('checked')){
      totalSum.innerHTML = '₴ ' + (sliderSumValue + (sliderSumValue * 0.04 * sliderMonthValue));
      repaymentTypeValue.innerHTML = '₴ ' + sliderSumValue * 0.04
      + '<div> <p class="value_label repayment_type_label">Последний платеж : </p> <p class="payments_value">₴ ' + sliderSumValue + '</p> </div>';
    } else if ($('#equal_parts').hasClass('checked')){
        totalSum.innerHTML = '₴ ' + (sliderSumValue + (sliderSumValue * 0.04 * sliderMonthValue));
        repaymentTypeValue.innerHTML = '₴ ' + (((sliderSumValue + (sliderSumValue * 0.04 * sliderMonthValue)).toFixed()/sliderMonthValue).toFixed());
    } else {
      repaymentTypeLabel.innerHTML = 'Платеж по кредиту: ';
      totalSum.innerHTML = '₴ ' + (+sliderSumValue + +((sliderSumValue * 48 * (sliderMonthValue +1))/(2400)).toFixed());
      repaymentTypeValue.innerHTML = '₴ ' + (((sliderSumValue * 48 * (sliderMonthValue +1))/(2400)).toFixed());
    }
  }
});

// Обработчик слайдера месяца

slider_month.noUiSlider.on('update', function( values, handle ) {
  var sliderSumValue = +Number(slider_sum.noUiSlider.get()).toFixed();
  var sliderMonthValue = +Number(slider_month.noUiSlider.get()).toFixed();

  if($('#usd').hasClass('checked')){
    totalMonth.innerHTML = sliderMonthValue + ' мес.';

    if ($('#only_percents').hasClass('checked')){
      totalSum.innerHTML = '$ ' + (sliderSumValue + (sliderSumValue * 0.02 * sliderMonthValue));
    } else if ($('#equal_parts').hasClass('checked')){
        totalSum.innerHTML = '$ ' + (sliderSumValue + (sliderSumValue * 0.02 * sliderMonthValue));
        repaymentTypeValue.innerHTML = '$ ' + (((sliderSumValue + (sliderSumValue * 0.02 * sliderMonthValue)).toFixed()/sliderMonthValue).toFixed());
    } else {
      totalSum.innerHTML = '$ ' + (+sliderSumValue + +((sliderSumValue * 24 * (sliderMonthValue +1))/(2400)).toFixed());
      repaymentTypeValue.innerHTML = '$ ' + (((sliderSumValue * 24 * (sliderMonthValue +1))/(2400)).toFixed());
    }
  } else if ($('#uah').hasClass('checked')){
    if ($('#only_percents').hasClass('checked')){
      totalSum.innerHTML = '₴ ' + (sliderSumValue + (sliderSumValue * 0.04 * sliderMonthValue));
    } else if ($('#equal_parts').hasClass('checked')){
        totalSum.innerHTML = '₴ ' + (sliderSumValue + (sliderSumValue * 0.04 * sliderMonthValue));
        repaymentTypeValue.innerHTML = '₴ ' + (((sliderSumValue + (sliderSumValue * 0.04 * sliderMonthValue)).toFixed()/sliderMonthValue).toFixed());
    } else {
      totalSum.innerHTML = '₴ ' + (+sliderSumValue + +((sliderSumValue * 48 * (sliderMonthValue +1))/(2400)).toFixed());
      repaymentTypeValue.innerHTML = '₴ ' + (((sliderSumValue * 48 * (sliderMonthValue +1))/(2400)).toFixed());
    }
  }
});
