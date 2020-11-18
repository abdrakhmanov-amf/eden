<?php
// session_start();
// if(!isset($_SESSION['login_admin']) && !isset($_SESSION['password_admin'])) {
//     header("Location: form.php");
// }
 include "../../../core/DB.php";



 ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../../panel/includes/head.php" ?>


<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php include "../../panel/includes/header.php" ?>
        <?php include "../../panel/includes/settings.php" ?>
        <div class="app-main">

            <?php include "../../panel/includes/sidebar.php";
                                if(isset($_GET['delete'])) {
                                    DB::Query("DELETE FROM `blog` WHERE `id`='$_GET[delete]'");
                                } ?>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit"> </i>
                                </div>
                                <div>Страница блога
                                    <div class="page-title-subheading">Здесь вы можете редактировать, добавлять или
                                        удалять новости вашего сайта
                                    </div>
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

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <?php
                        include "news-card.php";
                        ?>



                    </div>

                </div>
                <?php include "../../panel/includes/footer.php" ?>
            </div>
        </div>
    </div>




    <?php include "../../panel/includes/js.php" ?>

</body>

</html>