<?php
declare(strict_types=1);
namespace App\Models;
use App\Model;

class Update extends Model
{
    public function updateProfile(int $id, string $name = null, string $password = null, string $profilePhoto = null): void
{
    $fields = [];
    $params = [];

    if ($name !== null) {
        $fields[] = 'full_name = ?';
        $params[] = $name;
    }
    if ($password !== null && $password !== '') {
        $fields[] = 'password = ?';
        $params[] = password_hash($password, PASSWORD_BCRYPT);
    }
    if ($profilePhoto !== null && $profilePhoto !== '') {
        $fields[] = 'profile_picture = ?';
        $params[] = $profilePhoto;
    }

    if (empty($fields)) {
        return; // Nothing to update
    }

    $params[] = $id;
    $sql = 'UPDATE users SET ' . implode(', ', $fields) . ' WHERE id = ?';
    $stmt = $this->db->prepare($sql);
    $stmt->execute($params);
}
   
public function deleteAccount(int $userId): void
{
    $stmt = $this->db->prepare('DELETE FROM users WHERE id = ?');
    $stmt->execute([$userId]);
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
