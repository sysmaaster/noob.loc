<?php

namespace Admin\Model\User;

use Engine\Model;

class UserRepository extends Model
{
    public function getUsers()
    {
        $sql = $this->queryBuilder->select()
            ->from('users')
            ->orderBy('user_id', 'ASC')
            ->sql();

        return $this->db->query($sql);
    }
    /**
     * @param $id
     * @return null|\stdClass
     */
    public function getUserData($id)
    {
        $user = new User($id);

        return $user->findOne();
    }

    public function updateUser(array $params)
    {
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $sql = $this->queryBuilder
                    ->update('users')
                    ->set([$key => $value])
                    ->where('user_id', $params['user_id'])
                    ->sql();
                $this->db->execute($sql, $this->queryBuilder->values);
            }
        }
    }

    public function updateUs($params)
    {
        $sql = $this->queryBuilder
            ->select()
            ->update('users')
            ->set(['user_name' => $params['name']])
            ->set(['user_lastname' => $params['lastname']])
            ->set(['user_day' => $params['date']])
            ->set(['user_email' => $params['email']])
            ->set(['user_password' => md5($params['password'])])
            ->set(['user_role' => $params['role']])
            ->set(['user_red_date' => $params['date_red']])
            ->where('user_id', $params['user_id'])
            ->sql();
        print_r($this->queryBuilder->values);
        $this->db->execute($sql, $this->queryBuilder->values);

    }
}