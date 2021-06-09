<?php

declare(strict_types=1);

interface UserRepositoryInterface
{
    public function find(string $id) : User;

    public function findAll() : UserCollection;
}

class DbUserRepository implements UserRepositoryInterface
{
    /**
     * @param string $id
     * @return User
     */
    public function find(string $id): User
    {
        // TODO: Implement find() method.
    }

    /**
     * @return UserCollection
     */
    public function findAll(): UserCollection
    {
        // TODO: Implement findAll() method.
    }
}

class CachingUserRepository implements UserRepositoryInterface
{
    public function find(string $id) : User
    {
        $cache = $this->getCache();

        if ($cache->has($id)) {
            return $cache->get($id);
        }

        $user = inner::find($id);

        $cache->set($id, $user);

        return $user;
    }

    /**
     * @return UserCollection
     */
    public function findAll(): UserCollection
    {
        // no need
    }
}