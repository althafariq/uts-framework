<script>
function onButtonPress() {
   $('.alert').alert('close')
}
</script>

<div class="container">
   <?php if ($this->session->flashdata('flash') ) : ?>
   <div class="row mt-3">
      <div class="col-md-6">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong><?= $this->session->flashdata('flash'); ?></strong> succesfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
               onclick="onButtonPress()"></button>
         </div>
      </div>
   </div>
   <?php endif; ?>

   <div class="row mt-3 justify-content-between">
      <div class="col-1 w-25">
         <h3>Your Domain</h3>
      </div>
      <div class="col-1 float-end">
         <a href="<?= base_url(); ?>domain/add" class="btn btn-primary">Insert</a>
      </div>

      <table class="table table-striped">
         <thead>
            <tr>
               <th scope="col">No</th>
               <th scope="col">Domain Name</th>

            </tr>
         </thead>
         <tbody>
            <?php 
            $i = 0;
            foreach ($domain as $dom) :
            $i++; ?>
            <tr>
               <th scope="row"><?php echo $i; ?></th>
               <td><?php echo $dom->nama_domain ?></td>
               <td>
                  <a href="<?php echo base_url(); ?>domain/edit/<?php echo $dom->id_domain ?>"
                     class="badge text-bg-info">Edit</a>
                  <a href="<?php echo base_url(); ?>domain/delete/<?php echo $dom->id_domain ?>"
                     class="badge text-bg-danger" onclick="return confirm('Delete this domain?');" id="delete">Delete
                  </a>
               </td>
            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>