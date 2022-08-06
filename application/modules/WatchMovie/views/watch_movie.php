<div class="pt-3">
    <div class="heading-section text-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><b>MY MOVIE</b></li>
          </ol>
        </nav>
    </div>
    <div class="card" id="div_listfilm">
    </div>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
    var watch_id = sessionStorage.getItem("watch_id")
    // console.log("watch_id", watch_id)

    var data = {
        'id'      : watch_id,
    }

    $.ajax({
        url     : "<?php echo base_url(); ?>WatchMovie/getWatchMovie",
        type  : "POST",
        data    : data,
        async : true,
        dataType: 'json',   
        success: function(data, textStatus, xhr) {  
            // console.log(data)
            var video = ''
            for (var x = 0; x < data.length; x++) {
                video = `
                        <iframe width="100%" height="600"
                        src="https://www.youtube.com/embed/${data[x]['url_film']}?feature=player_embedded">
                        </iframe>`
            }
            $('#div_listfilm').html(video)
        },  
        error: function(xhr, textStatus, errorThrown) {  
            console.log('Error in Database');
        } 
    });
</script>