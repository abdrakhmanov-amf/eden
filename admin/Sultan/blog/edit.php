<?php
include "../../../core/DB.php";
 if(isset($_POST['desc'])) {
    

    
    $f = $_FILES['img'];

    if($f['size']>10){
        $exp = explode('.', $f['name']);
        $format = end($exp);
        $img_name = mt_rand(10000,100000).time().'.'.$format;
        move_uploaded_file($f['tmp_name'] , '../../../img/news/' .$img_name);

        $file = ",`img`='$img_name'";
    }
    else{
        $file ="";
    }
 



    $news_tags = implode(',',$_POST['tag']);

    $edit = mysqli_query($c, "UPDATE `blog` SET `titile`='$_POST[title]',`description`='$_POST[desc]',`category`='$_POST[category]',`author`='$_POST[author]',`date`='$_POST[date]',`tag`='$news_tags',`status`='$_POST[status]' $file WHERE id='$_GET[edit]' ");

    if($edit){
        header("Location: blog.php");
    }else{
        
    }
}


$news_data = DB::Query("SELECT * FROM `blog` WHERE `id` = '$_GET[edit]'");

$news = DB::Assoc($news_data);

 ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../../panel/includes/head.php" ?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php include "../../panel/includes/header.php" ?>
        <?php include "../../panel/includes/settings.php" ?>
        <div class="app-main">

            <?php include "../../panel/includes/sidebar.php" ?>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit"> </i>
                                </div>
                                <div>Добавить новость

                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip"
                                    data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <a href="create.php" color="white" type="btn"
                                        class="btn btn-outline-primary">Добавить новость</a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Controls Types</h5>



                                    <form  class="" method="POST" enctype="multipart/form-data">
                                        <div class="position-relative form-group"><label for="exampleFile"
                                                class="">Image</label><input name="img" id="exampleFile" accept="image/*" type="file"
                                                class="form-control-file" value="<?=$news['img']?>">
                                            
                                        </div>
                                        <div class="position-relative form-group"><label for="exampleEmail"
                                                class="">Title</label><input name="title" id="exampleEmail"
                                                type="text" class="form-control" value="<?=$news['title']?>">
                                        </div>
                                        <div class="position-relative form-group"><label for="exampleText" class="">
                                            Description
                                        </label><textarea name="desc" id="exampleText"
                                                class="form-control" ><?=$news['desc']?></textarea>
                                        </div>
                                        <div class="position-relative form-group"><label for="examplePassword"
                                                class="">Category</label>
                                                <select name="category" id=""
                                                class="form-control"  >
                                                <?php
                                                    $category = DB::Query("SELECT * FROM `category`");
                                                    while ($category = DB::Assoc($category)) {
                                                        $select = '';

                                                        foreach ($category as $key => $value) {
                                                            if($value==$category['name']) {
                                                                $select .= 'selected';
                                                            }
                                                        }
                                                         echo " <option value='$category[name]' $select> $category[name]</option>";
                                                    }
                                                   
                                                ?>
                                            </select>
                                        </div>
                                        <div class="position-relative form-group"><label for="examplePassword"
                                                class="">Author</label><input name="author" 
                                                type="text" class="form-control" value="<?=$news['author']?>">
                                        </div>
                                        <div class="position-relative form-group"><label for="examplePassword"
                                                class="">Date</label><br>
                                                <input type="date"name="date" value="<?=$news['date']?>">
                                        </div> 
                                        
                                       
                                        
                                        <div class="position-relative form-group">
                                            <label for="exampleSelect"
                                                class="">Tag</label>
                                                <select name="tag[]" id=""
                                                class="form-control" multiple >
                                                <?php
                                                    $tags = DB::Query("SELECT * FROM `tag`");
                                                    while ($tag = DB::Assoc($tags)) {
                                                        $select = '';
                                                        $tag_split = explode(',',$news['tag']);
                                                        foreach ($tag_split as $key => $value) {
                                                            if($value==$tag['name']) {
                                                                $select .= 'selected';
                                                            }
                                                        }
                                                         echo " <option value='$tag[name]' $select> $tag[name]</option>";
                                                    }
                                                   
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <div class="position-relative form-group"><label for="exampleSelect"
                                                class="">Select</label><select name="status" id="exampleSelect"
                                                class="form-control" >
                                                <option value="<?=$news['status']?>"><?=$news['status']?></option>
                                                <option>0</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="mt-1 btn btn-primary" >Редактировать</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <?php include "../../panel/includes/footer.php" ?>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <?php include "../../panel/includes/js.php" ?>
</body>

</html>