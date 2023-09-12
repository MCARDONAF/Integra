
<?php $__env->startSection('title', __('Tarotistas')); ?>

<?php $__env->startSection('styles'); ?>


<link rel="stylesheet" href="<?php echo e(asset('css/tarod.css')); ?>">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-cont">
        <div class="banner-taro">
            <h1>Tarotistas</h1>
        </div>
        <section class="container-info">
            <h3>Bien conocido</h3>
            <h1>Titulo contexto</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolorem consequatur quisquam asperiores libero, enim perferendis non qui. Corporis, accusantium.</p>

            <div class="content-card-info">
                <div class="card-info">
                    <div class="cont-1">
                        <img src="<?php echo e(asset('img/team1.jpg')); ?>" alt="toratista">
                    </div>
                    <div class="cont-2">
                        <h1>Jhon T.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eius ea officiis ipsam, dolore quis et eveniet necessitatibus aspernatur minus possimus fugiat deleniti expedita exercitationem earum aliquam quas eaque laborum.</p>
                    </div>
                </div>

                <div class="card-info">
                    <div class="cont-1">
                        <img src="<?php echo e(asset('img/team1.jpg')); ?>" alt="toratista">
                    </div>
                    <div class="cont-2">
                        <h1>Jhon T.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eius ea officiis ipsam, dolore quis et eveniet necessitatibus aspernatur minus possimus fugiat deleniti expedita exercitationem earum aliquam quas eaque laborum.</p>
                    </div>
                </div>

                <div class="card-info">
                    <div class="cont-1">
                        <img src="<?php echo e(asset('img/team1.jpg')); ?>" alt="toratista">
                    </div>
                    <div class="cont-2">
                        <h1>Jhon T.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eius ea officiis ipsam, dolore quis et eveniet necessitatibus aspernatur minus possimus fugiat deleniti expedita exercitationem earum aliquam quas eaque laborum.</p>
                    </div>
                </div>

             
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\msnar\OneDrive\Escritorio\proyecto-personal\esoterismo\resources\views/tarotistas.blade.php ENDPATH**/ ?>