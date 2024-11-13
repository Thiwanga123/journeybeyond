<? 
    require_once './App/Models/AddProductModel.php';

    class addProductController{

        public function addProduct(){
            
            if(isset($_POST['submit'])){

                $productname = $_POST['productName'];
                $rate = $_POST['productPrice'];
                $category = $_POST['productCategory'];
                $quantity = $_POST['stockQuantity'];
                $desription = $_POST['productDescription'];
                $image =  $_FILES['productImage'];

            }
        }
    }


?>