<?php

namespace Drupal\menu_item_add_icon;

use Drupal\Core\Menu\DefaultMenuLinkTreeManipulators;
use Drupal\Core\Access\AccessManagerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Session\AccountInterface;


class MenuItemAddIconDecorating extends DefaultMenuLinkTreeManipulators
{

	// public function __construct(AccessManagerInterface $access_manager, AccountInterface $account, EntityTypeManagerInterface $entity_type_manager)
	// {
	// parent::__construct($access_manager, $account, $entity_type_manager);
	// }
	/**
	 *
	 * {@inheritdoc}
	 * @see \Drupal\Core\Menu\DefaultMenuLinkTreeManipulators::checkAccess()
	 */
	public function checkAccess($tree)
	{
		$tree = parent::checkAccess($tree, 'decoration');
		return $tree;
	}
}