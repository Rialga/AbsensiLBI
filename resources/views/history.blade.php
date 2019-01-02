@extends('layouts.app')

@section('content')

    <center>
            <br>
             <h1>Riwayat Absensi</h1>
    </center>

     <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="card-header"></div>

                <div class="panel-body">
                    <table class="table table-table responsive table-bordered table-hover">
                       <thead>
                            <tr>
                             
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>    
                        </thead>

                        <tbody>
                            
                            @forelse($data_history as $history)
                                <tr>
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

@endsection