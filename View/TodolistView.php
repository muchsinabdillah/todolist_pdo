<?php
namespace View{
    use Service\TodoListService;
    use Helper\InputHelper;
    use Service\TodolistServiceImpl;

class TodoListView{

        private TodoListService $todolistService;
        public function __construct(TodoListService $todolistService)
        {   
            $this->todolistService = $todolistService;
            
        }
        function showTodoList():void
        {
            
            while(true){
                $this->todolistService->showTodoList();
               
                echo "MENU". PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar Todo" . PHP_EOL;
        
                $pilihan = InputHelper::input("PILIH");
        
                if($pilihan == "1"){
                    $this->addTodoList();
                }else if ($pilihan == "2"){
                    $this->removeTodolist();
                }else if ($pilihan == "x"){
                    break;
                }else{
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Good bye". PHP_EOL;
        }
        function addTodoList():void
        {
            echo "MENAMBAH TODO" . PHP_EOL;
             
            $todo = InputHelper::input("Todo (x untuk Batal) ");

            if($todo == "x"){
                echo "Batal Menambah todo". PHP_EOL;
            }else{ 
                $this->todolistService->addTodoList($todo); 
            }
        }
        function removeTodoList():void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;
            
            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }

}