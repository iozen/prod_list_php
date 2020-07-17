function changing_img(){
$('body').on('click', '.for_toch', function() {

	route = $(this).attr('route');
	$('.img_act').val(route);
});
}
