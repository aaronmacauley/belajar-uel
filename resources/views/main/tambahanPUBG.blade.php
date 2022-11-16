<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UEL 2022</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/uel.css')}}">
</head>
<body style="background-color: #222222">
    <div class="body-gradient">

        <div class="div" id="div-ml">
            <h2 style="text-align: center">Tambahan Player PUBG (Optional)</h2>
            <hr class="border border-primary"/>
            <form action="{{route('registration/tambahanPUBG')}}" enctype="multipart/form-data" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 text-center">
                    <section>
                        <h2>Player 5 (Opsional)</h2>
                        <br>
                        <h2 class="bolded">Data Umum</h2>
                        <div class="row">
                            <div class="col-sm">
                                <h3>Nama</h3>
                                <input type="text" name="txtNamaPlayer" class="textbox form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h3>Fakultas</h3>
                                <select id="" name="selFakultasPlayer" class="textbox form-control">
                                    @foreach ($fakultas as $f)
                                    <option value="{{$f->nama}}">{{$f->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h3>NRP</h3>
                                <input type="text" name="txtNRPPlayer" class="textbox form-control">
                            </div>
                            <div class="col-sm">
                                <h3>Angkatan</h3>
                                <input type="text" name="txtAngkatanPlayer" class="textbox form-control">
                            </div>
                        </div>
        
                        <br><br>
                        <h2 class="bolded">Data Pribadi</h2>
        
                        <div class="row">
                            <div class="col-sm">
                                <h3>ID Line</h3>
                                <input type="text" name="txtIDLinePlayer" class="textbox form-control">
                            </div>
                            <div class="col-sm">
                                <h3>Nomor WA</h3>
                                <input type="text" name="txtNoHPPlayer" class="textbox form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h3>Instagram</h3>
                                <input type="text" name="txtIGPlayer" class="textbox form-control"> 
                            </div>
                            <div class="col-sm">
                                <h3>Domisili</h3>
                                <input type="text" name="txtDomisiliPlayer" class="textbox form-control"> 
                            </div>
                        </div>
                        
                        <br><br>
                        <h2 class="bolded">Data E-Sport</h2>
                        <div class="row">
                            <div class="col-sm">
                                <h3>Nickname</h3>
                                <input type="text" name="txtNicknamePlayer" class="textbox form-control">
                            </div>
                            <div class="col-sm">
                                <h3>ID Game</h3>
                                <input type="text" name="txtIDGamePlayer" class="textbox form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h3>Senjata Favorit</h3>
                                <input type="text" name="txtSenjataPlayer" class="textbox form-control">
                            </div>
                            <div class="col-sm">
                                <h3>Role</h3>
                                <input type="text" name="txtRolePlayer" class="textbox form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <h3>Device</h3>
                                <input type="text" name="txtDevicePlayer" class="textbox form-control">
                            </div>
                           
                            <input type="hidden" name="txtSebagaiPlayer" value="Player" class="textbox form-control">
                           
                        </div>
        
                        <br><br>
                        <h2 class="bolded">Upload File</h2>
                        <h3>| Upload foto diri dan sertifikat vaksin mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg |</h3>
                        <br>
                        
                        <div class="row">
                            <div class="col-sm">
                                <h3>Upload foto diri</h3>
                            <input type="file" name="inpFotoPlayer" class="textbox form-control" required>
                            </div>
                            <div class="col-sm">
                                <h3>Upload sertifikat vaksin</h3>
                            <input type="file" name="inpVaksinPlayer" class="textbox form-control" required>
                            </div>
                            <div class="col-sm">
                                <h3>Upload KTM</h3>
                            <input type="file" name="inpKTMPlayer" class="textbox form-control" required>
                            </div>
                        </div>
                       
        
                        <br><br>
                        <h2 class="bolded">Riwayat Turnamen</h2>
                        <div class="row">
                            <textarea name="txtRiwayatPlayer" class="textbox form-control" cols="30" rows="10">
        
                            </textarea>
                        </div>
                    </section>
                    <br><br>
                    <hr class="border border-primary"/>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-sm"></div>
                <div class="col-sm">
                    <h4 style="color: white">| Jika tidak ada pemain cadangan, silahkan klik tombol Finish |</h4>
                    <button type="submit" class="nav-btn">Submit</button>
                    <button type="submit" class="nav-btn">Finish</button>
                </div>
                <div class="col-sm"></div>
            </div>
                            <input type="hidden" name="txtSebagaiPlayer" value="Player" class="textbox form-control">
                            <input type="hidden" name="txtTim" value="{{ $tim }}" class="textbox form-control">
                            <input type="hidden" name="txtNamaTim" value="{{ $namaTim }}" class="textbox form-control">
            </form>
        </div>
    </div>
    <div class="body-bottom text-center">
        <div class="row">
            <div class="col-sm-2">
                <img src="{{asset('images/logo-uel.png')}}" width="130" height="130" alt="Logo UEL">
            </div>
            <div class="col-sm-6">
                <p class="heading-white-text">UBAYA E-Sport League Season 2</p>
                <p class="subheading-white-text">Report Bugs and Problem: si.uel2022@gmail.com</p>
                <p class="subheading-white-text">Developed by Information System UEL 2022</p>
            </div>
            <div class="col-sm-4">
                <a href="https://www.instagram.com/uel2022_/"><img src="{{asset('images/logo_ig.png')}}" width="75" height="75" alt="Instagram UEL"></a>
                <a href=""><img src="{{asset('images/logo_youtube.png')}}" width="130" height="130" alt="Youtube UEL"></a>
            </div>
        </div>
    </div>
</body>
</html>