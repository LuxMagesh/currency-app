<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="<?php echo e(url('complex')); ?>" style="margin-right:50px" class="btn btn-danger">Complex Query</a>
            <a href="<?php echo e(url('create')); ?>" style="margin-right:50px" class="btn btn-info">Add New Ticket</a>
            <div class="form-group">
              
              
  
              <form method="get" action="<?php echo e(url('/tickets')); ?>">
                  <div class="input-group">
                      <select class="form-select" name="date_filter">
                          <option value="">All Dates</option>
                          <option value="today" <?php echo e($dateFilter == 'today' ? 'selected' : ''); ?>>Today</option>
                          <option value="yesterday" <?php echo e($dateFilter == 'yesterday' ? 'selected' : ''); ?>>Yesterday</option>
                          <option value="this_week" <?php echo e($dateFilter == 'this_week' ? 'selected' : ''); ?>>This Week</option>
                          <option value="last_week" <?php echo e($dateFilter == 'last_week' ? 'selected' : ''); ?>>Last Week</option>
                          <option value="this_month" <?php echo e($dateFilter == 'this_month' ? 'selected' : ''); ?>>This Month</option>
                          <option value="last_month" <?php echo e($dateFilter == 'last_month' ? 'selected' : ''); ?>>Last Month</option>
                          <option value="this_year" <?php echo e($dateFilter == 'this_year' ? 'selected' : ''); ?>>This Year</option>
                          <option value="last_year" <?php echo e($dateFilter == 'last_year' ? 'selected' : ''); ?>>Last Year</option>
                          </select>
                      <button type="submit" class="btn btn-warning">Filter</button>
                  </div>
              </form>
  
          </div>
            
            
            
          </div>
        
            

        </div>
      </div>

      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Summary</th>
              <th scope="col">Description</th>
              <th scope="col">Status</th>
              <th scope="col">Logged By</th>
              <th scope="col">Date Logged</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticketss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td> <?php echo e($ticketss->id); ?> </td>
                <td> <?php echo e($ticketss->summary); ?> </td>
                <td> <?php echo e($ticketss->description); ?> </td>
                <td> <?php echo e($ticketss->status); ?> </td>
                <td> <?php echo e($ticketss->name); ?> </td>
                <td> <?php echo e($ticketss->created_at); ?> </td>
                <td> <a href="tickets/<?php echo e($ticketss->id); ?>" class="btn btn-info">Update</a> </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      <script type="text/javascript">
        $(function() {
           $('#datetimepicker').datetimepicker();
        });
    </script>
</main><?php /**PATH C:\xampp\htdocs\ticket-support\resources\views/layout/partials/_content.blade.php ENDPATH**/ ?>