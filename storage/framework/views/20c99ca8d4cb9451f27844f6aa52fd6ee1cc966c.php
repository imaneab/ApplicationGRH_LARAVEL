<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>

            <div class="">
                <div class="panel-heading"></div>

                <div class="panel-body">
                <form class="navbar-form" role="search" method="GET" action="<?php echo e(url("/chercher")); ?>">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="chercher par nom" name="nom">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        </div>
    </div>
  
</div>

    </section>