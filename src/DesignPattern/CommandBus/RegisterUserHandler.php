<?php


final class RegisterUserHandler
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(RegisterUser $command)
    {
        $user= User::register(
            $command->username,
            $command->password
        );

        $this->repository->save($user);
    }
}