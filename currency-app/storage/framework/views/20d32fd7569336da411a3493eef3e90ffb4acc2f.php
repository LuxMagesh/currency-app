

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-20 px-4 pt-16">
        <div class="popular-movies mr-20 ml-20">
            <h2 class="animate-pulse uppercase tracking-wider transition ease-in-out delay-150 hover:-translate-300-y-1 hover:scale-110 text-gray-600 text-3xl hover:bg-green-900 md:hover:bg-transparent md:hover:text-green-900 md:p-0 md:dark:hover:text-green-500 dark:text-slate-300 dark:hover:bg-gray-700 dark:hover:text-green-300 md:dark:hover:bg-transparent font-semibold">Currencies</h2>
            <div class="grid lg:grid-cols-12 sm:grid-col-2 md:grid-cols-3 gap-4 bg-blue-600">
               
               
              </div>
              <div class="grid grid-rows-3 grid-flow-col gap-4 mt-4">
                <div class="row-span-3 ... lg:grid-cols-12 sm:grid-col-2 md:grid-cols-3">
                    
                    <button onclick="window.location='<?php echo e(url('create')); ?>'" class="bg-white mt-4 shadow-xl w-full max-w-lg hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                        + New Currency
                    </button>
                </div>
                
                <div class="row-span-2 col-span-2 ...  lg:grid-cols-12 sm:grid-col-2 md:grid-cols-3 mt-4">
                  
          <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-xl">
                    <thead class="text-xl text-green-500 uppercase bg-gray-50 dark:bg-green-500 dark:text-green-400 shadow-xl">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Currency Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Currency Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Zar Exchange Rate
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Edit
                          </th>
                            <th scope="col" class="px-6 py-3">
                                Delete
                          </th>
                        </tr>
                    </thead>
                      <tbody>
                        <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currencyx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-green-300 dark:hover:bg-green-300">
                              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo e($currencyx->currency_name); ?>

                              </th>
                              <td class="px-6 py-4">
                                <?php echo e($currencyx->currency_code); ?>

                              </td>
                              <td class="px-6 py-4">
                                <?php echo e($currencyx->zar_exchange); ?>

                              </td>
                              <td class="px-6 py-4">
                                <button onclick="window.location='<?php echo e(url('edit/'.$currencyx->id)); ?>'" class="flex justify-center ... shadow-xl bg-blue w-full max-w-lg hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border-blue-500 hover:border-transparent rounded">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                  </svg>                                  
                              </button>
                              </td>
                              <td class="px-6 py-4">
                                <button onclick="window.location='<?php echo e(url('delete/'.$currencyx->id)); ?>'" class="flex justify-center ... shadow-xl bg-red w-full max-w-lg hover:bg-red-500 text-red-700 font-semibold hover:text-white py-1 px-2 border-red-500 hover:border-transparent rounded">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                                  
                              </button>
                              </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>
                </div>
     
                </div>
              </div>

        </div>
    
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\currency-app\resources\views/index.blade.php ENDPATH**/ ?>