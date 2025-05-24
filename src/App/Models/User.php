<?php
declare(strict_types=1);
namespace App\Models;
use App\Model;
use DateTime;

class User extends Model{
    
    public function create(string $email, string $name, string $pass, bool $isActive = true): int
    {
        $query = 'INSERT INTO users (email, full_name, created_at, password, profile_picture) VALUES (?, ?,NOW(), ?, null)';

        
        $actualQuery = $this->db->prepare($query); //to avoid sql injection
        $actualQuery->execute([
                $email,
                $name,
                password_hash($pass, PASSWORD_BCRYPT)
            ]);
        return (int) $this->db->lastInsertId();
    }
    public function createCredit(string $card_name, string $card_number, string $card_date, string $cvv): int
    {
        $query = 'INSERT INTO creditcards (user_id, card_name, card_number, card_date, cvv) VALUES (?,?, ?,?, ?)';
        $actualQuery = $this->db->prepare($query); //to avoid sql injection
        $actualQuery->execute([
                $_SESSION['user_id'],
                $card_name,
                $card_number,
                $card_date,
                $cvv
            ]);
        return (int) $this->db->lastInsertId();
    }
    public function find(int $userId): array
    {
        $query = 'SELECT * FROM users WHERE id = ?';
        $actualQuery = $this->db->prepare($query);
        $actualQuery->execute([$userId]);
        $user = $actualQuery->fetch();
        return $user ? $user : [];
    }
    
}