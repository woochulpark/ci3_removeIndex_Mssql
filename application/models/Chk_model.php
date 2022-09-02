<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chk_model extends CI_Model {

    public function __construct() {
        parent::__construct();          
        $this->load->database('default',true); // Database Load
        //echo '바보';
        //var_dump($this->load->database('default',true));
    }
     


    //public function get_applicant_list($start_no, $end_no, $search, $cpage, $page_size, $sort_status, $idate1, $idate2) {
    public function get_applicant_list(){	

		$today = date("Y-m-d");
		$yesterday = date("Y-m-d", strtotime("-1 day"));

		//$idate2_t = date("Y-m-d", strtotime($idate2."+1 day"));

		//echo $idate1."/M<br>";
		//echo $idate2."/M<br>";
		//echo $idate2_t."/M<br>";


		//$search = "%".$search."%";
/*
		if($cpage==""){
			//$cpage=1;
		}

		$start_no=(floor($cpage)-1) * $page_size;
		$end_no=$page_size;
        */
        $query = $this->db->get('dbo.Board');
        //var_dump($query);
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
        }    
        return $data;
        /*  

		$sql = "select @seq := @seq + 1 AS seq, abc.* ";
		$sql.= " from  ";
		$sql.=	"(  ";		
		$sql.=	"select *, (select count(*) from applicant where (reg_date >= ?  and reg_date < ?  )   ";
		$sql.="    ) as cnt_tbl  ";

		$sql.=	"from applicant a where (reg_date >= ? and reg_date < ? )   ";

		$sql.=  " order by idx desc  limit ?, ? ";
		$sql.=	") abc "; 
		$sql.=	", (select @seq :=?) xyz  "; 



		$query = $this->db->query($sql, array( $idate1, $idate2_t, $idate1, $idate2_t, $start_no, $end_no, $start_no ));

        */
        //$this->


		//echo $sql;
		return $query;

    }
} // end class
?>