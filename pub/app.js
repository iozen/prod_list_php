function get_prods(params) {

}

function buy(params) {
    $('body').on('click', '#buy_it', function() {
        id = $(this).attr('pr_id');
        $.ajax({
            method: "GET",
            url: params.baseurl + "server/?buy=" + id,
            dataType: "json",
            beforeSend: function() {
		    // щось посьтавимо
            },
            data: {
            }
        }).done(function(data) {
		    // щось посьтавимо
            alert(data.data[0].id);
        }).fail(function(data) {
            alert('transmision error');
        });
    });

}

function init(params) {
	buy(params);

}
