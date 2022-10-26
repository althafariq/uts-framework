<script>
function onButtonPress() {
   $('.alert').alert('close')
}
</script>

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

<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
   <h1 class="display-4 fw-normal">Pricing</h1>
   <p class="fs-5 text-muted">Pilih Paket Web Hostingmu
   </p>
</div>

</header>

<div class="container">
   <div class="row row-cols-1 row-cols-md-3 mb-3 text-center justify-content-center">
      <?php 
      foreach ($hosting as $plan) :
      ?>
      <div class="col">
         <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
               <h4 class="my-0 fw-normal"><?php echo $plan->nama_hosting ?></h4>
            </div>
            <div class="card-body">
               <!-- <small style="position: relative; top: 0.5em; font-size:80%;">Rp</small> -->
               <h1 class="card-title pricing-card-title"><?php echo rupiah($plan->harga) ?><small
                     class="text-muted fw-light" style="font-size: 50%">/bln</small></h1>
               <ul class="list-unstyled mt-3 mb-4">
                  <li><?php echo convertBytes($plan->has_storage) ?> of Database Storage</li>
                  <li><?php echo checkcPanel($plan->has_cpanel) ?> cPanel</li>
                  <li><?php echo ssl($plan->has_ssl) ?></li>
                  <li><?php echo database($plan->num_database) ?> Available Database</li>
                  <li><?php echo subdomain($plan->has_subdomain) ?> Available Subdomain</li>
               </ul>
               <a href="<?= base_url(); ?>hosting/add" class="w-100 btn btn-lg btn-primary">Mulai</a>
            </div>
         </div>
      </div>
      <?php endforeach; ?>
   </div>

   <h2 class="display-6 text-center mb-4">Compare plans</h2>

   <div class="table-responsive">
      <table class="table text-center">
         <thead>
            <tr>
               <th style="width: 34%;"></th>
               <?php 
               foreach ($hosting as $plan) :
               ?>
               <th style="width: 22%;"><?php echo $plan->nama_hosting ?></th>
               <?php endforeach; ?>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row" class="text-start">Database Storage</th>
               <?php 
               foreach ($hosting as $plan) :
               ?>
               <td><?php echo convertBytes($plan->has_storage) ?></td>
               <?php endforeach; ?>
            </tr>
            <tr>
               <th scope="row" class="text-start">cPanel</th>
               <?php 
               foreach ($hosting as $plan) :
               ?>
               <td><?php echo icon($plan->has_cpanel) ?></td>
               <?php endforeach; ?>
            </tr>
            <tr>
               <th scope="row" class="text-start">SSL Certificate</th>
               <?php 
               foreach ($hosting as $plan) :
               ?>
               <td><?php echo icon($plan->has_ssl) ?></td>
               <?php endforeach; ?>
            </tr>
            <tr>
               <th scope="row" class="text-start">Databases</th>
               <?php 
               foreach ($hosting as $plan) :
               ?>
               <td><?php echo database($plan->num_database) ?></td>
               <?php endforeach; ?>
            </tr>
            <tr>
               <th scope="row" class="text-start">Subdomain</th>
               <?php 
               foreach ($hosting as $plan) :
               ?>
               <td><?php echo icon($plan->has_subdomain) ?></td>
               <?php endforeach; ?>
            </tr>
         </tbody>
      </table>
   </div>
</div>