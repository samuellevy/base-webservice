<?php
namespace App\View\Helper;

use Cake\View\Helper;


class ComponentHelper extends Helper {
  public function organizeBanners($content){
    
    $doc=new \DOMDocument();
    $doc->loadHTML($content);
    $xml=simplexml_import_dom($doc); // just to make xpath more simple
    $images=$xml->xpath('//img');

    // foreach ($images as $img) {
    //   echo $img['src'] . ' ' . $img['alt'] . ' ' . $img['title'];
    // }
    
    return $images;
  }
}
?>



