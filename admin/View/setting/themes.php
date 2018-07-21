<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col page-title">
                <h3>Settings</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="setting-tabs">
			<?php  Theme::block('setting/tabs'); ?>
                </div>
            </div>
        </div>

        <div class="row">
			<?php foreach ($themes as $theme): ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= $theme->screen ?>" alt="image404">
                        <div class="card-body">
                            <h5 class="card-title"><?= $theme->name ?></h5>
                            <p class="card-text"> Version: <?= $theme->version ?> <br> Description: <?= $theme->description ?></p>
                            <p class="card-text"></p>
							<?php if ($activeTheme == $theme->dirTheme): ?>
                                <button class="btn btn-primary" disabled>
                                    Activated
                                </button>
							<?php else: ?>
                                <button class="btn-primary btn" onclick="setting.setActiveTheme(this, '<?= $theme->dirTheme?>')">
                                    Activate
                                </button>
							<?php endif; ?>
                        </div>
                    </div>
                </div>

			<?php endforeach; ?>
        </div>









    </div>
</main>
<?php $this->theme->footer(); ?>









