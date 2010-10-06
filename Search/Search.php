<?php

namespace Bundle\ForumBundle\Search;

class Search
{
    /**
     * @validation:Validation({
     *   @validation:NotBlank(),
     *   @validation:MinLength(limit=3, message="Just a little too short.")
     * })
     */
    public $query;
}
