<?php
/**
 * User: 木鱼
 * Date: 2020/3/9 7:46
 * Ps:
 */

namespace QQRobot\components;


class Dictionary{

    public static function iDonKnow(){
        $iDonKnowOneArr=[
            "没明白啥意思?",
            "啥?你再说一遍?",
            "啥子意思哦?我有点没搞懂",
            "还是有点不明白",
            "你这个有点复杂.",
            "我好好想一下?",
        ];

        return $iDonKnowOneArr[array_rand($iDonKnowOneArr)];
    }


    public static function fuck(){
        $fuck=[
            "sb","傻逼","cnm","弱智","智障","SB","狗东西","日你妈","操你妈","操尼玛","草你妈","贱人","爬","逗逼","去死"
        ];

        return $fuck;
    }

    public static function returnFuck(){
        $returnFuck=[
            "昨日你家发大水，你妈变成水乌龟，你爸变成鸟，满天飞",
            "你这个傻13就像南方的农作物，一年三熟，从来都不带歇气儿的",
            "难道幼儿园老师没教你拉屎要用后面么？",
            "你根本不能叫王小二，因为你太二了！",
            "闲着没事带根吊，你妈看见直叫好——一不小心没避好——弄出你这大傻吊——！",
            "一脚踹不出你屎来，算你拉的干净",
            "你被打~胎后是怎么从垃圾桶里逃出来的？",
            "你他妈的是狗娘养的，要不然怎么是一副狗样",
            "我很佩服你这样的智商还能这样健康的有活力的生活在这世上！",
            "无论你再怎么骂我，我都不会生气，人干嘛要和一个连狗都不如的东西生气呢。",
            "尼玛的B都能开出泰坦尼克号了，一个浪就把她撞沉了!~",
            "跟哥装逼，就是贷款也把你稳妥了。",
            "我看不出你和狗有什么不一样，你看起来是有点人样！",
            "你是个大傻逼吧，要不然怎么会像狗一样在这乱叫唤呢！",
            "我当你是一条狗，还真的是看得起你！",
            "祝你女朋友永远都是充气的。",
            "我知道你这种畜生嘴里吐不出象牙来。",
            "白痴可以当你的老师，智障都可以教你说人话",
            "看你那小样，参加残奥会都嫌你太残疾了.",
            "不要白费心思了，劳资是不会跟你这个傻X二货蠢垃圾计较的，我又不脑残！",
            "再整容也是这副讨人厌的模样，你还是赶快投胎重新做人吧！",
            "人长得丑点不要紧，不要到处找抽。",
            "别说你开车不合格，你长得都违章了。",
            "你的智商和喜马拉雅山的氧气一样，稀薄。",
            "自从得了神经病你整个人都精神多了！",
            "我劝你还是在家好好的呆着，街上是不允许宠物乱跑的。",
            "你长得曲折离奇颠沛流离，让我不禁感叹你爸妈的神奇。",
            "你别和我说话，因为我听不懂，在别人的眼中看来，我和一条猪在吵架是一件很愚蠢的事。",
            "我不想骂人，只想骂你。"
        ];
        return $returnFuck[array_rand($returnFuck)];

    }

    public static function job(){
        $job=[
            "找工作",'招聘','招人'
        ];

        return $job;
    }


    public static function jfAndLevel($jf){

        $levelString='';
        $level=[

            '黑铁'=>[0,100],
            '青铜'=>[101,200],
            '白银'=>[201,300],
            '黄金'=>[301,400],
            '白金'=>[401,500],
            '钻石'=>[501,600],
            '大师'=>[601,700],
            '嘴强王者'=>[1000,100000]
        ];

        foreach($level  as $k=>$v){
            if($jf>= $v[0] && $jf<=$v[1]){
                $levelString=$k;break;
            }
        }

        return $levelString;
    }
}