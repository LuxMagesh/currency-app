<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-info">Add New Ticket</button>
            
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
      </div>
      <div class="container text-center">
    <div class="row">
            <div class="col">
           
            </div>
            <div class="col">
            <form action="<?php echo e(url('/tickets/'.$ticket->id)); ?>" method="post">
           <?php echo e(csrf_field()); ?>

           <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name"  value="<?php echo e($ticket->name); ?>">          
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" id="email"  value="<?php echo e($ticket->email); ?>">          
      </div>
            <div class="form-group">
              <label for="category">Category</label>
              <input type="text" class="form-control" name="category" id="category"  value="<?php echo e($ticket->category); ?>">          
          </div>
            <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" class="form-control" name="summary" id="summary"  value="<?php echo e($ticket->summary); ?>">          
            </div>
             <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="<?php echo e($ticket->description); ?>">          
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" id="status" value="<?php echo e($ticket->status); ?>">          
            </div>

            <button type="submit" class="btn btn-sm btn-outline-secondary">Update</button>
            

      </form>
            </div>
            <div class="col">
          
            </div>
    </div>
    </div>
     

</main><?php /**PATH C:\xampp\htdocs\ticket-support\resources\views/layout/partials/_show_form.blade.php ENDPATH**/ ?>