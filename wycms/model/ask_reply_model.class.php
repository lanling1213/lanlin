<?php
/**
 * ask_reply_model.class.php ask_reply_model 类
 *
 * @author wycms <wycms@wayoulegal.net>
 * @copyright 2010-2013 WYCMS (C)
 */
defined('IN_WYCMS') or exit('No permission resources.');
if (!defined('CACHE_MODEL_PATH')) {
    define('CACHE_MODEL_PATH', CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);
}
wy_base::load_sys_class('model', '', 0);

/**
 * 咨询推荐模型数据库操作类
 *
 * @author wycms <wycms@wayoulegal.net>
 */
class ask_reply_model extends model
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        $this->db_config = wy_base::load_config('database');
        $this->db_setting = 'default';
        $this->table_name = 'ask_reply';
        parent::__construct();
    }
    
}
?>
