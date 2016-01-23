<div class="container">
	<div class="header clearfix">
        <nav>
          <?php if ( !isset($non_aktif) ): ?>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="<?php echo base_url() . 'home'; ?>">Home</a></li>
            <li role="presentation"><a href="<?php echo base_url() . 'home/logout'; ?>">Log out</a></li>
          </ul>
          <?php endif ?>
        </nav>
        <h3 class="text-muted">KOFEIN 2016</h3>
	</div>
</div>
