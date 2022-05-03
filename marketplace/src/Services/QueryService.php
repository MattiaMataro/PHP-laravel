<?php

namespace Andrea\Marketplace\Services;

class QueryService
{
    /**
     * Holds the query under construction
     * 
     * @var {string}
     */
    private $_query = "";

    public function __construct()
    {

    }

    public function andWhere(string $field, $value, string $operator = '='): QueryService
    {
        $this->query .= " AND $field $operator '$value'";

        return $this;
    }

    public function finalize(): string
    {
        $this->_query .= ';';

        return $this->_query;
    }

    /**
     * 
     * @param $table
     * @param $fields An associative array structured like $row => $value
     *                i.e. ['email' => 'asd@lol.com']
     */
    public function insert(string $table, array $fields): QueryService
    {
        // 1. Prendo tutte le chiavi dell'array associativo (ottengo un array di stringhe)
        // 2. A partire dagli elementi dell'array, implode con , (virgola spazio)
        //
        // ['email' => 'asd@lol.com']
        // ['email', 'password'] -> 'email, password'

        $keys = array_keys($fields);
        $values = array_map(function($f) {
            return "'$f'";
        }, array_values($fields));

        $implodedKeys = implode(', ', $keys);
        $implodedValues = implode(', ', $values);

        $this->_query = "INSERT INTO $table ($implodedKeys) VALUES ($implodedValues)";

        return $this;
    }

    public function orWhere(string $field, $value, string $operator = '='): QueryService
    {
        $this->_query .= " OR $field $operator '$value'";

        return $this;
    }

    public function select(string $table, array $fields = []): QueryService
    {
        $this->_query = "SELECT ";

        $fieldsLength = count($fields);

        if ($fieldsLength) {
            for($i = 0; $i < $fieldsLength; $i++) {
                // $this->_query = $this->_query . 
                $this->_query .= $fields[$i];

                if ($i !== $fieldsLength - 1) {
                    $this->_query . ', ';
                }
            }
        } else {
            $this->_query .= '*';
        }

        $this->_query .= " FROM {$table}";

        return $this;
    }

    public function where(string $field, $value, string $operator = '='): QueryService
    {
        $this->_query .= " WHERE $field $operator '$value'";

        return $this;
    }
}
