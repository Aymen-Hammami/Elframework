<?php
//use : we do it to get rid of namespace issue .exp :use:app\email then new email()  no problem
//require vs include:require:don't do the rest of the work if it failed loading,include:cool,you can do it no problem
#require_once vs require:if it's already there,don't require it again(require once)
//Let's focus on autoload php: we are going to implement the code for our framework autoloader,some use composer
//but we are going to use spl_autoload_register:it's going to be called when we use a new class
const ALIASES = [
    'Elframework' => 'lib',
    'App' => 'src'
];

spl_autoload_register(function (string $class): void {

  $namespaceParts = explode('\\', $class);

  if (in_array($namespaceParts[0], array_keys(ALIASES))) {
    $namespaceParts[0] = ALIASES[$namespaceParts[0]];
  } else {
    throw new Exception('Namespace « ' . $namespaceParts[0] . ' » invalid. A namespace should start by  : « Elframewor » or « App »');
  }

  $filepath = dirname(__DIR__) . '/' . implode('/', $namespaceParts) . '.php';
  if (!file_exists($filepath)) {
    throw new Exception("File « " . $filepath . " » not found for the class« " . $class . " ». Check path, classname  or the namespace");
  }
  require $filepath;
 

});