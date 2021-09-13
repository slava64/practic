<?php

class Animal {
    /**
     * 
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $productPerfomanceList;
    
    /**
     * 
     * @var string
     */
    protected $title = "";
    
    public function __construct(int $id) {
        $this->id = $id;
    }

    public function addProductPerfomance(ProductPerfomance $productPerfomance) {
        $this->productPerfomanceList[] = $productPerfomance;

        return $this;
    }

    public function getProductPerfomanceList() {
        return $this->productPerfomanceList;
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
    
    public function __toString(): string {
        return sprintf(
            "%s #%u",
            $this->getTitle(),
            $this->getId()
        );
    }


}
