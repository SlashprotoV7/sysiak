<div class="form-body">
  <div class="row">
    <div class="col-md-12" style="margin-bottom: -38px;">
        <div class="card card-body printableArea">

          <form method="post" action="<?= base_url('admin/addformmasuk');?>" class="form-horizontal" >
              <div class="form-body">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group row">
                              <label class="control-label text-left col-md-3">Nama Pengaju</label>
                              <div class="col-md-9">
                                <input class="form-control" type="text" name="id_pengaju" id="id_pengaju">

                              </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group row">
                            <label for="example-text-input" class="col-md-3 col-form-label" id="bagian_cari">Bagian</label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" value="" id="example-text-input" readonly="" name="bagian">
                            </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group row">
                              <label class="control-label text-left col-md-3">Permasalahan</label>
                              <div class="col-md-9">
                                <input class="form-control" type="text" name="id_masalah" id="id_masalah">

                              </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group row">
                            <label for="example-text-input" class="col-md-3 col-form-label">Rincian Permasalahan</label>
                            <div class="col-md-9">
                              <textarea class="form-control" type="text" name="uraian_masalah" id="uraian_masalah"></textarea>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group row">
                            <button type="submit" class="btn btn-outline-success"><span><i class="fa fa-save"></i> Simpan</span></button>
                          </div>
                      </div>
                    </div>
                </div>
             </form>
          </div>
        </div>
       </div>
    </div>
