 <?php
/**
 * 通过传入参数的url判断是否为目录分类，从而获取子菜单
 *
 * @param string $url
 */
function get_subcate_byurl($url)
{
	$rs = strpos($url,"category");
	if($rs!==false)
	{
		preg_match("/\d+/i",$url,$matches);
		$cid = $matches[0];
		$cat_arr = array();
		$sql = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$cid." and is_show=1";
		$res = $GLOBALS['db']->getAll($sql);
		
		foreach($res as $idx => $row)
		{
			$cat_arr[$idx]['id']   = $row['cat_id'];
            $cat_arr[$idx]['name'] = $row['cat_name'];
            $cat_arr[$idx]['url']  = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
			$cat_arr[$idx]['children'] = get_clild_list($row['cat_id']);
		}

		return $cat_arr;
	}
	else 
	{
		return false;
	}
}

/*
 * 热门分类树
 * @param int pid
 * @param int rec
 */
function get_hot_cat_tree($pid = 0, $rec=3)
{
     $arr=array();
     $sql="select c.* from ".$GLOBALS['ecs']->table('category')." as c left join ".$GLOBALS['ecs']->table('cat_recommend')." as rc on c.cat_id = rc.cat_id where rc.recommend_type=$rec and c.parent_id=$pid order by c.sort_order asc, c.cat_id asc";
	 $res=$GLOBALS['db']->getAll($sql);
	 foreach($res as  $row)
	 {
	    $arr[$row['cat_id']]['id']    = $row['cat_id']; 
		$arr[$row['cat_id']]['name']  = $row['cat_name']; 
		$arr[$row['cat_id']]['url']   = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
		$arr[$row['cat_id']]['chlid'] = get_hot_cat_tree($row['cat_id'],$rec);
	 }
	 return $arr;
}



function get_clild_list($pid)
{
   //开始获取子分类
    $sql_sub = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$pid." and is_show=1";

	$subres = $GLOBALS['db']->getAll($sql_sub);
	if($subres)
	{
		foreach ($subres as $sidx => $subrow)
		{
			$children[$sidx]['id']=$subrow['cat_id'];
			$children[$sidx]['name']=$subrow['cat_name'];
			$children[$sidx]['url']=build_uri('category', array('cid' => $subrow['cat_id']), $subrow['cat_name']);
		}
	}
	else 
	{
		$children = null;
	}
			
	return $children;
}



?>