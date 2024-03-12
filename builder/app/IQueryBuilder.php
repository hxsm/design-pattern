<?php

namespace App;

interface IQueryBuilder
{
    public function select(array $columns): IQueryBuilder;
    public function from(string $table): IQueryBuilder;
    public function where(string $condition): IQueryBuilder;
    public function orderBy(string $column, string $order): IQueryBuilder;
    public function build(): string;
}