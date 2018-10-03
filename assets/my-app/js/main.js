$(document).ready(function() {

    update_table();

    $('#data-file').on('change', function() {
        $.ajax({
            method: "POST",
            url: "file/load",
            data: { filename: $(this).val()},
            format: 'json'
        })
        .done(function( myData ) {
            update_table(jQuery.parseJSON(myData));
         });
    });

});

function update_table(data) {
    $("#table-data").handsontable({
        data: data,
        startRows: 50,
        startCols: 50,
        minSpareCols: 1,
        minSpareRows: 1,
        rowHeaders: true,
        colHeaders: true
    });
 }
