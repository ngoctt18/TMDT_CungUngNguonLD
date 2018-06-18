<?php
  include_once('app/init.php');
  include_once('views/_header.php');

  /*if(isset($_GET['act']) && $_GET['act'] == 'edit') {
    // Thực hiện edit ở đây
    if(empty($_GET['cont-id']) || $_GET['cont-id'] == null){
      header('location: contact.php');
    } else {
      $id = $_GET['cont-id'];
      $contact = getUContactByID($id);      
    }
    if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message']) && !empty($_POST['status'])){

      ContactEdit($_GET['cont-id'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'], $_POST['status']);

      header('location: contact.php');
      exit();
    }
    // Chuyển đến file edit
    include_once('views/_contact_edit.php');

  }*/
  if(isset($_GET['act']) && $_GET['act'] == 'delete') {
    // Thực hiện xóa ở đây
      $id = 0;
        if (isset($_GET['order-id']) && $_GET['order-id'] != '' && $_GET['order-id'] > 0){
            $id = $_GET['order-id'];

            OrderDelete($id);
        }
        header('Location: order.php');
        exit();

  } elseif(isset($_GET['act']) && $_GET['act'] == 'add') {
    // Thực hiện thêm ở đây
    if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message']) && !empty($_POST['status'])){
      
      ContactCreate($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'], $_POST['status']);
      
        header('Location: contact.php');
        exit();
    }
    // Chuyển đến file edit
    include_once('views/_contact_create.php');
  } else {
    // Show posts index
    if(isset($_POST['btnSubmit'])) {
        if (!empty($_POST['keyword'])){
            $o = OrderSearch($_POST['keyword']);
            /*echo "<pre>";
            print_r($posts);
            die();*/
        }else{
            //echo "string";
            //die();
            $o = getAllOrder();
        }
    }else{
        $o = getAllOrder();
    }
    
    //var_dump($posts);die;
    include_once('views/_order_index.php');
  }
?>

<?php
  include_once('views/_footer.php');
?>