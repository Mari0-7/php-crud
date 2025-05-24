<?php
declare(strict_types=1);

namespace App\Models;

use App\Model;

class Credit extends Model
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

            
            $userId = $this->userModel->createCredit($userInfo['name'], $userInfo['number'], $userInfo['date'], $userInfo['cvv']);

            
            $this->db->commit();
    }catch (\Throwable $e) {
            if($this->db->inTransaction()){
            $this->db->rollBack();
            }
            throw $e;
      }
      return $userId;
    }
    public function findCredits(int $userId): array
{
    $stmt = $this->db->prepare('SELECT * FROM creditcards WHERE user_id = ?');
    $stmt->execute([$userId]);
    $stmtArr = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    $i = 1;
    foreach ($stmtArr as $card) {
        $_SESSION['card_id' . $i] = $card['id'];
        $i++;
    }
    return $stmtArr;
    
}
public function deleteCard(string $cardId): void
{
    $stmt = $this->db->prepare('DELETE FROM creditcards WHERE id = ?');
    $stmt->execute([$cardId]);
}
}
