        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h1 class="h1 mb-0 text-gray-800 ">Data Perumahan</h1>
          </div>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addmodal">Add</button>
            <form class="d-none d-sm-inline-block form-inline ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" id="searchbox" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                            </button>
                    </div>
                </div>
            </form>
          </div>        

          <!-- DataTales Example -->
          <table id="table" class="display">
                <thead>
                    <tr>
                        <th>Nama Perumahan</th>
                        <th>Kota</th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Anggrek</td>
                        <td>Malang</td>
                        <td>
                            <button class="btn btn-outline-success mt-10 mb-10" data-toggle="modal" data-target="#editmodal">Edit</button>
                            <button class="btn btn-danger mt-10 mb-10">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Melati</td>
                        <td>Surabaya</td>
                        <td>
                            <button class="btn btn-outline-success mt-10 mb-10">Edit</button>
                            <button class="btn btn-danger mt-10 mb-10">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!-- /.container-fluid -->

        <!-- modal edit -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="editTitle">Edit Perumahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="id-perumahan" class="col-form-label">Id Perumahan:</label>
                    <input type="text" class="form-control" id="id-perumahan" value="" readonly>
                  </div>
                  <div class="form-group">
                    <label for="nama-perumahan" class="col-form-label">Nama Perumahan:</label>
                    <input type="text" class="form-control" id="nama-perumahan">
                  </div>
                  <div class="form-group">
                    <label for="nama-kota" class="col-form-label">Kota:</label>
                    <input type="text" class="form-control" id="nama-kota">
                  </div>
                 
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div> 

        <!-- modal add -->
        <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="addTitle">Add Perumahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="id-perumahan" class="col-form-label">Id Perumahan:</label>
                    <input type="text" class="form-control" id="id-perumahan" placeholder="ID Perumahan...">
                  </div>
                  <div class="form-group">
                    <label for="nama-perumahan" class="col-form-label">Nama Perumahan:</label>
                    <input type="text" class="form-control" id="nama-perumahan" placeholder="Nama Perumahan..." >
                  </div>
                  <div class="form-group">
                    <label for="nama-kota" class="col-form-label">Kota:</label>
                    <input type="text" class="form-control" id="nama-kota" placeholder="Kota...">
                  </div>
                 
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add</button>
              </div>
            </div>
          </div>
        </div>  
      

      </div>
      <!-- End of Main Content -->

     
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top"> 
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url("index.php/Main/logoutuser");?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('dist/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('dist/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('dist/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('dist/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('dist/vendor/chart.js/Chart.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('dist/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo base_url('dist/js/demo/chart-pie-demo.js');?>"></script>

  <script src="<?php echo base_url('dist/vendor/datatables/jquery.dataTables.js');?>"></script>
	<script src="<?php echo base_url('dist/js/table.js');?>"></script>


</body>

</html>
