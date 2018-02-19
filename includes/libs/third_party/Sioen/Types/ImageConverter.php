<?php


class ImageConverter extends BaseConverter implements ConverterInterface
{
    public function toJson(\DOMElement $node)
    {
        return array(
            'type' => 'image',
            'data' => array(
                'file' => array(
                    'url' => $node->getAttribute('src')
                )
            )
        );
    }

    public function toHtml(array $data)
    {
		if (($data['source'] == "") || ($data['source'] == "http://")){
            //return $data['file']['url'];
            $style=$data['imgstyle'];
            switch ($style) {
                case 'circle':
                   $img_style="border-radius: 50% ;";
                    break;
               default:
                   $img_style="";
                    break;  
            }
		}	
        return '<img class="img-responsive" style= "'.$img_style. '" src="' . $data['file']['url'] . '" />' . "\n";
    }
}
