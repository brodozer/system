$(".scrollTo").on("click", function (e) {
    e.preventDefault();
    var t = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(t).offset().top
    }, 300)
});


$(document).ready(function() {
    $("#aLink").fancybox({
        'width'             : '100%',
        'height'            : '100%',
        'autoScale'         : false,
        'transitionIn'      : 'none',
        'transitionOut'     : 'none',
    });
});


if(document.getElementById("hours","minutes","seconds","hours1","minutes1",'seconds1')) {
    var second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

    var countDown = new Date('Sep 30, 2020 00:00:00').getTime(),
    x = setInterval(function () {
        var now = new Date().getTime(),
        distance = countDown - now;
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

        document.getElementById('hours1').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes1').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds1').innerText = Math.floor((distance % (minute)) / second);
    }, second)
}
var system = new Swiper('.system-result .swiper-container', {
    slidesPerView: 1,
    spaceBetween: 40,
    centeredSlides: true,
    autoHeight: true,
    type: "fraction",
    navigation: {
      nextEl: '.system-button-next',
      prevEl: '.system-button-prev',
    },
    pagination: {
      el: '.system-pagination',
      clickable: true,
      type: "fraction",
    },
    keyboard: true,
    breakpoints: {
        994: {
            slidesPerView: 3,
            loop: true,
            autoHeight: true,
            spaceBetween: 0,
        }
    }
  });

  // var mForm = new Swiper('.multi-form .swiper-container', {
  //   slidesPerView: 1,
  //   spaceBetween: 20,
  //   autoHeight: true,
  //   simulateTouch: false,
  //   navigation: {
  //     nextEl: '.mform-next',
  //     prevEl: '.mform-prev',
  //   },
  //   mousewheel: false,
  //   keyboard: false,

  //     breakpoints: {
  //       992: {
  //           slidesPerView: 1,
  //           spaceBetween: 0,
  //           autoHeight: true,
  //           simulateTouch: true,
  //           mousewheel: false,
  //           keyboard: false,
  //       }
  //   }
  // });


var swiper = new Swiper(".slides .swiper-container", {
    slidesPerView: 1,
    centeredSlides: false,
    type: "fraction",
    pagination: {
        el: ".reviews-pagination",
        type: "fraction"
    },
    navigation: {
        nextEl: ".reviews-next-button",
        prevEl: ".reviews-prev-button"
    },
    breakpoints: {
        992: {
            slidesPerView: 5,
            centeredSlides: true,
            parallax: true,
            loop: true,
            autoHeight: false,
            spaceBetween: 60,
        }
    }
});


var galleryThumbs = new Swiper('.reviews-video .gallery-thumbs', {
    spaceBetween: 20,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.reviews-video .gallery-top', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.video-button-next',
        prevEl: '.video-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs
    },
    pagination: {
        el: '.video-pagination',
        clickable: true,
    }
});

var reinit_steps = function($wrap){
    //initForm();

    var currentTab = 0;
    $wrap.find('.tab').hide();
    showTab(currentTab);

    $wrap.find('.nextBtn').unbind('click').click(function(){
        nextPrev(1);
    });
    // $wrap.find('.prevBtn').unbind('click').click(function(){
    //     nextPrev(-1);
    // });

    function showTab(n) {
      var tab = $wrap.find('.tab');
      $(tab[n]).show();
      // if (n == 0) {
      //   $wrap.find('.prevBtn').hide();
      // } else {
      //  $wrap.find('.prevBtn').show();
      // }
      if (n == (tab.length - 1)) {
        $wrap.find('.nextBtn').html('ОБСУДИТЬ ЗАДАЧИ');
      } else {
        $wrap.find('.nextBtn').html('ДАЛЕЕ');
      }
    }

    function nextPrev(n) {
        var form = $wrap;
        var tab = $wrap.find('.tab');
        if (n == 1 && !validateForm(tab)) {
            return false;
        }             
        $(tab[currentTab]).hide();    
        currentTab = currentTab + n;          
        if (currentTab >= tab.length) {         
            form.submit();

            setTimeout(function(){

                $(form).find('input').val('');
                currentTab = 0;
                showTab(currentTab);
            },2000);
            
            return false;
        }
        showTab(currentTab);
    }

    function validateForm(a) {  
      var valid = true;
      var input = $(a[currentTab]).find('input');
      $(input).unbind('.blur').blur();
      if ($(input).hasClass('error')) {
       valid = false;
      }
      return valid;
    }   
}

reinit_steps($('#form2'));

AOS.init({
    duration: 800,
    offset: 0
});

new_form.init({
    phone_mask: '+7(___)___-__-__',
    own: 'ajax/envysend.php',
    thanks_selector: '',
    thanks_timeout: 1,
    thanks_function: function () {
        $.fancybox.open('<div class="message"><h2>Спасибо за заявку!</h2></div>');
    }
});

var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy",
    threshold: 300
});

$("img.svg").each(function () {
    var e = $(this);
    e.css({
        display: "none"
    });
    var t = e.attr("id"),
        r = e.attr("class"),
        a = e.attr("src");
    $.get(a, function (a) {
        var o = $(a).find("svg");
        void 0 !== t && (o = o.attr("id", t)), void 0 !== r && (o = o.attr("class", r + " replaced-svg")), !(o = o.removeAttr("xmlns:a")).attr("viewBox") && o.attr("height") && o.attr("width") && o.attr("viewBox", "0 0 " + o.attr("height") + " " + o.attr("width")), e.replaceWith(o)
    }, "xml")
});