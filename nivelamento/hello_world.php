<?php

echo "Hello, world!";
echo '<br>';

// Constantes

define('SCHOOL', 'PUC Minas');
echo SCHOOL;

const COURSE = "Engenharia de Computação";  // não pode declarar constante desse jeito dentro de blocos de códigos
                                            // condicionais e loops, só com o define.

echo '<br>';
echo COURSE;