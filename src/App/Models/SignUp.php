<?php
declare(strict_types=1);
namespace App\Models;
use App\Model;

class SignUp extends Model
{
    public function __construct(
        protected User $userModel
    ) {
        parent::__construct();
    }

    public function register(array $userInfo): int
    {
        try{

            $this->db->beginTransaction();

            
            $userId = $this->userModel->create($userInfo['email'], $userInfo['name'], $userInfo['pass']);

            
            $this->db->commit();
    }catch (\Throwable $e) {
            if($this->db->inTransaction()){
            $this->db->rollBack();
            }
            throw $e;
      }
      return $userId;
    }
}
