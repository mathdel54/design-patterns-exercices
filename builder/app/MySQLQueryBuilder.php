<?php

namespace App;

use App\QueryBuilderInterface;

class MySQLQueryBuilder implements QueryBuilderInterface {

    protected array $select;
    protected string $from;
    protected array $where;

    public function __construct()
    {
        $this->select = [];
        $this->from = '';
        $this->where = [];
    }

    public function select(string $select)
    {
        $this->select[] = $select;
        return $this;
    }

    public function from(string $from)
    {
        $this->from = $from;
        return $this;
    }

    public function where(string $where, $condition, $value)
    {
        $this->where[] = $where . ' ' . $condition . ' ' . $value;
        return $this;
    }

    public function build(): string
    {
        $query = 'SELECT ' . $this->selectQuery() . ' FROM ' . $this->from;
        if($this->where != null) $query .= ' WHERE ' . $this->whereQuery();
        return $query;
    }

    private function selectQuery()
    {
        $query = '';
        for($i = 0; $i < count($this->select); $i++) {
            $query .= $this->select[$i];
            if($i+1 < count($this->select)) $query .= ', ';
        }
        return $query;
    }

    private function whereQuery()
    {
        $query = '';
        for ($i = 0; $i < count($this->where); $i++) {
            $query .= $this->where[$i];
            if ($i + 1 < count($this->where))
                $query .= ' AND ';
        }
        return $query;
    }
}