<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'organization', 'designation', 'email', 'mobile','urn_no','password'];
    function category_list(){
        $post_data = $_POST;
        $order_column = array("id", "name", "organization", "designation", "email", "mobile");
        
        $this->table = "members";
        $this->select("id", "name", "organization", "designation", "email", "mobile");
        // $where = array("status!="=>-1);
        // $this->where($where);
        //$search = $order = "";
        if(isset($post_data["search"]["value"])){
            $this->where("( name like '%{$post_data["search"]["value"]}%' )");
        }
        
        if(isset($post_data["order"]))
        {
            $this->orderBy($order_column[$post_data['order']['0']['column']]." ".$post_data['order']['0']['dir']);
        }
        else{
            $this->orderBy("id desc");
        }
        
        
        if($post_data["length"] != -1)
        {
            
            if($post_data['start'] > 0){
                $this->limit($post_data['length'], $post_data['start']);
            }
            else{
                $this->limit($post_data['length']);
            }
            
        }
        //return $this->get()->getResult();
        $q = $this->get();
        return $q !== FALSE ? $q->getResult() : array();
        
    }
}

