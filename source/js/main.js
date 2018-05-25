$(document).ready(function() {
    $(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                method: "POST",
                url: "pages/signin",
                data: $('form').serialize(),
            })
            .done(function(msg) {
                if(true){
                    window.location.href = msg;
                }
            });
        });
    });
    $('.dialog-btn').click(function(e) {
		e.preventDefault();

		var id = $(this).attr('id');
		$('.lightbox[id='+id+']').addClass("opened");


	});

	$('.dialog .close').click(function (e) {
		e.preventDefault();

		$('.lightbox').removeClass("opened");
	});

	$('.mask').click(function () {
		$('.lightbox').removeClass("opened");
	});

	$('.participe-btn').click(function () {
		$('.lightbox').removeClass("opened");
	});
});