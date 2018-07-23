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
                        <?= $user->user_id ?>
                    </th>
                    <td>
                        <a href="/admin/user/edit/<?= $user->user_id ?>">
                        <?= $user->user_name . ' ' . $user->user_lastname?>
                        </a>
                    </td>

                    <td>
                        <?= $user->user_day . '-' . $user->user_month . '-' . $user->user_year ?>
                    </td>

                    <td>
                        <?= $user->user_email ?>
                    </td>

                    <td>
                        <? if($user->user_group == '1') {
		                        return 'User';
	                        } elseif ($user->user_group == '2') {
		                        return 'User2';
	                        } elseif ($user->user_group == '3') {
		                        return 'User3';
	                        } elseif ($user->user_group == '4') {
		                        return 'Moder';
	                        } elseif ($user->user_group == '5') {
		                        print 'Admin';
	                        } ?>
                    </td>

                    <td>
                        <?= $user->user_reg_date ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

<?php $this->theme->footer(); ?>