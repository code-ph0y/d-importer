$(document).ready(function() {



    Split(['#data-view', '#template-view'], {
        direction: 'horizontal'
    });

    Split(['#input-tpl-panel', '#output-result-panel'], {
        direction: 'vertical'
    });

    $('#data-file').on('change', function() {
        callback = function(myData) {
            update_table(jQuery.parseJSON(myData));
        }

        ajax_request(
            baseurl + "file/load",
            { filename: $(this).val() },
            callback
        );
    });

    $('#run-template').on('click', function() {
        callback = function(myData) {
            $('#output-result').val(myData);
        }

        ajax_request(
            baseurl + "runtemplate",
            { template: $('#input-template').val() },
            callback
        );
    });

    update_table();

});

function update_table(data) {
    $("#table-data").handsontable({
        data:         data,
        startRows:    50,
        startCols:    50,
        minSpareCols: 1,
        minSpareRows: 1,
        rowHeaders:   true,
        colHeaders:   true
    });
 }

function ajax_request(in_url, in_data, in_call_back, in_method, in_format) {
    if(typeof in_format === 'undefined' || in_format === null) {
        in_format = 'json';
    }

    if(typeof in_method === 'undefined' || in_method === null) {
        in_method = 'post';
    }

    $.ajax({
        method: in_method,
        url:    in_url,
        data:   in_data,
        format: in_format
    })
    .done(
        in_call_back
    );
}
