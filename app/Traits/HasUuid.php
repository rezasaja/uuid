<?php

namespace App\Traits;

use Ramsey\Uuid\Exception\UnstatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;

trait HasUuid
{
    protected static function boot(){

        parent::boot();

        static::creating(function ($model){
            try {
                $model->uuid = Generator::uuid4()->toString();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
