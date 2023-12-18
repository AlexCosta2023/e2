<?php

# Define the routes of your application

return [
    '/' => ['AppController', 'index'],
    '/process' => ['AppController', 'process'],
    '/history' => ['AppController', 'history'],
    '/round' => ['AppController', 'round']
];