<?php
$GLOBALS['smarty']->assign('shop_notice',$GLOBALS['_CFG']['shop_notice']);
$GLOBALS['smarty']->assign('HotClass',get_hot_cat_class(5));
$GLOBALS['smarty']->assign('show_marketprice', $GLOBALS['_CFG']['show_marketprice']);


/*获取热门分类*/
 function get_hot_cat_class($num)
 {
     $arr=array();
     $sql="select c.* from ".$GLOBALS['ecs']->table('category')." as c left join ".$GLOBALS['ecs']->table('cat_recommend')." as rc on c.cat_id = rc.cat_id where rc.recommend_type=3 order by c.sort_order asc, c.cat_id asc limit $num";
	 $res=$GLOBALS['db']->getAll($sql);
	 foreach($res as  $row)
	 {
	    $arr[$row['cat_id']]['id'] = $row['cat_id']; 
		$arr[$row['cat_id']]['name'] = $row['cat_name']; 
		$arr[$row['cat_id']]['url'] = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
	 }
	 return $arr;
 }

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
		$sql = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$cid." and is_show=1 order by sort_order asc, cat_id asc";
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

function get_clild_list($pid)
{
   //开始获取子分类
    $sql_sub = "select * from ".$GLOBALS['ecs']->table('category')." where parent_id=".$pid." and is_show=1 order by sort_order asc, cat_id asc";

	$subres = $GLOBALS['db']->getAll($sql_sub);
	if($subres)
	{
		foreach ($subres as $sidx => $subrow)
		{
			$children[$sidx]['id']=$subrow['cat_id'];
			$children[$sidx]['name']=$subrow['cat_name'];
			$children[$sidx]['url']=build_uri('category', array('cid' => $subrow['cat_id']), $subrow['cat_name']);
			$children[$sidx]['children'] = get_clild_list($subrow['cat_id']);
		}
	}
	else 
	{
		$children = null;
	}
			
	return $children;
}


/*获取顶级分类*/
function get_top_class_cat($nid)
{
   $sql = "select parent_id from ".$GLOBALS['ecs']->table('category')." where cat_id = ".$nid."";
   $temp_id=0;
   $pid=$GLOBALS['db']->getOne($sql);
   if($pid>0)
   {
      $temp_id=get_top_class_cat($pid);
   }
   else
   {
	  $temp_id = $nid;
   }
   return $temp_id;
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


/**
 * 通过类型与传入的ID获取广告内容
 *
 * @param string $type
 * @param int $id
 * @return string
 */					
function get_adv($type,$id)
{
	 $sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position')." as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".$type."_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
     $res = $GLOBALS['db']->getRow($sql);
	
     if($res)                        
     return  "<a href='".$res['ad_link']."' target='_blank'><img src='data/afficheimg/".$res['ad_code']."' width='".$res['ad_width']."' height='".$res['ad_height']."' /></a>";	
	 else
	 {
		return "";
	  }  
}

/*
 *获取某广告位名称的广告列表
 */
function get_cat_advlist($position)
{
   $arr=array();
   $sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table('ad_position')." as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ap.position_name='".$position."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
     $res = $GLOBALS['db']->getAll($sql);
	 foreach($res as $idx => $row)
	 {
	    $arr[$row['ad_id']]['name'] = $row['ad_name'];
		$arr[$row['ad_id']]['content'] = "<a href='".$row['ad_link']."' target='_blank'><img src='data/afficheimg/".$row['ad_code']."' width='".$row['ad_width']."' height='".$row['ad_height']."' /></a>";
	 }
	 return $arr;
}

 
?>