<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_author' => [[], ['_controller' => 'App\\Controller\\AuthorController::getAllAuthors'], [], [['text', '/api/authors']], [], [], []],
    'detailAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::getAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/author']], [], [], []],
    'deleteAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::RemoveAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/author']], [], [], []],
    'addAuthor' => [[], ['_controller' => 'App\\Controller\\AuthorController::createAuthor'], [], [['text', '/api/authors/']], [], [], []],
    'books' => [[], ['_controller' => 'App\\Controller\\BookController::getAllBooks'], [], [['text', '/api/books']], [], [], []],
    'detailbook' => [['id'], ['_controller' => 'App\\Controller\\BookController::getOneBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'deleteBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::RemoveBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'postBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::UpdateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
];
