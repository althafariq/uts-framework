<script>
function onButtonPress() {
   $('.alert').alert('close')
}
</script>

<?php if ($this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
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
               Edit Your Domain
            </div>
            <div class="card-body">
               <form action="" method="post">
                  <div class="form-group">
                     <label for="nama_domain">Nama Domain</label>
                     <input type="text" name="nama_domain" class="form-control" id="nama_domain"
                        value="<?php echo $domain->nama_domain ?>">
                     <div class="form-text text-danger"><?php echo form_error('nama_domain') ?></div>
                  </div>
                  <button class=" btn btn-primary mt-5 float-end" type="submit" name="submit">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>