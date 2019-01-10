<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $parameters)
    {

        $sql = sprintf(
            'delete from %s where %s=%s',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $parameters)
    {

        $sql = sprintf(
            "update %s SET name='%s', age='%s' where id='%s'",
            $table,
            $parameters['name'],
            $parameters['age'],
            $parameters['id']
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}
