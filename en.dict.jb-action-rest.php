<?php
/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @author		jbostoen
 * @version     2020-10-23 14:42:38
 *
 * Translations for jb-action-rest
 */

Dict::Add('EN US', 'English', 'English', array(

	'Class:ActionRest' => 'REST Action',
	'Class:ActionRest+' => 'A REST action which can be executed after a trigger',
	'Class:ActionRest/Attribute:name' => 'Name',
	'Class:ActionRest/Attribute:description' => 'Description',
	'Class:ActionRest/Attribute:status' => 'Status',
	'Class:ActionRest/Attribute:status/Value:enabled' => 'enabled',
	'Class:ActionRest/Attribute:status/Value:disabled' => 'disabled',
	'Class:ActionRest/Attribute:status/Value:test' => 'being tested',
	'Class:ActionRest/Attribute:trigger_list' => 'Triggers',
	'Class:ActionRest/Attribute:test_url' => 'Test URL',
	'Class:ActionRest/Attribute:production_url' => 'Production URL',
	'Class:ActionRest/Attribute:log_result' => 'Result',
	'Class:ActionRest/Attribute:log_result/Value:http_code' => 'HTTP Code',
	'Class:ActionRest/Attribute:log_result/Value:http_body' => 'HTTP Body',
	
	'Class:EventNotificationRest' => 'REST Event',
	'Class:EventNotificationRest+' => 'Trace of a REST Event',
	'Class:EventNotificationRest/date' => 'Timestamp',
	'Class:EventNotificationRest/date+' => 'Date and time on which the changes happened',
	'Class:EventNotificationRest/message' => 'Message',
	'Class:EventNotificationRest/userinfo' => 'User info',
	'Class:EventNotificationRest/action_id' => 'Action ID',
	'Class:EventNotificationRest/trigger_id' => 'Trigger ID',
	'Class:EventNotificationRest/object_id' => 'Object ID',
	'Class:EventNotificationRest/url' => 'URL',
	
));
