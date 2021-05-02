<?php
namespace Service {
use Entity\TodoList;
use Repository\TodoListRepository;

interface TodoListService{

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;

    }
    class TodolistServiceImpl implements TodoListService{
        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }
        function showTodoList(): void
        {

            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todoListRepository->findAll();
            foreach ($todolist as $number => $value) {
                # code...
                echo "$number. ".$value->getTodo(). PHP_EOL;
            }
        }
        function addTodoList(string $todo): void
        {
            $todolist = new TodoList($todo);
            $this->todoListRepository->save($todolist);
            echo "SUKSES MENAMBAH TODO LIST" . PHP_EOL;
        }
        function removeTodoList(int $number): void
        {
             if($this->todoListRepository->remove($number)){
                echo "SUKSES MENGHAPUS TODO LIST";
             }else{
                echo "GAGAL MENGHAPUS TODO LIST";
             }
        }
    }
}