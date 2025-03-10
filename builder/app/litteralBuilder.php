<?php

namespace App;

use App\QueryBuilderInterface;

class litteralBuilder implements QueryBuilderInterface
{

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
        $query = 'Je sélectionne les champs ' . $this->selectQuery() . ' de la table ' . $this->from;
        if ($this->where != null)
            $query .= ' où ' . $this->whereQuery();
        return $query;
    }

    private function selectQuery()
    {
        $query = '';
        for ($i = 0; $i < count($this->select); $i++) {
            $query .= $this->select[$i];
            if ($i + 1 < count($this->select))
                $query .= ', ';
        }
        return $query;
    }

    private function whereQuery()
    {
        $query = '';
        for ($i = 0; $i < count($this->where); $i++) {
            $query .= $this->where[$i];
            if ($i + 1 < count($this->where))
                $query .= ' et ';
        }
        return $query;
    }
}