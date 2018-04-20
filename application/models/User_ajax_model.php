<?php
class  User_ajax_model  extends  CI_Model  {
	public  $user_data= [
					['id'=> 1, 'name'=>'Armen','lastname'=>'Karapetyan','img'=>'img_avatar1.png', 'password'=>'1234',"activ"=>false],
					['id'=> 2, 'name'=>'Artak','lastname'=>'Manukyan','img'=>'img_avatar1.png', 'password'=>'4276',"activ"=>true],
					['id'=> 3, 'name'=>'Anahit','lastname'=>'Xachatryan','img'=>'img_avatar1.png', 'password'=>'5555',"activ"=>false],
					['id'=> 4, 'name'=>'Karen','lastname'=>'Hovhannisyan','img'=>'img_avatar1.png', 'password'=>'6666',"activ"=>true],
					['id'=> 5, 'name'=>'Vardan','lastname'=>'Margaryan','img'=>'img_avatar1.png', 'password'=>'7777',"activ"=>false] 
				];
	

	public function getUser($name, $pwd){

		
		foreach ($this->user_data as $key => $value) {
			if($value['name']==$name){
				if($value['password']==$pwd){
					return $value;
				}
			}
		}
		
		return false;
	}
	public function getActivUser(){
		$activ_user=[];
		foreach ($this->user_data as $key => $value) {
			if($value['activ']==true){
				$activ_user[]=$value;

			}

		}
		
		if(empty($activ_user)){
			return false;
		}
		else
		{
			return $activ_user;
		}
	}
}
