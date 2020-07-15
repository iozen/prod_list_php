function build_card(params) {
    var array = $("body").data("prods_array");
    price_all = 0;
    html = "<table>";
    array.forEach(function(item, i, array) {
        if (item.quantity > 1) {
            remove_quan = "<span class='remove_quan' id_item='" + item.id + "'>&larr;</span>";
        } else {
            remove_quan = "";
        }
        add_quan = "<span class='add_quan' id_item='" + item.id + "'>&rarr;</span>";
        price_all = price_all + (item.price * item.quantity);
        price = item.price * item.quantity;
        html = html + "<tr><td> " + item.title + " </td><td><img src='" + params.baseurl + item.img + "' style='height:50px;'></td><td> ціна " + item.price + " </td><td>кількість " + remove_quan + " " + item.quantity + " " + add_quan + "</td><td>вартісь " + price + "</td><td><span class='r_card_item' id_item='" + item.id + "'>&times; видалити</span> </td></tr>";

    });
    html = html + "</table>";
    html = html + "<div> Загальна сумма: " + price_all + "</div>";
    $('.card_inner').html(html);
}

function update_card_request(id, var_iable, type) {
    $.ajax({
        method: "GET",
        url: params.baseurl + "server/?" + var_iable + "=" + id,
        dataType: "json",
        beforeSend: function() {
            if (type != 'silent') {
                $('.card_cont').show();
            }
            $('.card_inner').html('<h3>Завантаження...............</h3>');
        },
        data: {}
    }).done(function(data) {
        if (data.status === "ok") {
            $("body").data("prods_array", data.data);
            build_card(params);
        } else {

            alert('reciving products error');
        }
    }).fail(function(data) {
        alert('transmision error');
    });
}

function buy(params) {
    $('body').on('click', '#buy_it', function() {
        id = $(this).attr('pr_id');
        update_card_request(id, 'buy', 'normal');

    });
}

function edit_card(params) {

    $('body').on('click', '.add_quan', function() {
        id = $(this).attr('id_item');
        update_card_request(id, 'add_quan', 'silent');
    });
    $('body').on('click', '.remove_quan', function() {

        id = $(this).attr('id_item');
        update_card_request(id, 'remove_quan', 'silent');

    });
    $('body').on('click', '.r_card_item', function() {
        id = $(this).attr('id_item');
        update_card_request(id, 'r_card_item', 'silent');

    });

}

function init(params) {
    buy(params);
    edit_card(params);
    update_card_request("-", 'update_card', 'silent');
    $('body').on('click', '.close_card', function() {
        $('.card_cont').hide();
    });
    $(".th_card").click(function() {
        $(".card_cont").toggle("show");
    });
}
