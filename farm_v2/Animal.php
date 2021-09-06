<?php

class Animal {
    /**
     * 
     * @var int
     */
    protected $id;
    
    /**
     * 
     * @var int
     */
    protected $perfomanceMin = 0;
    
    /**
     * 
     * @var int
     */
    protected $perfomanceMax = 0;

    /**
     *
     * @var array
     */
    protected $productList;
    
    /**
     * 
     * @var string
     */
    protected $title = "";
    
    public function __construct(Product $product, int $id) {
        $this->addProduct($product);
        $this->id = $id;
    }

    public function addProduct(Product $product) {
        $this->productList[] = $product;

        return $this;
    }
    
    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }
        
    public function getId(): int {
        return $this->id;
    }
    
    public function produce(): array {
        $list = [];
        foreach ($this->productList as $product) {
            $list[$product->produce()] += $product->produce();
        }

        return $list;
    }
    
    /*public function getPerfomanceMin(): int {
        return $this->perfomanceMin;
    }

    public function getPerfomanceMax(): int {
        return $this->perfomanceMax;
    }*/

    public function getProductList(): array {
        return $this->productList;
    }
    
    public function __toString(): string {
        return sprintf(
            "%s #%u",
            $this->getTitle(),
            $this->getId()
        );
    }
}
