<?php
class Bags {
  private $name;
  private $collection;
  private $color;
  private $type;
  private $price;
  private $sku;
  
  function set_name($name) {
    $this->name = $name;
  }
  function set_collection($collection) {
    $this->collection = $collection;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function set_type($type) {
    $this->type = $type;
  }
  function set_price($price) {
    $this->price = $price;
  }
  function set_sku($sku) {
    $this->sku = $sku;
  }
  function get_name() {
    return $this->name;
  }
  function get_collection() {
    return $this->collection;
  }
  function get_color() {
    return $this->color;
  }
  function get_type() {
    return $this->type;
  }
  function get_price() {
    return $this->email;
  }
  function get_sku() {
    return $this->email;
  }
}
?>