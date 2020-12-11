<?php

namespace Sushre\Starter\Contracts;

/*
 * Interface BaseContract
 * @package App\Contracts
 */
interface BaseContract{
  public function all(string $orderBy = 'created_at', string $sortBy = "desc");
  public function getAll(string $orderBy = 'created_at', string $sortBy = "desc", $columns = array('*'));
  public function create(array $attributes);
  public function update(array $attributes, int $id);
  public function delete(int $id);
  public function find(int $id);
  public function findOneOrFail(int $id);
  public function findBy(array $data);
  public function getFindBy(array $data);
  public function findOneBy(array $data);
  public function findOneByOrFail(array $data);
}
