<?php

use yii\db\Migration;

class m170123_155046_add_new_data_to_menu_table extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%menu}}',['id'=>'1','parent_id'=>'','name'=>'Home','url'=>'/site/index','is_absolute_url'=>'0','option'=>'','category'=>'1','status'=>'1','order'=>'0','created_at'=>'2017-01-23 15:30:51','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'2','parent_id'=>'','name'=>'About Us','url'=>'/site/about','is_absolute_url'=>'0','option'=>'','category'=>'1','status'=>'1','order'=>'5','created_at'=>'2017-01-23 15:32:01','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'3','parent_id'=>'','name'=>'Service','url'=>'/service/index','is_absolute_url'=>'0','option'=>'','category'=>'1','status'=>'1','order'=>'10','created_at'=>'2017-01-23 15:32:57','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'4','parent_id'=>'','name'=>'Portfolio','url'=>'/portfolio/index','is_absolute_url'=>'0','option'=>'','category'=>'1','status'=>'1','order'=>'15','created_at'=>'2017-01-23 15:33:19','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'5','parent_id'=>'','name'=>'Pages','url'=>'#','is_absolute_url'=>'0','option'=>'','category'=>'1','status'=>'0','order'=>'20','created_at'=>'2017-01-23 15:34:03','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'6','parent_id'=>'','name'=>'Blog','url'=>'/blog/index','is_absolute_url'=>'0','option'=>'','category'=>'1','status'=>'1','order'=>'25','created_at'=>'2017-01-23 15:34:36','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'7','parent_id'=>'','name'=>'Dashboard','url'=>'default/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-dashboard\'];','category'=>'10','status'=>'1','order'=>'0','created_at'=>'2017-01-23 15:36:48','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'8','parent_id'=>'','name'=>'Contact','url'=>'contact/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-file-o\'];','category'=>'10','status'=>'1','order'=>'5','created_at'=>'2017-01-23 15:42:54','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'9','parent_id'=>'','name'=>'Page','url'=>'page/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-pagelines\'];','category'=>'10','status'=>'1','order'=>'10','created_at'=>'2017-01-23 15:43:47','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'10','parent_id'=>'','name'=>'Users','url'=>'user/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-users\'];','category'=>'10','status'=>'1','order'=>'15','created_at'=>'2017-01-23 15:44:22','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'12','parent_id'=>'','name'=>'Master','url'=>'#','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-folder-o\'];','category'=>'10','status'=>'1','order'=>'25','created_at'=>'2017-01-23 15:47:04','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'13','parent_id'=>'12','name'=>'Service','url'=>'service/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-server\'];','category'=>'10','status'=>'1','order'=>'0','created_at'=>'2017-01-23 15:48:11','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'14','parent_id'=>'12','name'=>'Team','url'=>'team/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-id-card\'];','category'=>'10','status'=>'1','order'=>'5','created_at'=>'2017-01-23 15:48:40','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'15','parent_id'=>'12','name'=>'Portfolio','url'=>'portfolio/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-server\'];','category'=>'10','status'=>'1','order'=>'15','created_at'=>'2017-01-23 15:49:21','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'16','parent_id'=>'12','name'=>'Gallery','url'=>'gallery/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-picture-o\'];','category'=>'10','status'=>'1','order'=>'20','created_at'=>'2017-01-23 15:49:54','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'17','parent_id'=>'12','name'=>'Client','url'=>'client/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-users\'];','category'=>'10','status'=>'1','order'=>'25','created_at'=>'2017-01-23 15:50:28','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'18','parent_id'=>'12','name'=>'Banner','url'=>'banner/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-flag\'];','category'=>'10','status'=>'1','order'=>'30','created_at'=>'2017-01-23 15:51:58','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'19','parent_id'=>'12','name'=>'Menu','url'=>'menu/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-list\'];','category'=>'10','status'=>'1','order'=>'35','created_at'=>'2017-01-23 15:52:31','updated_at'=>'2017-01-23 16:45:58','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'20','parent_id'=>'','name'=>'Blog','url'=>'#','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-folder-o\'];','category'=>'10','status'=>'1','order'=>'25','created_at'=>'2017-01-23 15:53:00','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'21','parent_id'=>'20','name'=>'Post','url'=>'blog-post/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-plus-square-o\'];','category'=>'10','status'=>'1','order'=>'0','created_at'=>'2017-01-23 16:05:09','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'23','parent_id'=>'20','name'=>'Categories','url'=>'blog-category/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-list\'];','category'=>'10','status'=>'1','order'=>'15','created_at'=>'2017-01-23 16:11:57','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'24','parent_id'=>'20','name'=>'Tag','url'=>'blog-tag/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-list\'];','category'=>'10','status'=>'1','order'=>'20','created_at'=>'2017-01-23 16:12:21','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'25','parent_id'=>'','name'=>'Subscribe','url'=>'subscribe/index','is_absolute_url'=>'0','option'=>'return [\'icon\'=>\'fa fa-users\'];','category'=>'10','status'=>'1','order'=>'20','created_at'=>'2017-01-23 16:12:21','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'26','parent_id'=>'','name'=>'About Us','url'=>'/site/about','is_absolute_url'=>'0','option'=>'','category'=>'2','status'=>'1','order'=>'20','created_at'=>'2017-01-23 16:12:21','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'27','parent_id'=>'','name'=>'Services','url'=>'/service/index','is_absolute_url'=>'0','option'=>'','category'=>'2','status'=>'1','order'=>'20','created_at'=>'2017-01-23 16:12:21','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
        $this->insert('{{%menu}}',['id'=>'28','parent_id'=>'','name'=>'Contact Us','url'=>'/site/contact','is_absolute_url'=>'0','option'=>'','category'=>'1','status'=>'1','order'=>'30','created_at'=>'2017-01-23 16:12:21','updated_at'=>'','created_by'=>'1','updated_by'=>'1']);
    }

    public function safeDown()
    {
        $this->truncateTable('{{%menu}}');
    }
}
