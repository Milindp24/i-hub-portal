$(document).ready(function(){
    setTimeout(function() {
        $('.alert-success').fadeOut('fast');
    }, 1000);
})


function getInstitutes(uid){
    // alert(uid.value);

    if(uid.value === '1037'){
        
        let html = '<option value="0" selected>Select Institute</option>';
        let items = [{
                inst_code: 101,
                inst_name: "Government MCA College,Maninagar"
            },
            {
                inst_code: 102,
                inst_name: "GOVERNMENT ENGINEERING COLLEGE, RAJKOT "
            },
            {
                inst_code: 103,
                inst_name: "L D INSTITUTE OF INDOLOGY, AHMEDABAD"
            },
        ];
        items.forEach((item) => {
            html += '<option value="' + item.inst_code + '" >' + item.inst_name + '</option>';
        });

        $('#institute_name').html(html);
    }
}

$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: true,
      autoplay:false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  })

  var a = 0;
$(window).scroll(function() {
    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }
});