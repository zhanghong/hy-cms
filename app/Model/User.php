<?php

declare(strict_types=1);

namespace App\Model;

use Qbhy\HyperfAuth\Authenticatable;

/**
 */
class User extends Model implements Authenticatable
{
  /**
   * The table associated with the model.
   */
  protected ?string $table = 'users';

  /**
   * The attributes that are mass assignable.
   */
  protected array $fillable = [
    'nickname', 'email', 'avatar_url',
  ];

  /**
   * The attributes that should be cast to native types.
   */
  protected array $casts = [];

  public static function retrieveById($key): ?Authenticatable
  {
    return null;
  }

  public function getId()
  {
    return $this->id;
  }
}
