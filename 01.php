<?php
class Person {
    // 下面是人的成员属性
    var $name;      // 人的名子
    var $sex;       // 人的性别
    var $age;       // 人的年龄

    // 定义一个构造方法参数为属性姓名$name、性别$sex和年龄$age进行赋值
    function __construct($name, $sex, $age) {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    // 这个人可以说话的方法, 说出自己的属性
    function say() {
        echo "我的名子叫：" . $this->name . " 性别：" . $this->sex . " 我的年龄是：" . $this->age;
    }
}
class Student extends Person {
    var $school;    // 学生所在学校的属性

    // 这个学生学习的方法
    function study() {
        echo "我的名子叫：" . $this->name . " 我正在" . $this->school . "学习";
    }

    // 这个学性可以说话的方法, 说出自己所有的属性，覆盖了父类的同名方法
    function say() {

        // 使用父类的"类名::"来调用父类中被覆盖的方法；
        // Person::say();

        // 或者使用"parent::"的方试来调用父类中被覆盖的方法；
        parent::say();

        // 加上一点自己的功能
        echo "我的年龄是：" . $this->age . " 我在" . $this->school . "上学";
    }
}

?>


<?php

    echo '123ABC';
?>
