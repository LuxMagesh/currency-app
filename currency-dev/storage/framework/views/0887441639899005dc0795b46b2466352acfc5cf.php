<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <a href="<?php echo e(url('complex')); ?>" style="margin-right:50px" class="btn btn-danger">Complex Query</a>
          <a href="<?php echo e(url('create')); ?>" style="margin-right:50px" class="btn btn-info">Add New Ticket</a>
          <div class="form-group">
            
            

            <form method="get" action="<?php echo e(url('/complex')); ?>">
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
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">City</th>
            <th scope="col">Gender</th>
            <th scope="col">Interests</th>
            <th scope="col">Date</th>
            <th scope="col">Date</th>

          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $complex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complexx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td> <?php echo e($complexx->id); ?> </td>
              <td> <?php echo e($complexx->surname); ?> </td>
              <td> <?php echo e($complexx->email); ?> </td>
              <td> <?php echo e($complexx->mobile); ?> </td>
              <td> <?php echo e($complexx->city); ?> </td>
              <td> <?php echo e($complexx->gender); ?> </td>
              <td> <?php echo e($complexx->interests); ?> </td>
              <td> <?php echo e($complexx->created_at); ?> </td>
              <td> <?php echo e($complexx->created_at); ?> </td>
              
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
</main><?php /**PATH C:\xampp\htdocs\ticket-support\resources\views/layout/partials/_complex.blade.php ENDPATH**/ ?>