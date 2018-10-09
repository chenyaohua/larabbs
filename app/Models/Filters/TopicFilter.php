<?php namespace App\Models\Filters;

use EloquentFilter\ModelFilter;

class TopicFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = ['replies'=>['replyer_id']];

    // 搜索标题
    public function title($value){
        return $this->wherelike('title',$value);
    }

    // 搜索浏览数
    public function minViewCount($minCount){
       return $this->where('view_count', '>=', $minCount);
    }

    // 某个人参与回复的话题
//    public function replyer($id)
//    {
//        return $this->whereHas('replies', function($query) use($id) {
//            return $query->where('user_id', $id);
//        });
//    }

    // 搜索分类
    public function category($id)
    {
        return $this->where('category_id', $id);
    }

    public function order($value)
    {
        switch ($value) {
            case 'recent':
                $this->recent();
                break;
            default:
                $this->recentReplied();
                break;
        }
    }

    public function setup()
    {
        // 如果没有传 order，则默认使用 default
        if (!$this->input('order'))  {
            $this->push('order', 'default');
        }
    }
}
