<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Service\UserService;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\Utils\Coroutine;
use Hyperf\Utils\Parallel;
use Hyperf\Utils\Context;

/**
 * @Controller()
 */
class IndexController extends AbstractController
{
    /**
     * @RequestMapping(path="index", methods="get,post")
     */
    public function index(RequestInterface $request, UserService $userService)
    {
        $user = $request->input('user', 'Hyperf');
        $method = $request->getMethod();

        $parallel = new Parallel();
        $foo = Context::set('foo', 'bar');
        $parallel->add(function () {
            sleep(2);
            return Context::get('foo');
        });
        $parallel->add(function () {
            sleep(1);
            Context::override('foo', function($foo) {
                return 'hahaha';
            });
            return 2;
        });

        $results = $parallel->wait(); 

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
            'name' => $userService->getName(),
            'a' => $results,
            'context' => Context::get('foo')
        ];
    }
}
