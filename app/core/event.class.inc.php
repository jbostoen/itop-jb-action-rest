<?php

/**
 * Definition of EventNotificationRest
 *
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 */

	/**
	 * Class EventNotificationRest. An event notification resulting from an ActionRest (action notification).
	 */
	class EventNotificationRest extends EventNotification {
		
		/**
		 * @inheritDoc
		 */
		public static function Init() {
			
			$aParams = [
				'category' => 'core/cmdb,view_in_gui',
				'key_type' => 'autoincrement',
				'name_attcode' => '',
				'state_attcode' => '',
				'reconc_keys' => [],
				'db_table' => 'priv_event_notification_rest',
				'db_key_field' => 'id',
				'db_finalclass_field' => '',
				'display_template' => '',
				'order_by_default' => ['date' => false]
			];
			
			MetaModel::Init_Params($aParams);
			MetaModel::Init_InheritAttributes();
			MetaModel::Init_AddAttribute(new AttributeUrl('url', ['allowed_values' => null, 'sql' => 'url', 'default_value' => null, 'is_null_allowed' => true, 'depends_on' => [], 'target' => '_blank']));
			
			// Display lists
			MetaModel::Init_SetZListItems('details', ['date', 'userinfo', 'url']); // Attributes to be displayed for the complete details
			MetaModel::Init_SetZListItems('list', ['date', 'url']); // Attributes to be displayed for a list

			// Search criteria. Copied from EventNotificationEmail, but 'name' is not defined.
			// MetaModel::Init_SetZListItems('standard_search', array('name')); // Criteria of the std search form
			// MetaModel::Init_SetZListItems('advanced_search', array('name')); // Criteria of the advanced search form
		}

	}
