<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Settings module
 *
 * @author  PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Settings
 */
class Module_Settings extends Module
{

	public $version = '1.0.0';

	public function info()
	{
		return array(
			'name' => array(
				'cn' => '网站设定',
			),
			'description' => array(
				'cn' => '网站管理者可更新的重要网站设定。例如：网站名称、公司介绍、电子邮件等。'
			),
			'frontend' => false,
			'backend' => true,
			'skip_xss' => true,
			'menu' => 'settings',
		);
	}

	public function admin_menu(&$menu)
	{
		unset($menu['lang:cp:nav_settings']);

		$menu['lang:cp:nav_settings'] = 'admin/settings';

		add_admin_menu_place('lang:cp:nav_settings', 7);
	}

	public function install()
	{
		$this->dbforge->drop_table('settings');

		$tables = array(
			'settings' => array(
				'slug' => array('type' => 'VARCHAR', 'constraint' => 30, 'primary' => true, 'unique' => true, 'key' => 'index_slug'),
				'title' => array('type' => 'VARCHAR', 'constraint' => 100,),
				'description' => array('type' => 'TEXT',),
				'type' => array('type' => 'set', 'constraint' => array('text', 'textarea', 'password', 'select', 'select-multiple', 'radio', 'checkbox'),),
				'default' => array('type' => 'TEXT',),
				'value' => array('type' => 'TEXT',),
				'options' => array('type' => 'VARCHAR', 'constraint' => 255,),
				'is_required' => array('type' => 'INT', 'constraint' => 1,),
				'is_gui' => array('type' => 'INT', 'constraint' => 1,),
				'module' => array('type' => 'VARCHAR', 'constraint' => 50,),
				'order' => array('type' => 'INT', 'constraint' => 10, 'default' => 0,),
			),
		);

		if ( ! $this->install_tables($tables))
		{
			return false;
		}
		// Regarding ordering: any additions to this table can have an order
		// value the same as a sibling in the same section. For example if you
		// add to the Email tab give it a value in the range of 983 to 975.
		// Third-party modules should use lower numbers or 0.
		$settings = array(
			'site_name' => array(
				'title' => '网站名称',
				'description' => '网站的名称将作为网站的标题。',
				'type' => 'text',
				'default' => '这里填写你网站的名称',
				'value' => '',
				'options' => '',
				'is_required' => 1,
				'is_gui' => 1,
				'module' => '',
				'order' => 1000,
			),
			'meta_topic' => array(
				'title' => 'Meta主题',
				'description' => '两个或三个词描述您的公司/网站。',
				'type' => 'text',
				'default' => '',
				'value' => '',
				'options' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => '',
				'order' => 998,
			),
			'frontend_enabled' => array(
				'title' => '网站状态',
				'description' => '当你想维护网站事，使用这个选项可以将网站打开或关闭。',
				'type' => 'radio',
				'default' => true,
				'value' => '',
				'options' => '1=Open|0=Closed',
				'is_required' => 1,
				'is_gui' => 1,
				'module' => '',
				'order' => 988,
			),
			'unavailable_message' => array(
				'title' => '网站关闭提示语',
				'description' => '当网站关闭或有重大问题时，这段信息将会展示给网站的浏览者。',
				'type' => 'textarea',
				'default' => '对不起,这个网站是目前不可用。',
				'value' => '',
				'options' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => '',
				'order' => 987,
			)
		);

		// Lets add the settings for this module.
		foreach ($settings as $slug => $setting_info)
		{
			$setting_info['slug'] = $slug;
			if ( ! $this->db->insert('settings', $setting_info))
			{
				return false;
			}
		}

		return true;

	}

	public function uninstall()
	{
		// This is a core module, lets keep it around.
		return false;
	}

	public function upgrade($old_version)
	{
		return true;
	}

}
