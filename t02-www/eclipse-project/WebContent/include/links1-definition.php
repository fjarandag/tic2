<?php 
abstract class MenuItem {
    // Atributos básicos utilizables en múltiples tipos
    public $id = "";
    public $caption = "";
    //public $icon = "";
    
   abstract public function doPrint();
}

class MenuLista extends MenuItem {
    public $children = array();
    public function doPrint() {
?><div class="links"><div class="caption"><?php echo $this->caption?></div><ul class="menuList" id="<?php echo $this->id?>">
<?php
        foreach ($this->children as $child) {
            ?><li><?php $child->doPrint(); ?></li>
<?php
        } 
?>
</ul></div><!-- menulista -->
<?php
    }
} // class MenuList
/* Crear el nodo inicial de una lista, todavía hay que rellenarlo. */
function createMenuLista($nombre, $id) {
    $retVal = new MenuLista();
    $retVal->id = $id;
    $retVal->caption = $nombre;
    return $retVal;
}

class MenuEnlace extends MenuItem {
    public $destino = "foo.html";
    public $tooltip = "";
    public function doPrint() {
?><a href="<?php echo $this->destino ?>" title="<?php echo $this->tooltip ?>"><?php echo $this->caption ?></a>
<?php
    }
} // class MenuEnlace
/* Crear el nodo inicial de una lista, todavía hay que rellenarlo. */
function createMenuEnlace($caption, $destino, $tooltip) {
    $retVal = new MenuEnlace();
    $retVal->caption = $caption;
    $retVal->destino = $destino;
    $retVal->tooltip = $tooltip;
    return $retVal;
}

?>