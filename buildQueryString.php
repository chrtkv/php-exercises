<?php
function buildQueryString($coll)
{
    $queryString = '';
    ksort($coll);

    foreach ($coll as $param => $value) {
        $queryString .= "{$param}={$value}&";
    }

    return substr($queryString, 0, -1);
}
