<?php

namespace app\core;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public static BaseController $baseController;
    public function __construct(string $rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run(): void
    {
        echo $this->router->resolve();
    }

    public function getBaseController(): BaseController
    {
        return $this->baseController;
    }

    public function setBaseController(BaseController $baseController): void
    {
        $this->baseController = $baseController;
    }
}