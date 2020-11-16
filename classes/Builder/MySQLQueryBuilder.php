<?php


namespace Builder;


class MySQLQueryBuilder implements ISQLQueryBuilder
{

    protected \stdClass $query;

    public function init() : void
    {
        $this->query = new \stdClass();
    }

    public function select(array $fields): ISQLQueryBuilder
    {
        $this->init();

        $this->query->base = "SELECT " . implode(", ", $fields);

        return $this;
    }

    public function from(string $table): ISQLQueryBuilder
    {
        $this->query->base .= " FROM " . $table;

        return $this;
    }

    public function where(string $field, string $operator = '', string $value = ''): ISQLQueryBuilder
    {
        if (func_num_args() === 2) {
            $this->query->where[] = $field . " = " . $operator;
        } else {
            $this->query->where[] = $field . " " . $operator . " " . $value;
        }

        return $this;
    }

    public function limit(int $start, int $offset): ISQLQueryBuilder
    {
        $this->query->limit = "LIMIT " . $start . ", " . $offset;
    }

    public function getQuery(): string
    {
        $sql = "";
        $sql .= $this->query->base;

        if (!empty($this->query->where)) {
            $sql .= " WHERE " . implode(" AND ", $this->query->where);
        }

        if (!empty($this->query->limit)) {
            $sql .= $this->query->limit;
        }

        $sql .= ";";

        return $sql;
    }
}