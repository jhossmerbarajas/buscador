<?php

    class Search extends Conexion {

        public function getConsult() {

            try{

                $query = $this->connect()->prepare('SELECT * FROM search');
                $query->execute();

                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                return $row;

            }catch(PDOException $e){
                echo 'Error en la consulta. ' . $e->getMessage();
            }

        }


        public function getSearch($search) {

            try{

               $query = $this->connect()->prepare("SELECT * FROM search WHERE nameUser LIKE '%$search%'
                                                                        OR product LIKE '%$search%'
                                                                        OR pais LIKE '%$search%' ");
               $query->execute();

               $row = $query->fetchAll(PDO::FETCH_ASSOC);
               return $row;

            }catch(PDOException $e){
                echo 'Error en la consulta. ' . $e->getMessage();
            }

        }

    }

?>