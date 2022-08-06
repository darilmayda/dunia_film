<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Detail</title>
</head>
<body>
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="pt-3">
        <div class="card" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); transition: 0.3s; margin-left: 10%; margin-right: 10%; padding: 3%;">
            <div class="container-fluid tm-container-content tm-mt-60">
                <div class="row mb-4" style="color: blue">
                    <button type="button" class="btn btn-secondary btn-sm" onclick="ToListFilm()"> < Kembali</button>
                </div>
                <div class="row mb-4" style="color: blue">
                    <h2 class="col-12 tm-text-primary" style="font-weight: bold;" id="film_title"></h2>
                </div>
                <div class="row tm-mb-90" style="" id="div_film">
                </div>
                <div class="row tm-mb-90" style="" id="div_video_youtube">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script>
    var id = localStorage.getItem('film_id'); 
    var name = localStorage.getItem('film_name');
    
    getStatussewa()
    var idforfilm ;
    // console.log(idforfilm)
    $(document).ready(function() {  
        $('#film_title').text(name);
        
        $.ajax({
                url: "<?php echo base_url();?>Detail/getDataFilmDetail/",
                type: 'POST',
                dataType: 'json',
                async: false,
                data: {"id": id},
                success: function(data, textStatus, xhr) {  
                    // console.log(data)
                    var html = ''
                    // var video = ''
                    for (var x = 0; x < data.length; x++) {
                        idfilm1 = data[x].id;
                        if (idfilm1 == idforfilm) {
                            var component = `      
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <img src="assets/images/film/${data[x]['thumbnail']}" alt="Card image cap" class="img-fluid">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="tm-bg-gray tm-video-details">
                                        <div class="mb-4">
                                            <h3 class="tm-text-gray-dark mb-3">Sinopsis</h3>
                                            <p>${data[x]['keterangan']}</p>
                                        </div>
                                        <div>
                                            <h4 class="tm-text-gray-dark mb-3">Harga Sewa</h4>
                                            <h4><span class="badge badge-info">${data[x]['harga_sewa']}</span></h4>
                                        </div>
                                        <div>
                                            <h4 class="tm-text-gray-dark mb-3">Durasi</h4>
                                            <p>${data[x]['durasi']}</p>
                                        </div>
                                        <button type="button" class="btn btn-danger btn-lg btn-block" disabled>FILM SEDANG DISEWA</button>
                                        
                                    </div>
                                </div>`

                                html = html + component
                            }else{
                                var component = `      
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <img src="assets/images/film/${data[x]['thumbnail']}" alt="Card image cap" class="img-fluid">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="tm-bg-gray tm-video-details">
                                        <div class="mb-4">
                                            <h3 class="tm-text-gray-dark mb-3">Sinopsis</h3>
                                            <p>${data[x]['keterangan']}</p>
                                        </div>
                                        <div>
                                            <h4 class="tm-text-gray-dark mb-3">Harga Sewa</h4>
                                            <h4><span class="badge badge-info">${data[x]['harga_sewa']}</span></h4>
                                        </div>
                                        <div>
                                            <h4 class="tm-text-gray-dark mb-3">Durasi</h4>
                                            <p>${data[x]['durasi']}</p>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="sewaFilm()">Sewa Film</button>
                                    </div>
                                </div>`

                                html = html + component
                            }
                        

                    }
                    $('#div_film').html(html)
                },
           }); 
    });

    function sewaFilm(){
        var idUser = localStorage.getItem("id_user")
        var idFilm = localStorage.getItem("film_id")

        // console.log('a',idUser)
        // console.log('x',idFilm)

        var data = {
            'iduser'      : idUser,
            'idfilm'      : idFilm,
            'status_sewa' : 1,
        }

        $.ajax({
                url     : "<?php echo base_url(); ?>Detail/insertSewa",
                type  : "POST",
                data    : data,
                async : true,
                success : function(response){
                    response = JSON.parse(response)

                    if (response.status_code == 200) {
                        window.location.href = "Mymovie";
                    }else{
                        alert('Mohon Maaf proses sewa film anda Gagal')
                    }
                    
                }
            });
    }

    function getStatussewa(){
        var data = {
            'id'  : id,
        }
        $.ajax({
            url     : "<?php echo base_url(); ?>Detail/getListmyMovie",
            type  : "POST",
            data    : data,
            dataType: 'json',
            async: false, 
            success: function(data, textStatus, xhr) {
                idforfilm = data[0].idfilm;  
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');
            } 
        });
    }

    function ToListFilm(){
        window.location.href = "Dashboard";
    }

</script>