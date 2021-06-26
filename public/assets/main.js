$(document).ready(function() {

    $('#main-toolbar button').click(function() {
        callback = function(data) {
            $('#partial-main').html(data.html);

            if ($('#page-table')) {
                $('#page-table').DataTable();
            }
        }

        ajax_request(
            baseurl + 'page/' +  $(this).data('page'),
            {},
            callback
        );
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
            {
                template: $('#input-template').val(),
                data_file: $('#data-file').val()
            },
            callback
        );
    });

    update_table();
});

function update_table(data) {

    $("#table-data").dataImporterTable({
        data: data
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
    }).done(
        in_call_back
    );
}

jQuery.fn.dataImporterTable = function(options) {

    /*
     * Variables accessible
     * in the class
     */
    var vars = {
        data : [],
        numOfRows : '20',
        numOfCols : '10',
    };

    /*
     * Can access this.method
     * inside other methods using
     * root.method()
     */
    var root = this;

    /*
     * Constructor
     */
    this.construct = function(options) {
        $.extend(vars, options);
    };

    /*
     * Public method
     * Can be called outside class
     */
    this.myPublicMethod = function() {
        console.log(vars.myVar);

        myPrivateMethod();
    };

    /*
     * Private method
     * Can only be called inside class
     */
    var myPrivateMethod = function() {
        console.log('accessed private method');
    };

    /*
     * Pass options when class instantiated
     */
    this.construct(options);
}


/*
 * USAGE
 */

/*
 * Set variable myVar to new value
 */
// var newMyClass = new myClass({ myVar : 'new Value' });
//
// /*
//  * Call myMethod inside myClass
//  */
// newMyClass.myPublicMethod();