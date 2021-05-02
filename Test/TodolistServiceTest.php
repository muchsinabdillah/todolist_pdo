<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Entity\TodoList;

function testShowTodoList():void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new TodoList("Belajar PHP");
    $todolistRepository->todolist[2] = new TodoList("Belajar OOP");
    $todolistRepository->todolist[3] = new TodoList("Belajar DATABASE");
    $todoListService = new \Service\TodolistServiceImpl($todolistRepository);

    $todoListService->showTodoList();
}
function testAddTodoList():void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todoListService = new \Service\TodolistServiceImpl($todolistRepository);
    $todoListService->addTodoList("Belajar Php");
    $todoListService->addTodoList("Belajar Php OOP");
    $todoListService->addTodoList("Belajar Php DATABASE");
    $todoListService->showTodoList();
}
function testRemoveTodoList():void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todoListService = new \Service\TodolistServiceImpl($todolistRepository);
    $todoListService->addTodoList("Belajar Php");
    $todoListService->addTodoList("Belajar Php OOP");
    $todoListService->addTodoList("Belajar Php DATABASE");
    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(4);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(2);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
 
}
testRemoveTodoList();