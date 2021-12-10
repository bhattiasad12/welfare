  <?php
  require_once('config.php');
  require_once('functions.php');

  //print_r($_SESSION);

  LogMsg(" ------ Here, in Applicaton screen ---- userid :".$_SESSION['user_id']."--, user_name:".$_SESSION['user_name']);


  //echo ini_get('display_errors');
  //ini_set("display_errors","Off")

  //echo date("Y-m-d H:i:s");
  //phpinfo();
  //die();
  ?>
  <html>
  <head>
    <style>
      @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
    
    @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
    .fa-2x {
      font-size: 2em;
    }
    .fa {
      position: relative;
      display: table-cell;
      width: 60px;
      height: 36px;
      text-align: center;
      vertical-align: middle;
      font-size:20px;
    }


    .main-menu:hover,nav.main-menu.expanded {
      width:250px;
      overflow:visible;
    }

    .main-menu {
      background:#212121;
      border-right:1px solid #e5e5e5;
      position:absolute;
      top:0;
      bottom:0;
      height:100%;
      left:0;
      width:60px;
      overflow:hidden;
      -webkit-transition:width .05s linear;
      transition:width .05s linear;
      -webkit-transform:translateZ(0) scale(1,1);
      z-index:1000;
    }

    .main-menu>ul {
      margin:7px 0;
    }

    .main-menu li {
      position:relative;
      display:block;
      width:250px;
    }

    .main-menu li>a {
      position:relative;
      display:table;
      border-collapse:collapse;
      border-spacing:0;
      color:#999;
      font-family: arial;
      font-size: 14px;
      text-decoration:none;
      -webkit-transform:translateZ(0) scale(1,1);
      -webkit-transition:all .1s linear;
      transition:all .1s linear;

    }

    .main-menu .nav-icon {
      position:relative;
      display:table-cell;
      width:60px;
      height:36px;
      text-align:center;
      vertical-align:middle;
      font-size:18px;
    }

    .main-menu .nav-text {
      position:relative;
      display:table-cell;
      vertical-align:middle;
      width:190px;
      font-family: 'Titillium Web', sans-serif;
    }

    .main-menu>ul.logout {
      position:absolute;
      left:0;
      bottom:0;
    }

    .no-touch .scrollable.hover {
      overflow-y:hidden;
    }

    .no-touch .scrollable.hover:hover {
      overflow-y:auto;
      overflow:visible;
    }

    a:hover,a:focus {
      text-decoration:none;
    }

    nav {
      -webkit-user-select:none;
      -moz-user-select:none;
      -ms-user-select:none;
      -o-user-select:none;
      user-select:none;
    }

    nav ul,nav li {
      outline:0;
      margin:0;
      padding:0;
    }
    .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
      color:#fff;
      background-color:#5fa2db;
    }
    .area {
      float: left;
      background: #e2e2e2;
      width: 100%;
      height: 100%;
    }
    @font-face {
      font-family: 'Titillium Web';
      font-style: normal;
      font-weight: 300;
      src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
    }

  </style> 

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>

  <div class='container'>
    <?php

          //if($user_type == 1)
    require_once("treecontrol.php");

    ?>
    <form action="action/add_application.php" method="POST" enctype="multipart/form-data">
      <div class='row'>

        <?php 

          if(isset($_SESSION['message']) && $_SESSION['message'] != ""){
              echo $_SESSION['message'];
              unset($_SESSION['message']);
          }
        ?>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Applicant Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">NIC</label>
          <input type="text" class="form-control" id="nic" name="nic" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="parent_name" class="form-label">Parent Name</label>
          <input type="text" class="form-control" id="parent_name" name="parent_name" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
          <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Document upload</label><br>
          <input type="file" name="userFile[]" id="userFile[]" multiple>
        </div>

        <div class="mb-3">
          <table class='table'>
            <thead>
              <tr>
                <td colspan='4'>
                  <input type='button' value='Add Record' onclick="AddRecord()" class='btn btn-primary pull-right' /> 
                </td>
              </tr>
              <tr>
                <td>Name</td>
                <td>Age</td>
                <td>Education</td>
                <td>Relation</td>
              </tr>
            </thead>
            <tbody id='tablebody'>

              <tr id='firstrow'>
                <td>
                  <input type='text' id='dependent_name[]' name='dependent_name[]' value='' onkeyup="CheckEnter(this,event)"/>
                </td>
                <td>
                  <input type='text' id='dependent_age[]' name='dependent_age[]' onkeyup="CheckEnter(this,event)"/>
                </td>
                <td>
                  <input type='text' id='dependent_education[]' name='dependent_education[]'  onkeyup="CheckEnter(this,event)"/>
                </td>
                <td>
                  <button type='button' class='form form-control btn-danger' value='Delete' />Delete</button> 
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"></label>
          <input type='submit' value='submit' class='form form-control btn-primary'>
        </div>


      </div>
    </form>
  </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

  function AddRecord(){


    tr = document.getElementById('firstrow');

    tr = $('#firstrow').eq(0).clone();
    tr.find('input').val("");
    $('#tablebody').append(tr);
    tr.find('input').eq(0).focus();
  }


  function CheckEnter(obj,event){

          ///alert(event.keyCode);

          if(event.keyCode == 13){

            //debugger;
            if($(obj).parent().nextAll().find('input').length== 0)
            {
              AddRecord();
            }  

            $(obj).parent().nextAll().find('input').eq(0).focus();


          }
          //alert(obj)
        }
      </script>
      </html>