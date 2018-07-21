<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3><?= $users->name . ' ' . $users->lastname ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formUsers">
                        <input type="hidden" name="user_id" id="formUserId" value="<?= $users->id ?>" />

                        <div class="form-group">
                            <label for="formTitle">Name</label>
                            <input type="text" name="name" class="form-control" id="formName" value="<?= $users->name ?>" >
                        </div>

                            <div class="form-group">
                                <label for="formTitle">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="formLastName" value="<?= $users->lastname ?>" >
                            </div>

                            <div class="form-group">
                                <label for="formTitle">Date</label>
                                <input type="text" name="date" class="form-control" id="formDate" value="<?= $users->date ?>" >
                            </div>

                            <div class="form-group">
                                <label for="formTitle">Email</label>
                                <input type="text" name="email" class="form-control" id="formEmail" value="<?= $users->email ?>" >
                            </div>

                            <div class="form-group">
                                <label for="formTitle">Password</label>
                                <input type="password" name="password" class="form-control" id="formPassword" value="" placeholder="Change Password ..."  >
                            </div>
                            <div class="form-group">
                                <label for="formTitle">Role <B><?= ' ' . strtoupper($users->role) . ' '?></B><?= 'Change to' ?></label>
                                <SELECT class="form-control" NAME="role" id="formRole">
                                    <OPTION VALUE="user" <?php if ($users->role == 'user') echo 'selected'; ?> >User
                                    <OPTION VALUE="moderator" <?php if ($users->role == 'moderator') echo 'selected'; ?>  >Moderator
                                    <OPTION VALUE="admin" <?php if ($users->role == "admin") echo "selected"; ?>>Admin
                                </SELECT>
                            </div>

                            <div class="form-group">
                                <label for="formTitle">Date Reg</label>
                                <input type="text" name="date_reg" class="form-control" id="formDateReg" value="<?= $users->date_reg ?>" >
                            </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Update this Users</p>
                        <button type="submit" class="btn btn-primary" onclick="user.update()">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>