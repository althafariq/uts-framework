<script>
function onButtonPress() {
   $('.alert').alert('close')
}
</script>

<?php if ($this->session->flashdata('flash') ) : ?>
<div class="row mt-3 justify-content-center">
   <div class="col-md-6">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong><?= $this->session->flashdata('flash'); ?></strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
            onclick="onButtonPress()"></button>
      </div>
   </div>
</div>
<?php endif; ?>

<div class="container">
   <div class="row mt-3 justify-content-center">
      <div class="col-md-6">
         <div class="card">
            <div class="card-header fw-bold">
               New Domain
            </div>
            <div class="card-body">
               <form action="" method="post">
                  <div class="form-group row">
                     <label for="nama_domain">Nama Plan</label>
                     <input type="text" name="nama_domain" class="form-control" id="nama_domain">
                     <div class="form-text text-danger"><?php echo form_error('nama_domain') ?></div>
                  </div>
                  <fieldset class="form-group">
                     <div class="row pt-2">
                        <legend class="col-form-label col-sm-2 pt-0">cPanel</legend>
                        <div class="col-sm-15">
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="has_cpanel" id="has_cpanel1" value="y"
                                 checked>
                              <label class="form-check-label" for="has_cpanel1">
                                 Yes
                              </label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="has_cpanel" id="has_cpanel2" value="n">
                              <label class="form-check-label" for="has_cpanel2">
                                 No
                              </label>
                           </div>
                        </div>
                     </div>
                  </fieldset>
                  <fieldset class="form-group">
                     <div class="row pt-2">
                        <legend class="col-form-label col-sm-9 pt-0">SSL Certificate</legend>
                        <div class="col-sm-15">
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="has_ssl" id="has_ssl1" value="y"
                                 checked>
                              <label class="form-check-label" for="has_ssl1">
                                 Yes
                              </label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="has_ssl" id="has_ssl2" value="n">
                              <label class="form-check-label" for="has_ssl2">
                                 No
                              </label>
                           </div>
                        </div>
                     </div>
                  </fieldset>
                  <div class="form-group row pt-2">
                     <label for="has_subdomain">Subdomain</label>
                     <input type="text" name="has_subdomain" class="form-control" id="has_subdomain">
                     <div class="form-text text-danger"><?php echo form_error('has_subdomain') ?></div>
                  </div>
                  <div class="form-group row pt-2">
                     <label for="has_storage">Storage</label>
                     <input type="text" name="has_storage" class="form-control" id="has_storage">
                     <div class="form-text text-danger"><?php echo form_error('has_storage') ?></div>
                  </div>
                  <div class="form-group row pt-2">
                     <label for="num_database">Database Sizes</label>
                     <input type="text" name="num_database" class="form-control" id="num_database">
                     <div class="form-text text-danger"><?php echo form_error('num_database') ?></div>
                  </div>
                  <div class="form-group row pt-2">
                     <label for="harga">Harga</label>
                     <input type="text" name="harga" class="form-control" id="harga">
                     <div class="form-text text-danger"><?php echo form_error('harga') ?></div>
                  </div>
                  <button class="btn btn-primary mt-2 float-end" type="submit" name="submit">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>