<?php if($this->session->flashdata('pesan')=='gagal'):?>
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo 'Data gagal diupload ',$this->session->flashdata('pass'); ?>
  </div>
<?php elseif($this->session->flashdata('pesan')=='berhasil'):?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo 'Data berhasil diupload'; ?>
  </div>
<?php elseif($this->session->flashdata('pesan')=='hapus'):?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo 'Data berhasil dihapus'; ?>
  </div>
<?php elseif($this->session->flashdata('pesan')=='update'):?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo 'Data berhasil diupdate'; ?>
  </div>
<?php endif; ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-success" data-toggle="modal" data-target="#myModal" style="color: white;"><span class="fa fa-plus"></span> Add Guru</a>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" style="font-size:13px;">
              <thead>
                <tr>
                    <th>#</th>  
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>NIK</th>
                    <th>NUPTK</th>
                    <th>Tgl Lahir</th>
                    <th>Jenis Kelamin</th> 
                    <th>Mapel</th>
                    <th>Status</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach ($tampil as $i) :
                    $no++;
                    $id = $i['guru_id'];
                    $nama = $i['guru_nama'];
                    $nip = $i['guru_nip'];
                    $nik = $i['guru_nik'];
                    $nuptk = $i['guru_nuptk'];
                    $jk=$i['guru_jenkel'];
                    $tgl = $i['guru_tgl_lahir'];
                    $mapel = $i['guru_mapel'];
                    $status = $i['guru_status'];
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  
        		      <td><?php echo $nama;?></td>
                  <td><?php echo $nip;?></td>
                  <td><?php echo $nik;?></td>
                  <td><?php echo $nuptk;?></td>
                  <td><?php echo $tgl;?></td>
                  <td><?php echo $jk;?></td>
                  <td><?php echo $mapel;?></td>
                  <td><?php echo $status;?></td>
                  <td style="text-align:center;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" href="<?php echo site_url();?>admin/a_guru/hapusdata/<?php echo $id?>" onClick="return doconfirm();"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  <!-- The Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Guru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <form class="form-horizontal" action="<?php echo site_url('admin/a_guru/insert');?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
            <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">NIP</label>
                  <div class="col-sm-7">
                    <input type="text" name="NIP" class="form-control" id="inputUserName" placeholder="NIP" required>
                  </div>
                  <?= $this->session->flashdata('nip');?>
              </div>
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                  <div class="col-sm-7">
                    <input type="text" name="NIK" class="form-control" id="inputUserName" placeholder="NIK" required>
                  </div>
                  <?= $this->session->flashdata('nik');?>
              </div>
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">NUPTK</label>
                  <div class="col-sm-7">
                    <input type="text" name="NUPTK" class="form-control" id="inputUserName" placeholder="NUPTK" required>
                  </div>
                  <?= $this->session->flashdata('nuptk');?>
              </div>
          
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                  <div class="col-sm-7">
                      <input type="text" name="Nama" class="form-control" id="inputUserName" placeholder="Nama" required>
                  </div>
                  <?= $this->session->flashdata('nama');?>
              </div>

              <div class="form-group row justify-content-md-center">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="Laki-laki" name="JK" checked>
                        <label for="inlineRadio1"> Laki-Laki </label>
                    </div>
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="Perempuan" name="JK">
                        <label for="inlineRadio2"> Perempuan </label>
                    </div>
                </div>
              </div>

            

              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                  <div class="col-sm-7">
                      <input type="date" name="tgl" class="form-control" id="inputUserName" placeholder="mm/dd/yyyy" required>
                  </div>
                  <?= $this->session->flashdata('tgl');?>
              </div>

              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">Jenis Guru</label>
                  <div class="col-sm-7">
                      <input type="text" name="mapel" class="form-control" id="inputUserName" placeholder="Contoh: Guru Kelas, Guru Mapel" required>
                  </div>
                  <?= $this->session->flashdata('mapel');?>
              </div>

              <div class="form-group row justify-content-md-center">
                <label for="inputUserName" class="col-sm-4 control-label">Status Guru</label>
                <div class="col-sm-7">
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="PNS" name="status" checked>
                        <label for="inlineRadio1"> PNS </label> <br>
                    </div>
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="Tenaga Honor Sekolah" name="status">
                        <label for="inlineRadio2"> Tenaga Honor Sekolah </label> <br>
                    </div>
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="PPPK" name="status">
                        <label for="inlineRadio3"> PPPK </label>
                    </div>
                </div>
              </div>

             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  <!--- Modal edit-->

  <?php
    $no=0;
      foreach ($tampil as $i) :
        $no++;
        $id = $i['guru_id'];
        $nip = $i['guru_nip'];
        $nik = $i['guru_nik'];
        $nuptk = $i['guru_nuptk'];
        $nama = $i['guru_nama'];
        $jk = $i['guru_jenkel'];
        $tgl = $i['guru_tgl_lahir'];
        $mapel = $i['guru_mapel'];
        $status = $i['guru_status'];
  ?>
  <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Guru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <form class="form-horizontal" action="<?php echo site_url()?>admin/a_guru/update/<?php echo $id?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="ID" value="<?php echo $id?>">
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">NIP</label>
                  <div class="col-sm-7">
                    <input type="text" name="NIP" class="form-control" id="inputUserName" placeholder="NIP" value="<?php echo $nip?>" required>
                  </div>
                  <?= $this->session->flashdata('nip');?>
              </div>
          
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                  <div class="col-sm-7">
                    <input type="text" name="NIK" class="form-control" id="inputUserName" placeholder="NIK" value="<?php echo $nik?>" required>
                  </div>
                  <?= $this->session->flashdata('nik');?>
              </div>
          
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">NUPTK</label>
                  <div class="col-sm-7">
                    <input type="text" name="NUPTK" class="form-control" id="inputUserName" placeholder="NUPTK" value="<?php echo $nuptk?>" required>
                  </div>
                  <?= $this->session->flashdata('nuptk');?>
              </div>
          
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                  <div class="col-sm-7">
                      <input type="text" name="Nama" class="form-control" id="inputUserName" placeholder="Nama" value="<?php echo $nama?>" required>
                  </div>
                  <?= $this->session->flashdata('nama');?>
              </div>

              <div class="form-group row justify-content-md-center">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="Laki-laki" name="JK" <?php if($jk=="Laki-laki"){echo "checked";}?>>
                        <label for="inlineRadio1"> Laki-Laki </label>
                    </div>
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="Perempuan" name="JK" <?php if($jk=="Perempuan"){echo "checked";}?>>
                        <label for="inlineRadio2"> Perempuan </label>
                    </div>
                </div>
              </div>

          
              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                  <div class="col-sm-7">
                      <input type="date" name="tgl" class="form-control" id="inputUserName" placeholder="mm/dd/yyyy" value="<?php echo $tgl?>" required>
                  </div>
                  <?= $this->session->flashdata('tgl');?>
              </div>

              <div class="form-group row justify-content-md-center">
                  <label for="inputUserName" class="col-sm-4 control-label">Mata Pelajaran</label>
                  <div class="col-sm-7">
                      <input type="text" name="mapel" class="form-control" id="inputUserName" placeholder="Contoh: PPKN, Matematika" value="<?php echo $mapel?>" required>
                  </div>
                  <?= $this->session->flashdata('mapel');?>
              </div>

              <div class="form-group row justify-content-md-center">
                <label for="inputUserName" class="col-sm-4 control-label">Status Guru</label>
                <div class="col-sm-7">
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="PNS" name="status" <?php if($status=="PNS"){echo "checked";}?>>
                        <label for="inlineRadio1"> PNS </label>
                    </div>
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="Tenaga Honor Sekolah" name="status" <?php if($status=="Tenaga Honor Sekolah"){echo "checked";}?>>
                        <label for="inlineRadio2"> Tenaga Honor Sekolah </label>
                    </div>
                    <div class="radio radio-info d-inline">
                        <input type="radio" id="inlineRadio1" value="PPPK" name="status" <?php if($status=="PPPK"){echo "checked";}?>>
                        <label for="inlineRadio3"> PPPK </label>
                    </div>
                </div>
              </div>

              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  <?php endforeach ?>
</section>

<script>
  function doconfirm()
  {
      job=confirm("Apakah anda yakin akan menghapus data ini?");
      if(job!=true)
      {
          return false;
      }
  }
</script>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 3000);
</script>