<?php
class panier{

	private $DB;

	public function __construct($DB){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}
		$this->DB = $DB;

		if(isset($_GET['delPanier'])){
			$this->del($_GET['delPanier']);
		}
		if(isset($_POST['panier']['quantité'])){
			$this->recalculer();
		}
	}

    public function ajouter($product_id){
        if(isset($_SESSION['panier'][$product_id])){
            $_SESSION['panier'][$product_id]++;
        }else{
            $_SESSION['panier'][$product_id] = 1;
        }
    }

    public function del($product_id){
        unset($_SESSION['panier'][$product_id]);
    }

	public function recalculer(){
		foreach($_SESSION['panier'] as $product_id => $quantity){
			if(isset($_POST['panier']['quantité'][$product_id])){
				$_SESSION['panier'][$product_id] = $_POST['panier']['quantité'][$product_id];
			}
		}
	}

	public function total(){
		$total = 0;
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$products = array();
		}else{
			$products = $this->DB->query('SELECT id, prix FROM article WHERE id IN ('.implode(',',$ids).')');
		}
		foreach( $products as $product ) {
			$total += $product->prix * $_SESSION['panier'][$product->id];
		}
		return $total;
	}



}