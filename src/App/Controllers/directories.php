<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use App\Models\Credit;
use App\Models\User;

class Directories
{
    public function about(): View
    {
        return View::make('directories/about');
    }
    public function destinations(): View
    {
        return View::make('directories/Destinations');
    }
    public function creditView(): View
    {
        $userModel = new User();
        $creditModel = new Credit($userModel);
        $userCredits = $creditModel->findCredits($_SESSION['user_id']);
        return View::make('directories/credit', ['userCredits' => $userCredits]);
    }
    public function credit(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        try{
            $number = $_POST['card_number'] ?? null;
            $name = $_POST['card_name'] ?? null;
            $date = $_POST['card_date'] ?? null;
            $cvv = $_POST['cvv'] ?? null;
    
            $date = str_replace('/', '/20', $date);
            $card_date_converted = \DateTime::createFromFormat('m/Y', $date);
            $normalFormat = $card_date_converted ? $card_date_converted->format('Y-m-d') : '';
            if ($normalFormat < time()) {
                $_SESSION['credit_error'] = 'Card expired.' . $normalFormat . $date;
                header('Location: /credit');
                exit;
            }
            $userModel = new User();
            $userCredit = (new Credit($userModel))->register([
                'number' => $number,
                'name' => $name,
                'date' => $normalFormat,
                'cvv' => $cvv
            ]);
            header('Location: /credit');
            exit;
        }catch (\PDOException) {
            $_SESSION['credit_error'] = 'Card already exists.';
                header('Location: /credit');
                exit;
        }
    }
    public function deleteCredit(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        $userModel = new User();
        $creditModel = new Credit($userModel);
        $creditModel->deleteCard($_POST['card_id']??null);


        header('Location: /credit');
        exit;
    }
    public function checkout(): View
    {
        return View::make('directories/checkout');
    }
    public function tripDetails(): View
    {
        return View::make('directories/trip-details');
    }
    public function profile(): View
    {
        return View::make('directories/profile');
    }
    public function service(): View
    {
        return View::make('directories/service');
    }
}
