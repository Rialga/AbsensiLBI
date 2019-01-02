@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="Intern/img/favicon.png" type="image/png">
        <title>Buildarch Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Intern/css/bootstrap.css">
        <link rel="stylesheet" href="Intern/vendors/linericon/style.css">
        <link rel="stylesheet" href="Intern/css/font-awesome.min.css">
        <link rel="stylesheet" href="Intern/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="Intern/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="Intern/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="Intern/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="Intern/vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="Intern/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="Intern/css/style.css">
        <link rel="stylesheet" href="Intern/css/responsive.css">
    </head>
    <body>
        


        <!--================Concept Area =================-->
        <section class="concept_area">
            <div class="box_1620">
                <div class="row m0">
                    <div class="left_img">
                        <img src="Intern/img/concept-1.jpg" alt="">
                    </div>
                    <div class="right_text">
                        <div class="concept_text row m0">
                            <div class="concept_text_inner">
                                <h4>Absensi Anggota Internship</h4>
                  

                                    <form action="hintern" method="post" >
                                       {{ csrf_field() }}
                                        <select name="nointern" id="select" class="form-control"> 
                                            
                                             @foreach($intern as $row)
                                                 <option value="{{ $row->no_intern}}">{{ $row->name}}</option>
                                             @endforeach
                                               
                                        </select> <br> <br>

                                        <input type="text" class="form-control" placeholder="keterangan.." name="note"> <br>
                                        <Button type="submit" class="main_btn" name="submitbutton" value="create">Absen Masuk</Button> 
                                        <Button type="submit" class="main_btn" name="submitbutton" value="update"> Absen Keluar</Button>   

                                     </form>    

                                     
                                                                     
                                                  
                                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="project_area p_120">
            <div class="container box_1620">
                <div class="main_title">
                    <h2>Riwayat Absensi</h2>
                </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table class="table table-table responsive table-bordered table-hover">
                                       <thead>
                                            <tr>
                                                <th style="text-align: center">No Internship</th>
                                                <th style="text-align: center">Nama</th>
                                                <th style="text-align: center">Tanggal</th>
                                                <th style="text-align: center">Jam Masuk</th>
                                                <th style="text-align: center">Jam Keluar</th>
                                                <th style="text-align: center">Keterangan</th>
                                            </tr>    
                                        </thead>

                                        <tbody>
                                            
                                            @forelse($history as $history)
                                                <tr>
                                                    <td>{{$history->no_intern}}</td>
                                                    <td>{{$history->nama}}</td>
                                                    <td>{{$history->date}}</td>
                                                    <td>{{$history->time_in}}</td>
                                                    <td>{{$history->time_out}}</td>
                                                    <td>{{$history->note}}</td>
                                                </tr>

                                            @empty
                                                <tr>
                                                    <td colspan="4"> <b> <i> TIDAK ADA DATA UNTUK DITAMPILKAN </i></b> </td>
                                                </tr>
                                            @endforelse

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>            
                    </div>
            </div>
        </section>            
                                
        <!--================End Concept Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="Intern/js/jquery-3.2.1.min.js"></script>
        <script src="Intern/js/popper.js"></script>
        <script src="Intern/js/bootstrap.min.js"></script>
        <script src="Intern/js/stellar.js"></script>
        <script src="Intern/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="Intern/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="Intern/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="Intern/vendors/isotope/isotope-min.js"></script>
        <script src="Intern/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="Intern/js/jquery.ajaxchimp.min.js"></script>
        <script src="Intern/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="Intern/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="Intern/js/mail-script.js"></script>
        <script src="Intern/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="Intern/vendors/scroll/jquery.nicescroll.min.js"></script>
        <script src="Intern/js/theme.js"></script>
    </body>
</html>

    @endsection