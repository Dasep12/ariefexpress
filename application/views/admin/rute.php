 <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Rute Pengiriman</h3>
                        <p class="animated fadeInDown">
                          Rute Pengiriman <span class="fa-angle-right fa"></span> Rute 
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <a class="btn btn-info" href="#"><i class="fa fa-plus"></i>  Tambah Data Pengiriman </a>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kota</th>
                          <th>Negara</th>
                          <th>Estimasi Waktu</th>
                          <th>Harga</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Amsterdam</td>
                          <td>Belanda</td>
                          <td>3-4 Hari</td>
                          <td>Rp.600.000</td>
                          <td>
                            <a href="#" class="btn btn-danger xs">edit</a>
                            <a href="#" class="btn btn-danger xs">hapus</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Indonesia</td>
                          <td>Singapura</td>
                          <td>3-4 Hari</td>
                          <td>Rp.700.000</td>
                          <td>
                            <a href="#" class="btn btn-danger xs">edit</a>
                            <a href="#" class="btn btn-danger xs">hapus</a>
                          </td>
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
<script type="text/javascript">
  $(document).ready(function(){
    //datatable
    $('#datatables-example').DataTable();
  });
</script>