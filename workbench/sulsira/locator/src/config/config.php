<?php

return [

    /*
     * What should each form element be
     * wrapped within?
    */
    'default' => '/login',

    /*
     * What class should the wrapper
     * element receive?
    */
    'home' => 'form-group',

    /**
     * Should form inputs receive a class name?
     */
    'errrorpage' => 'opps',

    /**
     * Frequent input names can map
     * to their respective input types.
     *
     * This way, you may do FormField::description()
     * and it'll know to automatically set it as a textarea.
     * Otherwise, do FormField::thing(['type' => 'textarea'])
     *
     */
];
