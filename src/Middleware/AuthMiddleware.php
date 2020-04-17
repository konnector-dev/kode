<?php
declare(strict_types=1);

namespace App\Middleware;

use Cake\Http\Exception\UnauthorizedException;
use Cake\ORM\TableRegistry;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Auth middleware
 */
class AuthMiddleware implements MiddlewareInterface
{
    /**
     * Process method.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request The request.
     * @param \Psr\Http\Server\RequestHandlerInterface $handler The request handler.
     * @return \Psr\Http\Message\ResponseInterface A response.
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $tokenUser = TableRegistry::getTableLocator()
            ->get('Tokens')
            ->find()
            ->where([
                'hash' => $request->getHeader('Bearer')[0],
                'status' => true
            ])
            ->first();
        if (!$tokenUser) {
            throw new UnauthorizedException('Invalid or expired access token');
        }
        return $handler->handle($request);
    }
}
