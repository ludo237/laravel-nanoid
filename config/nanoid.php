<?php

use Ludo237\Nanoid\Cores\SecureCore;

return [
    /**
     * The alphabet to use for generating the nanoID.
     */
    'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
    
    /**
     * The size of the nanoID to generate. 21 is a sensible default.
     */
    'size' => 21,
    
    /**
     * The core to use for generating the nanoID.
     * Create your own core by extending the Ludo237\Nanoid\Cores\Core class.
     */
    'default_core' => SecureCore::class
];
