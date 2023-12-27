<?php include 'app/views/userViews/headerTop.php'; ?>
<?php include 'app/views/userViews/headerBottom.php';
include "app/views/userViews/navbars.php"; ?>
<style>
  .main {
    display: flex;
    justify-content: left;
  }

  .leftList {
    width: 25%;
    padding: 30px 50px;
    display: inline-block;
  }

  .projectsDiv ul,
  .membersDiv ul {
    background: #fff;
    border-radius: 0px 0px 5px 5px;
    border: 2px solid #bbb8b8;
  }

  .membersDiv {
    margin-top: 20px;
  }

  #imagesDiv img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    cursor: pointer;
  }

  #titleLeftList {
    color: #fff;
    list-style: none;
    padding: 15px 10px;
    background: #0db3f5;
    text-align: center;
    border-radius: 5px 5px 0px 0px;
    font-weight: bold;
  }

  .projectsDiv ul a {
    text-decoration: none;
    color: #242121;
  }

  .projectsDiv ul a li,
  .membersDiv ul .imagesMembers {
    list-style: none;
    padding: 15px 10px;
    border-top: 1px solid #d6d4d4;
    text-align: center;
  }

  .projectsDiv ul a li:hover,
  .membersDiv ul li:hover {
    background: #f4f4f5;
  }

  .membersDiv ul li {
    list-style: none;
    padding: 15px 10px;
    border-top: 1px solid #d6d4d4;
  }

  .membersDiv ul li .username {
    list-style: none;
    padding: 15px 10px;
    border-top: 1px solid #d6d4d4;
  }

  .imageDiv {
    display: none;
  }

  .viewImageDiv {
    display: block;
    background: #383838;
    color: #fff;
    width: auto;
    height: auto;
    border-radius: 10px;
    padding: 10px;
    font-weight: bold;
  }


  .content {
    width: 70%;
    margin: 30px 0;
    display: inline-block;
  }

  .projectDiv {
    display: inline-block;
    width: 90%;
    background: #0db3f5;
    color: #fff;
    border-radius: 5px;
    height: auto;
    padding: 10px;
  }

  .projectContent {
    background: #fff;
    color: #000;
    padding: 20px;
    border-radius: 0 0 4px 4px;
    height: auto;
    border: 2px solid #bbb8b8;
  }

  .actionsDiv a {
    text-decoration: none;
  }

  .actionBtn {
    background: #fff;
    border: 1.5px solid #8f8c8c;
    padding: 7px;
    border-radius: 5px;
    color: #464444;
    outline: none;
  }

  .actionBtn:hover {
    background: #f1f0f0;
    cursor: pointer;
  }

  .actionBtn:active {
    background: #ebebeb;
    cursor: pointer;
  }

  .progressLine {
    margin: 10px 10px 20px 10px;
  }

  #progress-bar {
    max-width: 85%;
    height: 10px;
    border: 2px solid #bbb8b8;
    border-radius: 10px;
    display: inline-block;
  }

  .progressIncomplete {
    background-color: #ff0000;
  }

  .progress0 {
    background-color: #ff381e;
  }

  .progress20 {
    background-color: #f8750a;
  }

  .progress40 {
    background-color: #faa330;
  }

  .progress60 {
    background-color: #fadc30;
  }

  .progress80 {
    background-color: #b9f80a;
  }

  .progress100 {
    background-color: #00ff37;
  }

  .percent {
    float: right;
    font-size: 19px;
    font-weight: bold;
    color: #363232;
  }

  .lineDiv {
    background: #bbb8b8;
    height: 1.4px;
    margin: 10px 0;
  }

  .progress-title {
    color: #4d4848;
    font-size: 17px;
  }

  #statementText {
    display: inline-block;
    font-weight: bold;
  }

  .CompletedReturn {
    color: #1ad42a;
  }

  .IncompleteReturn {
    color: #ff381e;
  }

  .delivery-date {
    color: #4d4848;
    font-size: 17px;
    margin: 8px 0;
  }

  .delivery-date i {
    margin: 0 8px;
  }

  .task {
    margin: 5px 10px;
    padding: 10px;
  }

  .task-title {
    font-weight: bold;
    color: #4d4848;
    margin: 10px 0;
  }

  .task-desc {
    color: #4d4848;
    margin: 13px 0;
  }

  .task a {
    text-decoration: none;
  }

  .fileDiv {
    border: 2px solid #bbb8b8;
    border-radius: 5px;
    margin: 5px 0;
    padding: 5px 15px 5px 0;
  }

  .fileDiv:hover,
  .fileDiv:active {
    background: #f1efef;
    cursor: pointer;
  }

  .fileDiv p {
    display: inline-block;
    font-size: 17px;
    color: #4d4848;
  }

  .fileDiv p i {
    margin: 0 10px;
  }

  .completBtns {
    margin: 10px 0;
    color: #4d4848;
  }

  .completBtns button {
    padding: 2px 20px;
    color: #fff;
    border: none;
    background: #1ad42a;
    font-size: 18px;
    border-radius: 5px;
    outline: none;
  }

  .completBtns button:hover {
    background: #13a81f;
    cursor: pointer;
  }

  .formDiv {
    margin: 5px 10px;
    padding: 10px;
  }

  .inputDiv {
    margin: 5px;
  }

  #task-title,
  #task-description {
    border: 2px solid #bbb8b8;
    padding: 5px;
    border-radius: 5px;
    font-size: 17px;
    outline: none;
    width: 70%;
  }

  #btnSendTask,
  .btnAddTask {
    border: none;
    padding: 5px;
    border-radius: 5px;
    font-size: 17px;
    outline: none;
    width: 20%;
    background: #0db3f5;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
  }

  #btnSendTask:hover,
  .btnAddTask:hover {
    background: #0098d4;
  }

  #btnSendTask:active,
  .btnAddTask:active {
    background: #0087bd;
  }

  input[type='file']#idinputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }

  label[for="idinputfile"] {
    font-size: 22px;
    color: #626262;
    border: 2px solid #bbb8b8;
    background-color: #fff;
    cursor: pointer;
    border-radius: 5px;
    text-transform: uppercase;
    text-align: center;
    display: inline-block;
    padding: 1px 30px;
    margin: 4px 5px 10px 0;
  }

  label[for="idinputfile"]:hover {
    border: 2px solid #00A1E0;
  }

  label[for="idinputfile"]:active {
    border: 2px solid #00A1E0;
  }

  .hrForm {
    visibility: hidden;
    height: 0;
    margin: 0;
  }

  #errorLine {
    font-weight: bold;
    color: #ff0000;
    margin: 10px 5px;
  }

  #divToSpan {
    width: 70%;
    display: flex;
  }

  #fileInfo {
    margin-right: 5px;
  }

  #btnCancelFile {
    margin-left: auto;
    background: #ff0000;
    margin-bottom: 5px;
    width: 10%;
    border: none;
    padding: 5px;
    border-radius: 5px;
    font-size: 17px;
    outline: none;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
  }

  #btnCancelFile:hover {
    background: #e60606;
  }

  #btnCancelFile:active {
    background: #c01111;
  }


  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    border-radius: 10px;
    width: 80%;
    max-width: 600px;
    /* Could be more or less, depending on screen size */
  }

  .closeIcon {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .closeIcon:hover,
  .closeIcon:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-content_text {
    text-align: center;
    margin-bottom: 20px;
  }

  .modal-content_link {
    text-decoration: none;
    width: auto;
    color: #fff;
    background: #ff0000;
    padding: 10px;
    font-weight: bold;
    font-size: 21px;
    border-radius: 10px;
    box-shadow: 0 0 6px solid rgba(0, 0, 0, 0.5);
    cursor: pointer;
  }

  .modal-content_btn {
    text-decoration: none;
    width: auto;
    color: #858585;
    background: #eeeded;
    padding: 10px;
    font-weight: bold;
    font-size: 21px;
    border-radius: 10px;
    border: 2px solid #b1b1b1;
    box-shadow: 0 0 6px solid rgba(0, 0, 0, 0.5);
    cursor: pointer;
  }

  .modal-content_link:hover {
    background: #e20707;
  }

  .modal-content_btn:hover {
    background: #d1d1d1;
  }




  @media (max-width:670px) {
    .main {
      display: block;
    }

    .leftList {
      width: 90%;
      padding: 15px 0;
      display: block;
      margin: 0 auto;
    }

    .content {
      width: 100%;
      display: block;
      margin: 0 auto;
    }

    .projectDiv {
      width: 90%;
      display: block;
      margin: 0 auto;
      padding: 15px 0 0 0;
      margin-bottom: 10px;
    }

    .projectDiv h2 {
      font-size: 18px;
      text-align: center;
    }

    #titleLeftList {
      font-size: 18px;
    }

    .progress-bar {
      max-width: 77%;
    }

    #task-title,
    #task-description {
      width: 100%;
    }

    .inputDiv button {
      width: 104%;
    }

    #divToSpan {
      width: 100%;
    }
  }

  @media (max-width:370px) {
    .progress-bar {
      max-width: 70%;
    }
  }
