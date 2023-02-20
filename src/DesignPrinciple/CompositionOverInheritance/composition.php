<?php

declare(strict_types=1);

class CachingUserRepository implements UserRepositoryInterface
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function find(string $id) : User
    {
        $cache = $this->getCache();

        if ($cache->has($id)) {
            return $cache->get($id);
        }

        $user = $this->userRepo->find($id);

        $cache->set($id, $user);

        return $user;
    }

    public function findAll()
    {
        return $this->userRepo->findAll();
    }
}