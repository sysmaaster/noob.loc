<?php

namespace Admin\Model\User;

use Engine\Model;

class UserRepository extends Model
{
    public function getUsers()
    {
        $sql = $this->queryBuilder->select()
            ->from('user')
            ->orderBy('id', 'ASC')
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


    public function updateU($params)
    {

        if (isset($params['user_id'])) {
            print_r($params);
            $user = new User;
            $user->setName($params['user_name']);
            $user->setLastName($params['user_lastname']);
            $user->setDate($params['user_date']);
            $user->setEmail($params['user_email']);
            $user->setDateReg($params['user_date_reg']);
            $user->save();
        }
    }

    public function updateUser(array $params)
    {
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $sql = $this->queryBuilder
                    ->update('user')
                    ->set([$key => $value])
                    ->where('id', $params['user_id'])
                    ->sql();
                $this->db->execute($sql, $this->queryBuilder->values);
            }
        }
    }

    public function updateUs($params)
    {
        $sql = $this->queryBuilder
            ->select()
            ->update('user')
            ->set(['name' => $params['name']])
            ->set(['lastname' => $params['lastname']])
            ->set(['date' => $params['date']])
            ->set(['email' => $params['email']])
            ->set(['password' => md5($params['password'])])
            ->set(['role' => $params['role']])
            ->set(['date_red' => $params['date_red']])
            ->where('id', $params['user_id'])
            ->sql();
        print_r($this->queryBuilder->values);
        $this->db->execute($sql, $this->queryBuilder->values);

    }
}