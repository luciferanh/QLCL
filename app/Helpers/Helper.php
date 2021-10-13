<?php

namespace App\Helpers;

class Helper
{
    public static function menu($menus,$parent_id=0,$char = ''){
        $html ='';
        foreach ($menus as $key => $menu){
            if ($menu->parent_id == $parent_id){
                $html .= '
                    <tr>
                        <th>'.$menu->id .'</th>
                        <th>'.$menu->name .'</th>
                        <th>'.self::active($menu->active) .'</th>
                        <th>'.$menu->updated_at .'</th>
                        <th>
                            <a class="btn btn-primary btn-sm" href="/admin/menus/edit/'.$menu->id.'"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm" href="#"
                                onclick="removeRow('.$menu->id.',\'/admin/menus/destroy\')"> <i class="fas fa-trash"></i></a>
                        </th>
                    </tr>
                    ';unset($menus[$key]);
                $html .= self::menu($menus,$menu->id,$char.'--');
            }
        }
        return $html;
    }
    public static function active($active ){
        return $active == '1' ? '<span class="btn btn-success btn-xs">YES</span>':'<span class="btn btn-danger btn-xs">NO</span>';
    }
}
