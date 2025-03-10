<?php

namespace App;

interface QueryBuilderInterface {

    public function select(string $select);
    public function from(string $from);
    public function where(string $where, string $condition, string $value);
}