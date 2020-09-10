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
