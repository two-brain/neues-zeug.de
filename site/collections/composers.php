<?php

return function ($site) {
    return $site->composers()
                ->toStructure()
                ->sortBy(function($person) {
                    return sortByLastName($person);
                }, 'asc');
};
