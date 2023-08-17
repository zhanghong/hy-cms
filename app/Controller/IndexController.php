<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Model\User;
use Hyperf\Di\Annotation\Inject;
use Qbhy\HyperfAuth\AuthManager;

class IndexController extends AbstractController
{
  #[Inject]
  protected AuthManager $auth;

  public function login()
  {
    $user = User::firstOrCreate(['nickname' => 'zhanghong', 'email' => 'zhanghong@demo.com']);

    return [
      'status' => $this->auth->guard('jwt')->login($user),
    ];
  }

  public function user()
  {
    exit();
    return ['u' => $this->auth->guard()];
    return ['id' => $user->getId(), 'email' => $user->email];
  }
}
