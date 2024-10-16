
    <?php
    include 'classes/session.php';
class Product {
    public $id;
    public $name;
    public $price;
    public $description;

    public function __construct($id, $name, $price, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
    
    public function displayProduct() {
        echo "<div >
                <h2>{$this->name}</h2>
                <p>{$this->description}</p>
                <p>Price: {$this->price}</p>
                <a href='cart.php?add={$this->id}'>Add to Cart</a>
              </div>
                ";
    }
}
?>
    
