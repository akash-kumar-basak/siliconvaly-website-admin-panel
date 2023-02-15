function createProduct() {

    let productCategories = document.getElementById("product_categories").value;
    let productName = document.getElementById("product_name").value;
    let brand = document.getElementById("brand").value;
    let video_url = document.getElementById("video_url").value;
    let short_description = document.getElementById("short_description").value;
    let long_description = document.getElementById("long_description").value;
    let box_inside = document.getElementById("box_inside").value;
    let warranty_type = document.getElementById("warranty_type").value;
    let warranty_period = document.getElementById("warranty_period").value;
    let warranty_policy = document.getElementById("warranty_policy").value;
    let package_weight = document.getElementById("package_weight").value;
    let package_Dimensions = document.getElementById("package_Dimensions").value;
    let productPrice = document.getElementById("product_price").value;
    let regularProductPrice = document.getElementById("regular_price").value;
    let productQuantity = document.getElementById("product_quantity").value;
    let productImageOne = document.getElementById("productImageOne").files[0];
    let productImageTwo = document.getElementById("productImageTwo").files[0];
    let productImageThree = document.getElementById("productImageThree").files[0];
    //checkbox value define and checked value collect
    let checkBoxCheckedValue = document.querySelector('input[type="checkbox"]:checked').parentElement.textContent;




    let url = "/product_add";
    let allData = new FormData();
    allData.append("ProductCategories", productCategories);
    allData.append("ProductName", productName);
    allData.append("Brand", brand);
    allData.append("VideoUrl", video_url);
    allData.append("ShortDescription", short_description);
    allData.append("LongDescription", long_description);
    allData.append("BoxInside", box_inside);
    allData.append("WarrantyType", warranty_type);
    allData.append("WarrantyPeriod", warranty_period);
    allData.append("WarrantyPolicy", warranty_policy);
    allData.append("PackageWeight", package_weight);
    allData.append("PackageDimensions", package_Dimensions);
    allData.append("ProductPrice", productPrice);
    allData.append("RegularProductPrice", regularProductPrice);
    allData.append("ProductQuantity", productQuantity);
    allData.append("DangerousGoods", checkBoxCheckedValue);
    allData.append("ProductImage1", productImageOne);
    allData.append("ProductImage2", productImageTwo);
    allData.append("ProductImage3", productImageThree);

    let configuration = {headers:{"content-type" : "multipart/form-data"},
        onUploadProgress: function (progressEvent) {
            let uploadProgressPercent = Math.round((progressEvent.loaded*100)/progressEvent.total)
            document.getElementById("uploadPercent").innerHTML = uploadProgressPercent+'%';
        }
    };


    axios.post(url, allData, configuration).then(
        function (response) {
            location.reload();
        }
    ).catch(
        function (error) {
            alert("Error...try again");
            location.reload();
        }
    )
}
