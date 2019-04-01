$(document).ready( function () {
    $('#close').hide();
    $('#burger').on('click', function () {
        $('.menu-mobile').css('display', 'flex');
        $('#burger').hide();
        $('#close').show();
    })

    $('#close').on('click', function () {
        $('.menu-mobile').css('display', 'none');
        $('#close').hide();
        $('#burger').show();
    })






    $('#submit').on('click', function(e){
        e.preventDefault();

        var name = $('input[name="name"]').val();
        var subject = $('input[name="subject"]').val();
        var mail = $('input[name="mail"]').val();
        var information = $('textarea[name="information"]').val();

        $.ajax({
            url : "send.php",
            dataType : "json",
            type : "post",
            data : {name : name, subject: subject, mail: mail, information: information}
        }).done(function( data ) {
            window.location = "/success";
        });
    });

});