@extends('layouts.app')

@section('content')

<div class="container">
    
     <div class="limiter">
        <div class="login100-form-title">
            <div class="panel panel-default">
                <div class="card-header">Informasi</div>

                <div class="panel-body">

                <table>
                    <td>
                         <form action="/absensi" method="post" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table class="table table-responsive">
                                        <td>
                                            <input type="text" class="form-control" placeholder="keterangan.." name="note">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-flat btn-primary" name="btnIn">Absen Masuk</button>
                                        </td>
                            </table>
                        </form>
                    </td>

                    <td>
                         <form action="/update" method="post" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table class="table table-responsive">
                                        <td>
                                            <button type="submit" class="btn btn-flat btn-primary" name="btnOut">Absen Keluar</button>
                                        </td>
                            </table>
                        </form>
                    </td>

                </table>
                </div>
            </div>
        </div>
    </div>

    

     <div class="limiter">
        <div class="login100-form-title">
            <div class="panel panel-default">
                <div class="card-header">Riwayat Absen</div>

                <div class="panel-body">
                    <table class="table table-table responsive table-bordered table-hover">
                       <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>    
                        </thead>

                        <tbody>
                            
                            @forelse($data_absensi as $absensi)
                                <tr>
                                    <td>{{$absensi->date}}</td>
                                    <td>{{$absensi->time_in}}</td>
                                    <td>{{$absensi->time_out}}</td>
                                    <td>{{$absensi->note}}</td>
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

@endsection

