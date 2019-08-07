### 把 json 转化为 php 的数组字符串

示例
```
        $in = '{"user":{"name":"yang","age":10}}';

        $out = JsonToArrStr::main($json);
        
        you will get "['user' => ['name' => 'yang','age' => '10',],]";
        
```
