<?php

use App\IQueryBuilder;

class MySqlQueryBuilder implements IQueryBuilder
{
    private $query;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->query = new \stdClass();
    }

    public function select(array $columns): IQueryBuilder
    {
        $this->query->select = $columns;
        return $this;
    }

    public function from(string $table): IQueryBuilder
    {
        $this->query->from = $table;
        return $this;
    }

    public function where(string $condition): IQueryBuilder
    {
        $this->query->where = $condition;
        return $this;
    }

    public function orderBy(string $column, string $order): IQueryBuilder
    {
        $this->query->orderBy = "{$column} {$order}";
        return $this;
    }

    public function build(): string
    {
        $queryParts = [];

        if (isset($this->query->select)) {
            $queryParts[] = 'SELECT ' . implode(', ', $this->query->select);
        }

        if (isset($this->query->from)) {
            $queryParts[] = 'FROM ' . $this->query->from;
        }

        if (isset($this->query->where)) {
            $queryParts[] = 'WHERE ' . $this->query->where;
        }

        if (isset($this->query->orderBy)) {
            $queryParts[] = 'ORDER BY ' . $this->query->orderBy;
        }

        $this->reset();

        return implode(' ', $queryParts);
    }
}