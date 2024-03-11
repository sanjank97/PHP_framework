<?php 
  namespace PHP_framework\Model\model;
  use PHP_framework\Config\Connection;
  class Model
  {
      public static function connection()
      {     
          return Connection::MysqlConnection();
      }
      public static function create($data,$table)
      {
            if($data!=''){
                foreach($data as $key=>$val){
                    $fieldArr[]=$key;
                    $valueArr[]=$val;
                }	
                $field=implode(",",$fieldArr);
                $value=implode("','",$valueArr);
                $value="'".$value."'";			
                $sql="insert into $table ($field) values($value) ";
                $result=self::connection()->query($sql);
                if($result)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
      }
      public static function checkUser($data,$table)
      {
        $email=$data['email'];
        $password=$data['password'];
        if($email!="" && $password!="")
        {
            $sql="select * from $table where email='$email' AND password='$password'";
            $result=self::connection()->query($sql);
            if($result->num_rows >0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
       
      }
      public static function showAll($table)
      {
        $sql="select * from $table";
        $result=self::connection()->query($sql);
        return $result;
      }
   
	public static function getData($table,$field='*',$condition_arr='',$distinct="",$order_by_field='',$order_by_type='desc',$limit=''){
		$sql="select $distinct $field from $table ";
		if($condition_arr!=''){
			$sql.=' where ';
			$c=count($condition_arr);	
			$i=1;
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val' and ";
				}
				$i++;
			}
		}
		if($order_by_field!=''){
			$sql.=" order by $order_by_field $order_by_type ";
		}
		
		if($limit!=''){
			$sql.=" limit $limit ";
		}
        //return $sql;
		//die($sql);
		$result=self::connection()->query($sql);       
		if($result->num_rows>0){
			$arr=array();
			while($row=$result->fetch_assoc()){
				$arr[]=$row;
			}
			return $arr;
		}else{
			return 0;
		}
	}

    public static function update($table,$request)
    {
        if($request!=''){
    
            $id=$request['id'];
            $sql="update $table set ";
            $c=count($request);	
            $i=1;
            foreach($request as $key=>$val){
                if($i==$c){
                    $sql.="$key='$val'";
                }else{
                    $sql.="$key='$val', ";
                }
                $i++;
            }
            $sql.=" where id='$id' ";
            $result=self::connection()->query($sql);
            if($result)
            {
                return true;
            }  
            else
            {
                return false;
            }
         }
    }
    public static function delete($table,$condition_arr){
		if($condition_arr!=''){
			$sql="delete from $table where ";
			$c=count($condition_arr);	
			$i=1;
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val' and ";
				}
				$i++;
			}
            // return $sql;
			$result=self::connection()->query($sql);
            if($result)
            {
                return true;
            }
            else
            {
                return false; 
            }
		}
	}



  }
?>