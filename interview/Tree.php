<?php
class Node{
    public $value;
    public $left;
    public $right;
}
//先序遍历 根节点 ---> 左子树 ---> 右子树
function preorder($root){
    $stack=array();
    array_push($stack,$root);
    while(!empty($stack)){
        $center_node=array_pop($stack);
        echo $center_node->value.' ';//先输出根节点
        if(isset($center_node->right)){
            array_push($stack,$center_node->right);//压入左子树
        }
        if(isset($center_node->left)){
            array_push($stack,$center_node->left);
        }
    }
}
function mypre($root){
    if($root->value){
        echo $root->value," ";
    }
    if($root->left){
        mypre($root->left);
    }
    if($root->right){
        mypre($root->right);
    }
}
//中序遍历，左子树---> 根节点 ---> 右子树
function inorder($root){
    $stack = array();
    $center_node = $root;
    while (!empty($stack) || $center_node != null) {
        while ($center_node != null) {
            array_push($stack, $center_node);
            $center_node = $center_node->left;
        }

        $center_node = array_pop($stack);
        echo $center_node->value . " ";

        $center_node = $center_node->right;
    }
}
//后序遍历，左子树 ---> 右子树 ---> 根节点
function tailorder($root){
    $stack=array();
    $outstack=array();
    array_push($stack,$root);
    while(!empty($stack)){
        $center_node=array_pop($stack);
        array_push($outstack,$center_node);//最先压入根节点，最后输出
        if(isset($center_node->left)){
            array_push($stack,$center_node->left);
        }
        if(isset($center_node->right)){
            array_push($stack,$center_node->right);
        }
    }

    while(!empty($outstack)){
        $center_node=array_pop($outstack);
        echo $center_node->value.' ';
    }

}

function mypinorder($root){
    if($root->left){
        mypinorder($root->left);
    }
    if($root->value){
        echo $root->value," ";
    }
    if($root->right){
        mypinorder($root->right);
    }
}

function mypdesc($root){
    if($root->left){
        mypdesc($root->left);
    }
    if($root->right){
        mypdesc($root->right);
    }
    if($root->value){
        echo $root->value," ";
    }

}
function cengxu($root){
    $arr=[];
    array_push($arr,$root);
    while($arr){
        echo $root->value,' ';

        if($root->left){
            array_push($arr,$root->left);
        }
        if($root->right){
            array_push($arr,$root->right);
        }
        array_shift($arr);
        $root = reset($arr);
    }
}

$a=new Node();
$b=new Node();
$c=new Node();
$d=new Node();
$e=new Node();
$f=new Node();
$g=new Node();
$a->value='A';
$b->value='B';
$c->value='C';
$d->value='D';
$e->value='E';
$f->value='F';
$g->value='G';
$h->value='H';
$a->left=$b;
$a->right=$c;
$b->left=$d;
$c->left=$e;
$c->right=$f;
$e->left=$g;
$g->right=$h;
//var_dump(json_decode(json_encode($a),true));die;

preorder($a);//A B D C E F
echo "\n";
mypre($a);
echo "\n";
inorder($a);//D B A E C F
echo "\n";
mypinorder($a);
echo "\n";
tailorder($a);//D B E F C A
echo "\n";
mypdesc($a);//D B E F C A

echo "\n";
cengxu($a);