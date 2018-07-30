<?php $this->theme->header(); ?>
	
	<main>
		<div class="container">
			<div class="row">
				<div class="col page-title">
					<h3><?= $users->user_name . ' ' . $users->user_lastname ?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-9">
					<form id="formUsers" autocomplete="off">
						<div class="form-inline">
							<input type="hidden" name="user_id" id="formUserId" value="<?= $users->user_id ?>"/>
							
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="formTitle"><?= $lang->dashboardMain['name'] ?></label> <input type="text" name="name"
									                                           class="form-control" id="formName"
									                                           value="<?= $users->user_name ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="formTitle"><?= $lang->dashboardMain['lastname'] ?></label> <input type="text" name="lastname"
									                                                class="form-control"
									                                                id="formLastName"
									                                                value="<?= $users->user_lastname ?>">
								</div>
							</div>
							</div>
						
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="formDate"><?= $lang->dashboardMain['date'] ?></label> <input type="date" name="date"
									                                           class="form-control" id="formDate"
									                                           value="<?= $users->user_day ?>">
								</div>
							</div>
							<div class="form-group col-md-5>
								<label for="formTitle"><?= $lang->dashboardMain['role'] ?> <B><? if ($users->user_group == '1') {
											return 'User';
										} elseif ($users->user_group == '2') {
											return 'User2';
										} elseif ($users->user_group == '3') {
											return 'User3';
										} elseif ($users->user_group == '4') {
											return 'Moder';
										} elseif ($users->user_group == '5') {
											print 'Admin';
										} ?></B> Change to</label>
								<SELECT class="form-control col-md-4" NAME="role" id="formRole">
									<OPTION VALUE="2" <?php if ($users->user_group == '1') echo 'selected'; ?> >
										User
									<OPTION VALUE="4" <?php if ($users->user_group == '4') echo 'selected'; ?> >
										Moderator
									<OPTION VALUE="1" <?php if ($users->user_group == "5") echo "selected"; ?> >
										Admin
								</SELECT>
							
						
						<div class="form-inline">
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="formTitle"><?= $lang->dashboardMain['email'] ?></label> <input type="text" name="email"
									                                            class="form-control" id="formEmail"
									                                            value="<?= $users->user_email ?>">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="formTitle"><?= $lang->dashboardMain['password'] ?></label> <input type="password" name="password"
									                                               class="form-control" autocomplete="off"
									                                               id="formPassword" value=""
									                                               placeholder="Change Password ...">
								</div>
							</div>
						</div>
						
						<div class="form-group col-md-5">
							<label for="formDate"><?= $lang->dashboardMain['date_reg'] ?></label> <input type="date" name="date_reg"
							                                               class="form-control" id="formDateReg"
							                                               value="<?= $users->user_reg_date ?>">
						</div>
				
					</form>
				</div>
				<div class="col-3">
					<div>
						<p><?= $lang->dashboardMain['text2']?></p>
						<button type="submit" class="btn btn-primary" onclick="user.update()">
							<?= $lang->dashboardMain['update'] ?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php $this->theme->footer(); ?>