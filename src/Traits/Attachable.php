<?php

namespace zedsh\tower\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use zedsh\tower\Models\File;

trait Attachable
{
    public function files()
    {
        return $this->morphToMany(File::class, 'attachable');
    }

}
