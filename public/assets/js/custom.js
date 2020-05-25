$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        nav: false,
        loop: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })

    $('.st-toggle').click(function(){
        if($('.st-toggleable').hasClass('st-hidden')){
            $('.st-toggleable').removeClass('st-hidden');
        }
        else{
            $('.st-toggleable').addClass('st-hidden')
        }
    })

    $(".has-children").hover( function () {
        $(this).addClass("open");
    },
    function () {
        $(this).removeClass("open");
    });
})

function showdesc(id){
    // alert(id);
    var value = id.substr(4,1);
    $('.desc').css('display','none');
    $('#desc'+value).css('display','block');
}

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