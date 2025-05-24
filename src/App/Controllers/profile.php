<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use App\Models\User;
use App\Models\Update;

class Profile
{


    public function profile(): View
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $userModel = new User();
        $user = $userModel->find($_SESSION['user_id']); // Implement this method

        return View::make('directories/profile', ['user' => $user]);
    }
    public function updateView(): View
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $updateModel = new Update();
        $user = $updateModel->find($_SESSION['user_id']); // Implement this method

        return View::make('directories/settings', ['user' => $user]);
    }
    public function update(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        $updateModel = new Update();
        $newName = $_POST['newName'] ?? null;
        $newPassword = $_POST['newPassword'] ?? null;
        $user = $updateModel->find($_SESSION['user_id']);
        $profilePhotoPath = $user['profile_picture'] ?? null;
        if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === (int) 0) {
            $tmpName = $_FILES['profile_photo']['tmp_name'];
            $ext = pathinfo($_FILES['profile_photo']['name'], PATHINFO_EXTENSION);
            $allowed = ['jpg', 'jpeg', 'png'];
            if (in_array(strtolower($ext), $allowed)) {
                $newFileName = 'profile_' . $_SESSION['user_id'] . '_' . time() . '.' . $ext;
                $destination = __DIR__ . '/../../public/Storage/' . $newFileName;
                if (!empty($user['profile_picture']) && $user['profile_picture'] !== '/assets/profile.png') {
                    $oldPhotoPath = __DIR__ . '/../../public' . $user['profile_picture'];
                    if (file_exists($oldPhotoPath)) {
                        unlink($oldPhotoPath);
                    }
                }
                if (move_uploaded_file($tmpName, $destination)) {
                    $profilePhotoPath = '/Storage/' . $newFileName;
                }
            }
        }
        
        if (
            (!$newName || $user['full_name'] === $newName) &&
            (!$newPassword) &&
            ($profilePhotoPath === ($user['profile_photo'] ?? null))
        ) {
            $_SESSION['edit_error'] = "Enter a new name or a new password or a new photo";
            header('Location: /profile/edit');
            exit;
        }
        if ($newPassword) {
            if (password_verify($newPassword, $user['password'])) {
                $_SESSION['edit_error'] = "New password can't be the same as the old password";
                header('Location: /profile/edit');
                exit;
            }
            if (strlen($newPassword) < 8) {
                $_SESSION['edit_error'] = "Password must be at least 8 characters.";
                header('Location: /profile/edit');
                exit;
            }
        }
        $updateModel->updateProfile(
        $_SESSION['user_id'],
        ($newName && $user['full_name'] !== $newName) ? $newName : null,
        $newPassword ? $newPassword : null,
        ($profilePhotoPath !== ($user['profile_picture'] ?? null)) ? $profilePhotoPath : null
    );

    header('Location: /profile');
    exit;
        
    }

    public function logoutView(): View
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        return View::make('directories/logout');
    }
    public function logout(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        
        unset($_SESSION['user_id']);
        session_unset();
        session_destroy();
        header('Location: /login');
        exit;
    }
    public function delete(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        $userModel = new User();
        $user = $userModel->find($_SESSION['user_id']);
        $pfp = $user['profile_picture'];
        $photoPath = __DIR__ .'/../../public' .$pfp;
        unlink($photoPath);
        
        $updateModel = new Update();
        $updateModel->deleteAccount($_SESSION['user_id']);
        session_destroy();

        header('Location: /signup');
        exit;
    }
}
