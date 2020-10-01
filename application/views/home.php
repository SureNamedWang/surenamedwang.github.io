<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Quisioner</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?php echo base_url();?>home/">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href=""><b>Quisioner</b></a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                
            </div>
            
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form id="formQuisioner" style="width: 100%;" method="POST" action="<?php echo base_url(); ?>home/result">
                        <!-- <div class="row"> -->
                            <!-- <div class="col"></div> -->
                            <!-- <div class="col-sm-10"> -->
                                <div class="card">
                                    <div class="card-header" id="page">
                                        <ul class="row pagination rounded-separated pagination-primary">
                                            <?php for($i=0;$i<16;$i++){?>
                                                <li class="col page-item <?php if($i==0){echo "active";} ?>" id="p<?php echo $i;?>">
                                                    <a class="page-link" onClick="pindah(<?php echo $i;?>)"><?php echo $i;?></a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div id="divQ0" >
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                            <div class="form-group">
                                                <label>No Telpon</label>
                                                <input type="text" class="form-control" name="telp">
                                            </div>
                                        </div>
                                        <?php
                                            $rdoStyle="height:2rem;width:2rem;margin-left:3rem;margin-right:2rem;word-wrap: break-word";
                                        ?>
                                        <div id="divQ1" >
                                            <div class="form-group">
                                                <label style="font-size: xx-large;">Apakah anda berusia di atas <b style="color:red">40</b> tahun ?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoUsia" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoUsia" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ2">
                                            <div class="form-group">
                                                <label style="font-size: xx-large;">Jenis Kelamin</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoKelamin" value="pria"><label class="ml-2">Laki-laki</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoKelamin" value="wanita"><label class="ml-2">Perempuan</label>
                                            </div>
                                        </div>
                                        <div id="divQ3">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda mengalami gejala <b style="color:red">batuk</b> ?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoBatuk" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoBatuk" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ4">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda mengalami gejala <b style="color:red">pilek</b> ?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoPilek" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoPilek" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ5">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah suhu tubuh anda di atas <b style="color:red">37,2 </b>&#x2103 ?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSuhu" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSuhu" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ6">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda mengalami gejala <b style="color:red">Mencret </b>?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoMencret" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoMencret" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ7">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda mengalami gejala <b style="color:red">hilang pembauan dan pengecapan </b>?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoPembauan" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoPembauan" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ8">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda mengalami gejala <b style="color:red">nyeri tenggorokan </b>?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoTenggorokan" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoTenggorokan" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ9">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda mengalami gejala <b style="color:red">sesak nafas </b>?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSesak" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSesak" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ10">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Sejak kapan anda mengalami gejala-gejala tersebut?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoLamaGejala" value="7+"><label class="ml-2">Lebih dari 7 hari</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoLamaGejala" value="7-"><label class="ml-2">Kurang dari 7 hari</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoLamaGejala" value="Tidak"><label class="ml-2">Tidak ada gejala</label>
                                            </div>
                                        </div>
                                        <div id="divQ11">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda pernah melakukan <b style="color:red">Tes Serologi </b>?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSerologi" value="NR"><label class="ml-2">Ya - hasil Non Reaktif</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSerologi" value="R"><label class="ml-2">Ya - hasil Reaktif</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSerologi" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ12">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda pernah melakukan <b style="color:red">Tes Swab PCR </b>?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSwab" value="NR"><label class="ml-2">Ya - hasil Non Reaktif</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSwab" value="R"><label class="ml-2">Ya - hasil Reaktif</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSwab" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ13">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda ada kontak erat dengan keluarga/teman<b style="color:red"> yang covid </b> dalam 2 minggu terakhir?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoKontak" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoKontak" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ14">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda berdomisili di <b style="color:red">Surabaya </b>?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSurabaya" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoSurabaya" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                        <div id="divQ15">
                                            <div class="form-group">
                                                <label for="test" style="font-size: xx-large;">Apakah anda pernah mengunjungi<b style="color:red"> mall/pasar/tempat belanja/tempat keramaian</b> dalam 2 minggu terakhir?</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoKunjungan" value="Ya"><label class="ml-2">Ya</label>
                                                <br>
                                                <input type="radio" class="form-check-input" style="<?php echo $rdoStyle ?>" name="rdoKunjungan" value="Tidak"><label class="ml-2">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background-color:white">
                                        
                                    </div>
                                    <ul class="row pagination rounded-separated pagination-primary">
                                        <div class="col-sm-2"></div>
                                        <li class="col page-item btn btn-round" id="pPrev" onClick="balik()">
                                            <a class="page-link bg-secondary">
                                                <i style="color:white;font-size:1rem;font-weight:bolder"> BACK</i>
                                            </a>
                                        </li>
                                        
                                        <li class="col page-item btn btn-round" id="pNext" onClick="lanjut()">
                                            <a class="page-link bg-secondary">
                                                <i id="txtNext" style="color:white;font-size:1rem;font-weight:bolder;"> NEXT</i>
                                            </a>
                                        </li>
                                        <div class="col-sm-2"></div>
                                    </ul>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="col"></div> -->
                        <!-- </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="copyright ml-auto">
                &copy; 2020, National Hospital</a>
            </div>
        </div>
    </footer>
</div>

