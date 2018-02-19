<?php

class ImageExtendedConverter implements ConverterInterface
{
    /**
     * The options we use for html to markdown
     *
     * @var array
     */

    public function toJson(\DOMElement $node)
    {
        $html = $node->ownerDocument->saveXML($node);

        return array(
            'type' => 'text',
            'data' => array( 
                'text' => ' ' . $this->htmlToMarkdown($html)
            )
        );
    }

    public function toHtml(array $data)
    {
		if (($data['source'] == "") || ($data['source'] == "http://")){
            //return $data['file']['url'];
            $style=$data['style_property'];
            /*switch ($style) {
                case 'circle':
                   $img_style="border-radius: 50% ;";
                    break;
               default:
                   $img_style="";
                    break;  
            }*/
            

        return '<div class="page-builder-container"><img class="img-responsive" style= "'. $style .'" src="'.$data['file']['url'].'" alt="' . $data['caption'] . '" />' . "\n</div>";
		} else {
        return '<div class="page-builder-container"><a style= "'. $style .'" href="' . $data['source'] . '" target="_blank"><img class="img-responsive" src="'.$data['file']['url'].'" alt="' . $data['caption'] . '" /></a>' . "\n</div>";
		}
    }
}
