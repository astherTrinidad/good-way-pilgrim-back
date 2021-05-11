<?php

namespace App\Services;

use App\Repository\UsuarioCaminoRepository;

class UserPathManager {

    private $userPathRepository;

    function __construct(UsuarioCaminoRepository $userPathRepository) {
        $this->userPathRepository = $userPathRepository;
    }

    public function getHistory($userId) {
        return $this->userPathRepository->getHistory($userId);
    }

    public function getActivePath($userId) {
        return $this->userPathRepository->getActivePath($userId);
    }

    public function getEtapasRealizadas($userId, $caminoId) {
        return $this->userPathRepository->getEtapasRealizadas($userId, $caminoId);
    }

    public function addActivePath($userId, $caminoId, $date) {
        return $this->userPathRepository->addActivePath($userId, $caminoId, $date);
    }
    
//    public function archivePath($userId, $caminoId, $date) {
//        return $this->userPathRepository->addActivePath($userId, $caminoId, $date);
//    }

    public function getKm($userId)
    {
        return $this->userPathRepository->getKm($userId);
    }
}
