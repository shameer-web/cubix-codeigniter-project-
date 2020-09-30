<?php
class database
{
    public function __construct()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cubix";

        // Create connection
        $this->sql = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        mysqli_set_charset($this->sql,"utf8");
        if ($this->sql->connect_error) {
            die("Connection failed: " . $this->sql->connect_error);
        }

       
    }

    public function select_featured_products($query){
        $sql = "select * from featured_products".$query;
        $result = $this->sql->query($sql);
        return $result;
    }


    public function products($query){
        $sql = "select * from products".$query;
        $result = $this->sql->query($sql);
        

        return $result;
    }

   // start product details query


    public function product($id){
        $sql = "select * from products where product_id = ".$id;
        $result = $this->sql->query($sql);
        return $result;
    }

    public function product_images($id){
       // $sql = "select * from product_image where p_id = ".$id;
        $sql = "select * from product_image where p_id = ".$id."&& delete_status =0";
        $result = $this->sql->query($sql);

        return $result;
    }

     // end product details query


    public function special_offer($query){
        $sql = "select * from special_offers".$query;
        $result = $this->sql->query($sql);
        return $result;
    }


   
    public function gallery($query){
         $sql = "select * from gallery ".$query;
        $result = $this->sql->query($sql);
        return $result;
    }

    // start featured_product details query

     public function featured_product($id){
        $sql = "select * from featured_products where product_id = ".$id;
        $result = $this->sql->query($sql);
        return $result;
     }

      public function featured_product_images($id){
        $sql = "select * from featured_products_image where featured_id = ".$id."&& delete_status =0";
        $result = $this->sql->query($sql);

        return $result;
    }

    // end featured_product details query

    



                                                         
}
    