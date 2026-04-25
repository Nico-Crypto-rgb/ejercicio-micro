<?php
namespace App\Amigos\Controllers;

use App\Amigos\Presentation\Repositories\AmigoRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AmigosController {
    protected $repo;

    public function __construct() {
        $this->repo = new AmigoRepository();
    }

    public function index(Request $request, Response $response): Response {
        $lista = $this->repo->obtenerTodos();
        $response->getBody()->write(json_encode($lista));
        return $response->withHeader('Content-Type', 'application/json');
    }
}