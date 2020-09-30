$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );

    new $.fn.dataTable.FixedHeader( table );
} );

/* update cat part */
function catmoda(id) {
    //alert(id)
    $.ajax({
        url: '/cat-show/' + id ,
        method: 'get',
        success: function (data) {
            console.log(data);

            $("#ide").val(data.data.id);
            $("#namee").val(data.data.category_name);


        }
    });
}

/* update subcat part */
function submoda(id) {
    //alert(id)
    $.ajax({
        url: '/subcat-show/' + id ,
        method: 'get',
        success: function (data) {
            console.log(data);


            $("#subid").val(data.data.id);
            $("#subname").val(data.data.subcat_name);


        }
    });
}
/* update product part */
function promoda(id) {
    //alert(id)
    $.ajax({
        url: '/product-show/' + id ,
        method: 'get',
        success: function (data) {
            console.log(data);

            $("#cat_id").val(data.data.cat_id);
            $("#subcat_id").val(data.data.subcat_id);
            $("#proid").val(data.data.id);
            $("#tit").val(data.data.title);
            $("#det").val(data.data.details);
            $("#hscd").val(data.data.hscode);
            $("#prprice").val(data.data.previous_price);
            $("#ofprice").val(data.data.offer_price);
            $("#imge").val(data.data.image);
            $("#qtyy").val(data.data.qty);




        }
    });
}
/* cat+subcat list */
jQuery(document).ready(function ()
{
    jQuery('select[name="cat_id"]').on('change',function(){
        var subcatID = jQuery(this).val();
        if(subcatID)
        {
            jQuery.ajax({
                url : 'list/getsubcat/' +subcatID,
                type : "GET",
                dataType : "json",
                success:function(data)
                {
                    console.log(data);
                    jQuery('select[name="subcat_id"]').empty();
                    jQuery.each(data, function(key,value){
                        $('select[name="subcat_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        }
        else
        {
            $('select[name="subcat_id"]').empty();
        }
    });
});

/* show user modal */
function usershow(id) {
    //alert(id)
    $.ajax({
        url: '/userprofile-show/' + id ,
        method: 'get',
        success: function (data) {
            console.log(data);

            $("#nameusr").html(data.data.name);
            $("#issueusr").html(data.data.issueofreg);


        }
    });
}

//change status of product
$('body').on('change', '#product_status', function () {
    var id = $(this).attr('data-id');
    if (this.checked) {
        var product_status = 1;
    } else {
        var product_status = 0;
    }
    $.ajax({
        url: '/product-status/' + id + '/' + product_status,
        method: 'get',
        success: function (result) {
            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Product Status change successfully');

        }
    });

});

//change status of product
$('body').on('change', '#role_status', function () {
    var id = $(this).attr('data-id');
    if (this.checked) {
        var role_status = 1;
    } else {
        var role_status = 2;
    }
    $.ajax({
        url: '/role-status/' + id + '/' + role_status,
        method: 'get',
        success: function (result) {
            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Role change Successfully');

        }
    });

});

/* admindashboard table */
$(document).ready(function() {
    $(".search").keyup(function () {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
        });

        $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
            $(this).attr('visible','false');
        });

        $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
            $(this).attr('visible','true');
        });

        var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

        if(jobCount == '0') {$('.no-result').show();}
        else {$('.no-result').hide();}
    });
});

