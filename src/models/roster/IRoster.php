<?php namespace Causey\Roster;

interface IRoster {
    public static function create();
    public function update(array $data);
    public function delete(): array;

}