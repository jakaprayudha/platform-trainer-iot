<?php

$hash = '$2y$10$4C/igMZzByjQp6N7mN4gk.1mM6gD6Oe8F7dA0iMxP8vJ4yX4D9fKq';

var_dump(
   password_verify(
      'admin123',
      $hash
   )
);
