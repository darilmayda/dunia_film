<link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatable/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatable/css/responsive.bootstrap4.min.css'); ?>">
<div class="pt-3">
    <div class="heading-section text-center" >
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color: #72d1f5">
            <li class="breadcrumb-item active" aria-current="page"><b>HISTORY</b></li>
          </ol>
        </nav>
    </div>
    <div class="card" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); transition: 0.3s;">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table id="HistoryList" class="table table-hover" width="100%" style="overflow-x: hidden;">
                    <thead>
                        <tr>
                            <th>Film</th>
                            <th>Judul Film</th>
                            <th>Durasi</th>
                            <th>Harga Sewa</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/datatable/js/responsive.bootstrap4.min.js'); ?>"></script>
<script type="text/javascript">
    var idUser = localStorage.getItem("id_user");
    var data = {
        'iduser'      : idUser,
        'status_sewa'  : 0,
    };

    // $.ajax({
    //     url     : "<?php echo base_url(); ?>History/getListHistory",
    //     type  : "POST",
    //     data    : data,  
    //     success: function(data, textStatus, xhr) {
    //         console.log(data)
    //     },  
    //     error: function(xhr, textStatus, errorThrown) {  
    //         console.log('Error in Database');
    //     } 
    // });

    $(document).ready(function(){
        $('#HistoryList').DataTable({
            ajax: {
                url: "<?php echo site_url('History/getListHistory')?>",
                type  : "POST",
                data    : data,
                "dataSrc": "data"
            },
            "columns": [
                {
                    "data": "thumbnail",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": "judul_film",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": "durasi",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": "harga_sewa",
                    "searchable": true,
                    "className": "item",
                    "defaultContent": ""
                },
                {
                    "data": 'null',
                    "orderable": false,
                    "sClass": "text-left",
                    render: function (data, type, row) {

                        if (row.status_sewa == 0) {

                        }
                        var ret_value = ' <a href="#" class="badge badge-info">Sewa Berakhir</a>';
                             return ret_value;
                    }
                }
            ],
            "columnDefs":
            [{
                "targets": 0,
                "data": 'thumbnail',
                "render": function (data, type, row, meta) {
                    // console.log(data)
                    return '<img src="assets/images/film/' + data + '" alt="' + data + '" height="100" width="100"/>';
                }
            }],
            "fnDrawCallback": function( Settings ) {
                // initDatatableAction()
            },
        });
    });
</script>