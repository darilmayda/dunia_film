<div class="pt-3">
    <div class="heading-section text-center">
        <nav aria-label="breadcrumb" >
          <ol class="breadcrumb" style="background-color: #72d1f5">
            <li class="breadcrumb-item active" aria-current="page"><b>KOLEKSI FILM</b></li>
          </ol>
        </nav>
    </div>
    <div class="card" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); transition: 0.3s;">
        <div class="row" id="div_listfilm">
        </div>
    </div>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
    sessionStorage.clear('watch_id');
    var idUser = localStorage.getItem("id_user")
    var idFilm = localStorage.getItem("film_id")

    var data = {
        'iduser'      : idUser,
        'status_sewa' : 1,
    }

    $.ajax({
        url     : "<?php echo base_url(); ?>Mymovie/getListmyMovie",
        type  : "POST",
        data    : data,
        async : true,
        dataType: 'json',   
        success: function(data, textStatus, xhr) {  
            console.log(data)
            var html = ''
            for (var x = 0; x < data.length; x++) {
                var component = `
                <div class="col-lg-3">
                    <div class="card-body p-4">
                        <div class="card" style="width: 16rem;">
                          <img class="card-img-top" src="assets/images/film/${data[x]['thumbnail']}" alt="Card image cap" style="height:310px">
                          <div class="card-body">
                            <h5 class="card-title">${data[x]['judul_film']}</h5>
                            <a href="javascript: void(0)" onclick="ToWatchMovie('${data[x]['idfilm']}')" class="btn btn-primary">Lihat Film</a>
                            <a href="javascript: void(0)" onclick="kembalikanMovie('${data[x]['id']}', '${data[x]['idfilm']}', '${data[x]['iduser']}')" class="btn btn-danger">Kembalikan</a>
                          </div>
                        </div>
                    </div>
                </div>`

                html = html + component
            }
            $('#div_listfilm').html(html)
        },  
        error: function(xhr, textStatus, errorThrown) {  
            console.log('Error in Database');
        } 
    });

    function ToWatchMovie(id){
        // console.log(id)
        sessionStorage.setItem('watch_id', id);
        window.location.href = "WatchMovie";
    }


    function kembalikanMovie(id, idfilm, iduser){
        var data = {
            'id'          : id,
            'iduser'      : idUser,
            'idfilm'      : idFilm,
            'status_sewa' : 0,
        }

        // console.log("data",data)

        $.ajax({
            url     : "<?php echo base_url(); ?>Mymovie/FilmEdit",
            type  : "POST",
            data    : data,  
            success: function(response) { 
                // console.log("response", response) 

                var result = JSON.parse(response)
                if (result.status_code == 200) {
                    window.location.href = "Mymovie";
                }
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');
            } 
        });
    }
</script>