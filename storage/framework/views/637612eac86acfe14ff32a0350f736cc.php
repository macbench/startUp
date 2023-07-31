

<?php $__env->startPush('title'); ?>
    Apoio
<?php $__env->stopPush(); ?>

<?php $__env->startPush('home'); ?>
<div class="swiper-container home-slider">
    <div class="swiper-wrapper wrapper">
        <div class="swiper-slide slide">
            <div class="image">
                <div class="contentBtn">
                    <a href="#" class="btnJogo">Quero Apoiar!</a>
                </div>


                <img src="<?php echo e(asset('assets/img/i-did-it.jpg')); ?>" alt="">
            </div>

        </div>
        <div class="swiper-slide slide">
            <div class="image">
                <div class="contentBtn">
                    <a href="#" class="btnJogo">Quero Apoiar!</a>
                </div>


                <img src="<?php echo e(asset('assets/img/happy-man.jpg')); ?>" alt="">
            </div>
            
        </div>
        <div class="swiper-slide slide">
            <div class="image">
                <div class="contentBtn">
                    <a href="#" class="btnJogo">Quero Apoiar!</a>
                </div>


                <img src="<?php echo e(asset('assets/img/happy-girl.jpg')); ?>" alt="">
            </div>
            
        </div>
    </div>

    <div class="swiper-pagination"></div>

</div>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('home_parte_2'); ?>

<h1 class="welcome">Deseja ver a App crescer com mais funcionalidades?</h1>
<h2 class="sub-come pd-down">
    Os seus Donativos ajudarão nesse sentido! <br> <img class="donate" src="../img/donation (1).png" alt="">
</h2>

<div class="payments">
    <img src="<?php echo e(asset('assets/img/m-pesa.png')); ?>" alt="">
    <img src="<?php echo e(asset('assets/img/paypal.png')); ?>" alt="">
</div>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('includers.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP-K4T\Documents\GitHub\startUp\resources\views/pages/apoio.blade.php ENDPATH**/ ?>