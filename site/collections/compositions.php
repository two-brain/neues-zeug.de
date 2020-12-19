<?php

return function ($site) {
    return $site->find('kompositionen')->children()->listed();
};
