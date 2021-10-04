<?php

/**
 * Single responsibility principle violation
 */
class UserService {
    public function register()
    {
        // creating new user
        $user = new User();
        //..............

        //send confirmation link
        //.....................
    }
}
