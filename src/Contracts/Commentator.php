<?php

namespace Sagor110090\Comments\Contracts;


interface Commentator
{
    /**
     * Check if a comment for a specific model needs to be approved.
     * @param mixed $model
     * @return bool
     */
    public function needsCommentApproval($model): bool;

}
