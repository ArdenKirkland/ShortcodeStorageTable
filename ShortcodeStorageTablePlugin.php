<?php

class ShortcodeStorageTablePlugin extends Omeka_Plugin_AbstractPlugin
{

    public function setUp()
    {
        add_shortcode('storagetable', array('ShortcodeStorageTablePlugin', 'storagetable'));
        parent::setUp();
    }

     /**
     * Build HTML for the display of a table of storage locations and basic metadata
     * @param array $args
     * @param Zend_View $view
     * @return string HTML to display
     */
    public static function storagetable($args, $view)
    {
        static $id_suffix = 0;
       
        if (isset($args['ids'])) {
            $params['range'] = $args['ids'];
        }

        if (isset($args['tags'])) {
            $params['tags'] = $args['tags'];
        }

        if (isset($args['sort'])) {
            $params['sort_field'] = $args['sort'];
        }

        if (isset($args['order'])) {
            $params['sort_dir'] = $args['order'];
        }
        
        if (isset($args['collection'])) {
            $params['collection'] = $args['collection'];
        }

        if (isset($args['num'])) {
            $limit = $args['num'];
        } else {
            $limit = 10;
        }

		$params['hasImage'] = 1;
        $items = get_records('Item', $params, $limit);

        $html = $view->partial('storage_table.php', array('items' => $items, 'id_suffix' => $id_suffix, 'params' => $args));
        $id_suffix++;
        return $html;
    }
}
