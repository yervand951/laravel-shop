// $('#vendorDatatable').DataTable({
//     "processing": true,
//     "serverSide": true,
//     "order": [[ 0, "desc" ]],
//     "ajax": baseUrl+'/vendors/data',
//     "columns": [
//         {"data": 'branch', "name": 'branch'}
//     ],
// });

// $( document ).ready(function() {
//     alert( "ready!" );
// });

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    }); 
$('#prtyepDatatable').DataTable({
    "pagingType": "full_numbers",
    "dom":
    "<'row toolbar'" +
    "<'col-md-4 col-sm-12'l>"+
    "<'col-md-3 col-sm-12 jump-to-page'>" +
    "<'col-md-5 col-sm-12'f>>" +
    "<'table-responsive't>" +
    "<'row toolbar'"+
    "<'col-md-12 col-sm-12'p>>",
    "language": {
        "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        },
        "emptyTable": "No data available in table",
        "info": "Showing START to END of TOTAL records",
        "infoEmpty": "No records found",
        "infoFiltered": "(filtered1 from MAX total records)",
        "lengthMenu": "Show _MENU_",
        "search": "Search:",
        "zeroRecords": "No matching records found",
        "paginate": {
            "previous": "Prev",
            "next": "Next",
            "last": "Last",
            "first": "First"
        }
    },

    "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.
    "lengthMenu": [
        [6, 15, 20, -1],
        [6, 15, 20, "All"] // change per page values here
    ],
    "columnDefs": [{  // set default column settings
        'orderable': false,
        'targets': [0]
    }, {
        "searchable": false,
        "targets": [0]
    }],
    "order": [
        [1, "asc"]
    ],
    // set the initial value
    "pageLength": 6,
    processing: true,
    serverSide: true,
    dataType: "json",
    ajax: {
        url: '/admin/prtype/data',
        type: 'POST',
        success:function(data) {
            alert(data);
        }
    },
    columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'parent', name: 'parent' }
    ]
});
});