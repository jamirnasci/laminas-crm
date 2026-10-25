<?php

namespace Clientes\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class ClienteController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function createClienteAction()
    {
        // Lógica para criar um cliente
    }

    public function updateClienteAction()
    {
        // Lógica para atualizar um cliente
    }

    public function deactivateClienteAction()
    {
        // Lógica para desativar um cliente
    }
}