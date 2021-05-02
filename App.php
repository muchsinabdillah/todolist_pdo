<?php
 
 require_once __DIR__ . "/Entity/TodoList.php";
 require_once __DIR__ . "/Helper/InputHelper.php";
 require_once __DIR__ . "/Repository/TodolistRepository.php";
 require_once __DIR__ . "/Service/TodolistService.php";
 require_once __DIR__ . "/View/TodolistView.php";
 
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodoListView;

 echo "Aplikasi Todolist" . PHP_EOL;
 $todolistRepository = new TodolistRepositoryImpl;
 $todolistService = new TodolistServiceImpl($todolistRepository);
 $todolistView = new TodoListView($todolistService);
 $todolistView->showTodoList();

 