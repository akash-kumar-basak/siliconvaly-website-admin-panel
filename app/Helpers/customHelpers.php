<?php
use App\Models\backend\Category1Model;
use App\Models\backend\Category2Model;

function CategoryName($tablename, $id){
    if($tablename == "category_one"){
        $categoryName = Category1Model::find($id)->name;
    }
    if($tablename == "category_two"){
        $categoryName = Category2Model::find($id)->name;
    }
    return $categoryName;
}


function category1Name($id){
    $category1Id = Category2Model::find($id)->category_one_id;
    $name = Category1Model::find($category1Id)->name;
    return $name;
}

function dangerousGoodsChecke($checkboxValue, $checkedDataValue){
    if ($checkboxValue == $checkedDataValue){
        return 'checked';
    }
    else{
        return '';
    }
}
