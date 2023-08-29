<?php
namespace App\Models;
use CodeIgniter\Model;
use App\Controller\UserController;


class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['first_name', 'last_name', 'contact_no', 'birthday', 'address'];
}