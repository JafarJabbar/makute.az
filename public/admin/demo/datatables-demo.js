// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable( {
        "language": {
            "lengthMenu": "Hər səhifədə _MENU_ məhsul göstərilir",
            "zeroRecords": "Belə məlimat tapılmadı...",
            "info": "_PAGES_ səhifədən _PAGE_ səhifədəsiniz... ",
            "infoEmpty": "Belə məlumat tapılmadı...",
            "infoFiltered": "(filtered from _MAX_ total records)",
            'search':'Axtar',
            "paginate": {
                "previous": "Əvvəlki səhifə",
                "next": "Sonrakı səhifə",
            },
        }
    } );
});