</style>
<div class="main">

  <div class="leftList">

    <div class="projectsDiv">
      <p id="titleLeftList">My Projects</p>
      <ul>
        <?php foreach ($this->selectAll as $row) { ?>
          <a href="<?php echo constant('URL') . 'select/view/' . $row['ID']; ?>">
            <li>
              <?php echo $row['TITLE']; ?></li>
          </a>
        <?php } ?>
      </ul>
    </div>

  </div>

  <div class="content">
    <div class="projectDiv">
      <?php
      if (!empty($this->selectProject)) {
        foreach ($this->selectProject as $row) {
          $percent = $row['PERCENT'];
          if ($row['STATUS'] == 'Incomplete') {
            $colorLine = 'progressIncomplete';
          } else {
            if ($percent < 20) {
              $colorLine = 'progress0';
            } else if ($percent < 40 && $percent >= 20) {
              $colorLine = 'progress20';
            } else if ($percent < 60 && $percent >= 40) {
              $colorLine = 'progress40';
            } else if ($percent < 80 && $percent >= 60) {
              $colorLine = 'progress60';
            } else if ($percent < 100 && $percent >= 80) {
              $colorLine = 'progress80';
            } else if ($percent == 100) {
              $colorLine = 'progress100';
            }
          }
      ?>
          <h2><?php echo $row['TITLE']; ?></h2>
          <div class="projectContent">
            <div class="actionsDiv">
              <a href="<?php echo constant('URL') . 'dashboard'; ?>">
                <button class="actionBtn">
                  Dashboard <i class="far fa-folder"></i>
                </button>
              </a>
              <a href="<?php echo constant('URL') . 'select/viewTasks/' . $row['ID']; ?>">
                <button class="actionBtn">
                  See All <i class="fas fa-list-alt"></i>
                </button>
              </a>
              <a href="<?php echo constant('URL') . 'newProject'; ?>">
                <button class="actionBtn">
                  Add Project <i class="fas fa-folder-plus"></i>
                </button>
              </a>
              <button class="actionBtn" id='btnModalDelete'>
                Delete Project <i class="fas fa-trash-alt"></i>
              </button>
              <a href="<?php echo constant('URL') . 'select/completedProject/' . $row['ID']; ?>">
                <button class="actionBtn">
                  Completed <i class="fas fa-check"></i>
                </button>
              </a>
              <a href="#form">
                <button class="actionBtn" id="formTaskBtn">
                  Add Task <i class="fas fa-plus"></i>
                </button>
              </a>
            </div>

            <div class="lineDiv"></div>
            <p class="progress-title">Your progress:</p>
            <div class="progressLine">
              <div id="progress-bar" class='<?php echo $colorLine; ?>' style='width: <?php echo $percent; ?>%;'></div>
              <div class="percent"><?php echo $percent; ?>%</div>
            </div>
            <div class="progress-title">Statement:
              <p id="statementText" class='<?php echo $row['STATUS']; ?>Return'>
                <?php echo $row['STATUS']; ?></p>
            </div>
            <div class="lineDiv"></div>

            <div class="tasks" id="tasksDiv">
              <p class="delivery-date">Delivery date:
                <i class="fas fa-calendar-alt"></i>
                <?php echo $row['DELIVDATE']; ?>
              </p>
              <br>
              <h3>Pending tasks: </h3>
              <?php
              if (!empty($this->selectTasks)) {
                foreach ($this->selectTasks as $task) {
              ?>
                  <div class="task">
                    <div class="lineDiv"></div>
                    <p class="task-title"><?php echo $task['TITLE']; ?></p>
                    <p class="task-desc"><?php echo $task['DESCRIPTION']; ?></p>

                    <?php
                    $filesRows = $this->model->selectFilesAll($task['ID']);
                    if (!empty($filesRows)) {
                      foreach ($filesRows as $file) { ?>
                        <a href="<?php echo constant('URL') .
                                    'iframe/view/' . $file['IDPROJECT'] . '/'
                                    . $file['IDTASK'] . '/' . $file['ID']; ?>">
                          <div class="fileDiv">
                            <p id="fileIcon"></p>
                            <p id="fileInfo"></p>
                            <p id="fileName"><?php echo $file['FILE']; ?></p>
                          </div><?php
                              }
                            } ?>
                        </a>
                        <p class="completBtns">Completed:
                          <a href='<?php echo constant('URL') . 'select/completedTask/' . $task['IDPROJECT'] . '/' . $task['ID']; ?>'>
                            <button><i class="fas fa-check"></i>
                            </button>
                          </a>
                        </p>
                        <a href="<?php echo constant('URL') . 'addFiles/view/' . $task['IDPROJECT'] . '/' . $task['ID']; ?>">
                          <button class="btnAddTask">Add File</button>
                        </a>
                  </div>
              <?php
                }
              } else {
                echo '<h2>No results!</h2>';
              }
              ?>
            </div>

            <div id="formTasksDiv">
              <div class="lineDiv"></div>
              <h3>Add Task:</h3>
              <form class="formDiv" method="post" enctype="multipart/form-data" id="taskForm">
                <div class="inputDiv">
                  <input type="text" id="task-title" placeholder="Title">
                </div>

                <div class="inputDiv">
                  <textarea id="task-description" placeholder="Description"></textarea>
                </div>

                <div class="inputDiv">
                  <input type="button" id="btnSendTask" value="send">
                </div>

                <p id="errorLine"></p>
                <input type="hidden" id="idProject" value="<?php echo $row['ID']; ?>">
              </form>
            </div>

            <hr id="form" class="hrForm">

            <div id="myModal" class="modal">
              <div class="modal-content">
                <span class="close closeIcon">&times;</span>
                <h1 class="modal-content_text">
                  Delete <?php echo $row['TITLE']; ?>
                </h1>
                <h2 class="modal-content_text">
                  Are you sure?
                </h2>
                <a class="modal-content_link" href="<?php echo constant('URL') . 'select/delete/' . $row['ID']; ?>">Delete</a>
                <button class="close modal-content_btn">Cancel</button>
              </div>
            </div>

          </div>

      <?php
        }
      } else {
        echo '<h2> No results! </h2>';
      } ?>
    </div>
  </div>

</div>


</body>
<script src="public/js/users/select-project1.js"></script>
<script src="public/js/users/navbars.js"></script>

</html>