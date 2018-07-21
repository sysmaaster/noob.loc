<?php

namespace Cms\Model\MenuItem;

use Engine\Model;

class MenuItemRepository extends Model
{
    const NEW_MENU_ITEM_NAME = 'New item';

    /**
     * @param int $menuId
     * @param array $params
     * @return mixed
     */
    public function getItems($menuId, $params = [])
    {
        $sql = $this->queryBuilder
            ->select()
            ->from('menu_item')
            ->where('menu_id', $menuId)
            ->orderBy('position', 'ASC')
            ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }

	public function add($params = [])
	{
		if (empty($params)) {
			return 0;
		}

		$menuItem = new MenuItem;
		$menuItem->setMenuId($params['menu_id']);
		$menuItem->setName(self::NEW_MENU_ITEM_NAME);
		$menuItem = $menuItem->save();

		return $menuItem;
	}

	public function sort($params)
	{
		$items = isset($params['data']) ? json_decode($params['data']) : [];

		if (!empty($items) and isset($items[0])) {
			foreach ($items as $position => $item) {
				print_r($item);

			}
		}
	}



}