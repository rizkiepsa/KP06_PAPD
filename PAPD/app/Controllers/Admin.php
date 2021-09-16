<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->builder->where('approval_status', 'approved');
        $countapproveduser = $this->builder->countAllResults();
        $data['approveduser'] = $countapproveduser;
    }
    public function index()
    {
        $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid, username, nik, email, approval_status, name, fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();

        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('name', 'user');
        $this->builder->where('approval_status', 'approved');
        $countapproveduser = $this->builder->countAllResults();
        $data['approveduser'] = $countapproveduser;

        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();
        $data['needapproval'] = $countneedapproval;

        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('name', 'admin');
        $countadmin = $this->builder->countAllResults();
        $data['admin'] = $countadmin;


        return view('admin/index', $data);
    }

    public function approval()
    {
        $data['title'] = 'Pending Approval List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid, username, nik, email, approval_status, name, fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();

        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('name', 'user');
        $this->builder->where('approval_status', 'approved');
        $countapproveduser = $this->builder->countAllResults();
        $data['approveduser'] = $countapproveduser;

        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();
        $data['needapproval'] = $countneedapproval;

        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('name', 'admin');
        $countadmin = $this->builder->countAllResults();
        $data['admin'] = $countadmin;


        return view('admin/approval', $data);
    }

    public function adminlist()
    {
        $data['title'] = 'Admin List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid, username, nik, email, approval_status, name, fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();

        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('name', 'user');
        $this->builder->where('approval_status', 'approved');
        $countapproveduser = $this->builder->countAllResults();
        $data['approveduser'] = $countapproveduser;

        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();
        $data['needapproval'] = $countneedapproval;

        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('name', 'admin');
        $countadmin = $this->builder->countAllResults();
        $data['admin'] = $countadmin;


        return view('admin/adminlist', $data);
    }

    public function detail($id = 0)
    {
        $data['title'] = 'User Detail';

        $this->builder->where('approval_status', null);
        $countneedapproval = $this->builder->countAllResults();
        $data['needapproval'] = $countneedapproval;

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }

    public function deleteuser()
    {

        $id = $this->request->getVar('userid');
        $this->builder->where([
            'id' => $id
        ]);
        $this->builder->delete();

        session()->setFlashdata('pesan', 'User berhasil dihapus.');
        return redirect()->to('/admin/index');
    }

    public function deleteuserapproval()
    {

        $id = $this->request->getVar('userid');
        $this->builder->where([
            'id' => $id
        ]);
        $this->builder->delete();

        session()->setFlashdata('pesan', 'User berhasil dihapus.');
        return redirect()->to('/admin/approval');
    }

    public function approve()
    {
        $value = [
            'approval_status' => 'approved'
        ];
        $id = $this->request->getVar('userid');
        $this->builder->update($value, [
            'id' => $id
        ]);

        session()->setFlashdata('pesan', 'User berhasil di-approve.');
        return redirect()->to('/admin/approval');
    }
}
