<?php
 
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodoListView;

function testViewShowTodoList():void{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar OOP");
    $todolistService->addTodoList("Belajar DATABASE");

    $todolistView->showTodoList();

}

function testViewAddTodoList():void{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar OOP");
    $todolistService->addTodoList("Belajar DATABASE");
    $todolistService->showTodoList();
    $todolistView->addTodoList();
    $todolistService->showTodoList();
    $todolistView->addTodoList();
    $todolistService->showTodoList();
}

function testViewRemoveTodoList():void{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar OOP");
    $todolistService->addTodoList("Belajar DATABASE");
    $todolistService->showTodoList();
    $todolistView->removeTodoList();
    $todolistService->showTodoList();
    $todolistView->removeTodoList();
    $todolistService->showTodoList();
}
testViewRemoveTodoList();