<?php
interface Renderable{
    public function render(){
        echo "Render";
    }
}

class HtmlElement implements Renderable{
    public $element
    
    
}
?>