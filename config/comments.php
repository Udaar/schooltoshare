<?php

return [

    /**
     * Enter models which can be commented upon.
     */
     'content' => [
                        Bimmunity\Tasks\Models\Task::class
                    ],

    /**
     * Enter your user model.
     */
    'user_model' => App\User::class,

    /**
     * Get the path to the login route.
     */
    'login_path' => '/login'
];
