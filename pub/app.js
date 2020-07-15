function build_card(params) {
    var array = $("body").data("prods_array");
    price_all = 0;
    html = "<table>";
    array.forEach(function(item, i, array) {
        price_all = price_all + (item.price * item.quantity);
	price = item.price * item.quantity;
        html = html + "<tr><td> " + item.title + " </td><td><img src='" + params.baseurl + item.img + "' style='height:50px;'></td><td> ціна " + item.price + " </td><td>кількість " + item.quantity + "</td><td> " + price+"</td></tr>";

    });
    html = html + "</table>";
    html = html + "<div> Загальна сумма: " + price_all + "</div>";
    $('.card_inner').html(html);
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
                $('.card_cont').show();
                $('.card_inner').html('<h3>Завантаження...............</h3>');
            },
            data: {}
        }).done(function(data) {
            // щось посьтавимо
            if (data.status === "ok") {
                $("body").data("prods_array", data.data);
                build_card(params);
            } else {

                alert('reciving products error');
            }
        }).fail(function(data) {
            alert('transmision error');
        });
    });

}

function init(params) {
    buy(params);

    $('body').on('click', '.close_card', function() {
        $('.card_cont').hide();
    });
    $(".th_card").click(function() {
        $(".card_cont").toggle("show");
    });
}
