<ul class="nav nav-tabs">
    <?php foreach (Customize::instance()->getAdminSettingItems()as $key => $item): ?>

        <li class="nav-item">
            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == $item['urlPath']) echo ' active' ?>" href="<?= $item['urlPath'] ?>">
                <i class="<?= $item['classIcon'] ?>"></i>
                <?= $lang->dashboardMenu[$item['title']]?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>