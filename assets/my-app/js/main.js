$(document).ready(function() {

    var myData = [
        ["", "Column 1", "Column 2", "Column 3", "Column 4"],
        ["2017", 10, 11, 12, 13],
        ["2018", 20, 11, 14, 13],
        ["2018", 20, 11, 14, 13],
        ["2018", 20, 11, 14, 13],
        ["2019", 30, 15, 12, 13]
    ];

    update_table(myData);

    $('#selectfile').on('dblclick', function() {
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
        startRows: 5,
        startCols: 5,
        minSpareCols: 1,
        minSpareRows: 1,
        rowHeaders: true,
        colHeaders: true,
        contextMenu: true
    });
 }
