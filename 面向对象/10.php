<?php
abstract class Query{
    abstract protected function record(array $data);  
    public function select()
    {

        $this->record(['name'=>'王泽','age'=>21,'mobile'=>87544418]);
    }
}
class Model extends Query
{
    protected $field=[];
    public function all()
    {
       $this->select();
       return $this->field;
    }
    protected function record(array $data)
    {
        $this->field=$data;
    }
    protected function _mobile()
    {
        return substr($this->field['mobile'],0,8).'***' ;
    }
    public function __get($name)
    {
        if(method_exists($this,'_'.$name)){
            return call_user_func_array([$this.'_'.$name],[]);
        }
        if(isset($this->field[$name])){
            return $this->field[$name];
        }
        throw new Exception('参数错误');
    }
    public function __set($name,$value){
        if(isset($this->field[$name])){
            return $this->field[$name]=$value;
        }else{
            throw new Exception('参数错误');
        }
    }

}  
try {
    $user=new Model;
    $user->all();
    $user->name='王泽';
    $user->mobile='12345';
    echo $user->mobile;
}catch(Exception $e){
    echo $e->getMessage();
}

$user=new Model;
print_r($user->all());