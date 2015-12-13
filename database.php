<?php 
include("adodb/adodb.inc.php");	
include("adodb/adodb-exceptions.inc.php");	
class Database
{
	public $db = null;
	function __construct() 
	{		
		try
		{
			$this->db = &ADONewConnection('mysql');
			$this->db->Connect('localhost', 'root', '','bpjs');
		}
		catch(Exception $e)
		{
			die($this->db->ErrorMsg());
		}
		
	}

	public function getConnection()
	{
		return $this->db;
	}

	public function create($table_name,$bind,$values)
	{
		$q_create = "INSERT INTO ".$table_name." (".$bind.") ";
		$q_create .= "VALUES (";
		$num = count($values);
		$i=0;
		foreach ($values as $v) 
		{
			if(++$i === $num)
			{
				$q_create .= "'" . $v . "'";
			}
			else
			{
				$q_create .= "'". $v . "'" . "," ;
			}
		}
		$q_create .=")";
		$new_obj = $this->db->Execute($q_create);
		if ($new_obj === false) 
		{
		    return false;
		}
		else
		{
			return true;
		}	
	}

	public function delete_data($table_name,$bind,$value)
	{
		$q_delete = "DELETE FROM ".$table_name." WHERE " . $bind . "='$value'" ;
		$delete_obj = $this->db->Execute($q_delete);
		if ($delete_obj === false) 
		{
		    return false;
		}
		else
		{
			return true;
		}	
	}

	public function update($table,$bind,$values,$condition)
	{
		$num_bind = substr_count($bind, ",") + 1;
		
		$start = 0;
		$ar_bind = array();
		$data_bind = array();
		for($i=0;$i<$num_bind;$i++)
		{
			if (strpos($bind,',') !== false) 
			{
				$num_word = strlen($bind);
				$coma = strpos($bind, ",");
				$length =  $coma + 1;
				$ar_bind[$i] = substr($bind, 0,$length-1);
				$data_bind[$ar_bind[$i]]=$values[$i];
				$start = $coma+1;
				$bind=substr($bind, $start);
			}
			else
			{
				$ar_bind[$i] = $bind;
				$data_bind[$ar_bind[$i]]=$values[$i];
			}
		}
		
		$tmp_update = "UPDATE ". $table ." SET ";
		$j=0;		
		foreach ($data_bind as $dbind) {
			$tmp_update .=  $ar_bind[$j] . " = " . "'". $dbind . "'" . ",";
			$j++;
		}
		$q_update = substr($tmp_update, 0,-1);
		$q_update .= " WHERE " . $condition;
		
		$update_obj = $this->db->Execute($q_update);
		if ($update_obj === false) 
		{
		    return false;
		}
		else
		{
			return true;
		}

	}

	public function check($table_name,$col,$value)
	{
		$q_check = "SELECT * FROM ".$table_name." WHERE " . $col . "='" . $value . "'" ;
		$check_obj = $this->db->Execute($q_check);
		if ($check_obj === false) 
		{
		    return false;
		}
		else
		{
			if($check_obj->RecordCount()>0)
			{
				return true;
			}
		}
	}

	public function retrieve($table_name,$column="*",$condition="")
	{
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
		$return_data= array();
		$q_select = "SELECT ";
		if($column=="*")
		{
			$q_select .= "*";
		}
		else
		{
			for($i=0;$i<count($column);$i++)
			{

				if($i==count($column)-1)
				{
					$q_select .= $column[$i];
				}
				else
				{				
					$q_select .= $column[$i];
					$q_select .= ',';
				}
			}	
		}
		
		$q_select .= " FROM ".$table_name;
		if($condition!=null||$condition!="")
		{
			$q_select .= " WHERE ".$condition;
		}

		$select_obj = $this->db->Execute($q_select);
		$index = 0;
		
		while(!$select_obj->EOF)
		{
			if($column=='*')
			{
				$select_obj;
			}
			else
			{
				for($in_col=0;$in_col<count($column);$in_col++)
	            {
	            	$return_data[$index][$column[$in_col]] = $select_obj->fields[$in_col];
	            }
			}
					
            $index++;
			$select_obj->MoveNext();
		}
		
		return $return_data;
	}
	
}

?>