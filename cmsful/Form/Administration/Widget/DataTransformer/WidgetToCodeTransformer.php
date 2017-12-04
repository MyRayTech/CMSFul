<?php
namespace CMS\Form\Administration\Widget\DataTransformer;


use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;


/**
 * WidgetToCodeTransformer
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class WidgetToCodeTransformer implements DataTransformerInterface
{
    public function reverseTransform($data) {
        dump('reverse');
        dump($data);
        return json_encode($data);
    }

    public function transform($data) {
        if (is_null($data)) {
            return '';
        }
        dump($data);
        return $data;
    }

}
