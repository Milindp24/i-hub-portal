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