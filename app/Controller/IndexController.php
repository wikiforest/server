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
use Fluent\Logger\FluentLogger;

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
        $logger = new FluentLogger("fluentd","24225");
        $user = $request->input('user', 'Hyperf');
        $method = $request->getMethod();
        $logger->post("server.app.debug",array("hello"=>"world"));

        return [
            ['id' => 1, 'title' => 'title1'],
            ['id' => 2, 'title' => 'title2'],
            ['id' => 3, 'title' => 'title3'],
            ['id' => 4, 'title' => 'title4'],
            ['id' => 5, 'title' => 'title5'],
            ['id' => 6, 'title' => 'title6'],
            ['id' => 7, 'title' => 'title7'],
            ['id' => 8, 'title' => 'title8'],
            ['id' => 9, 'title' => 'title9'],
            ['id' => 10, 'title' => 'title10']
        ];
    }
}
