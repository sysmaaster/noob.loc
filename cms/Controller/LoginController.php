<?php
	
	namespace Cms\Controller;
	
	use Engine\DI\DI;
	use Engine\Core\Auth\Auth;
	use Engine\Core\Database\QueryBuilder;
	
	class LoginController extends CmsController
	{
		public function __construct(DI $di)
		{
			parent::__construct($di);


			$this->auth = new Auth();

			if ($this->auth->hashUser() !== null) {
				// redirect
				header('Location: /');
				exit;
			}
		}
		
		public function form()
		{
			print_r($_SESSION);
			$this->view->render('form');
		}
		
		public function authUser()
		{
			$params       = $this->request->post;
			$queryBuilder = new QueryBuilder();
			
			$sql = $queryBuilder
				->select()
				->from('users')
				->where('user_email', $params['email'])
				->where('user_password', md5($params['password']))
				->limit(1)
				->sql();
			
			$query = $this->db->query($sql, $queryBuilder->values);
			
			if (!empty($query)) {
				$user = $query[0];
				
				if ($user->user_group == '5') {
					$hash = md5($user->user_id . $user->user_email . $user->user_password . $this->auth->salt());
					
					$sql = $queryBuilder
						->update('users')
						->set(['user_hid' => $hash])
						->where('user_id', $user->user_id)->sql();
					
					$this->db->execute($sql, $queryBuilder->values);
					
					$old_array = (array) $user;
					$new_array = array( 'user_id' => '', 'user_name' => '', 'user_lastname' => '', 'user_photo' => '');
					$users = array_intersect_key($old_array, $new_array);
					
					$this->auth->authorize($users, $hash);
					
					header( 'Location: /');
					exit;
				}
			}
			
			echo 'Incorrect email or password.';
		
		}
		
		public function regUser()
		{
		
		}
	}