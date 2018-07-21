<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Users</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="setting-tabs">
                        <?php  Theme::block('setting/tabs'); ?>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Date Reg</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <th scope="row">
                        <?= $user->id ?>
                    </th>
                    <td>
                        <a href="/admin/user/edit/<?= $user->id ?>">
                        <?= $user->name . ' ' . $user->lastname?>
                        </a>
                    </td>

                    <td>
                        <?= $user->date ?>
                    </td>

                    <td>
                        <?= $user->email ?>
                    </td>

                    <td>
                        <?= $user->role ?>
                    </td>

                    <td>
                        <?= $user->date_reg ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

<?php $this->theme->footer(); ?>