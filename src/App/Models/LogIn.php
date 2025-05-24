<?php
declare(strict_types=1);

namespace App\Models;

use App\Model;

class Login extends Model
{
    public function authenticate(string $email, string $password): ?array
    {
        try {
            // Fetch user by email
            $stmt = $this->db->prepare('SELECT * FROM users WHERE email = ? LIMIT 1');
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            // If user exists and password matches
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                return $user; // Successful login, return user data
            }
        } catch (\Throwable $e) {
             if($this->db->inTransaction()){
            $this->db->rollBack();
            }
            throw $e;
        }
        return null; // Login failed
    }
}
