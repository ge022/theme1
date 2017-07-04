<?php get_header(); ?>

<main id="top">
  
 <?php include 'about.php' ?>
 
 <?php include 'services.php' ?>
 
 <?php include 'contact.php' ?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <p class="response"></p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
</main>

<?php get_footer(); ?>