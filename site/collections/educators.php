<?php

return function ($site) {
    return $site->educators()
                ->toStructure()
                ->sortBy(function($person) {
                    return sortByLastName($person);
                }, 'asc');
};
