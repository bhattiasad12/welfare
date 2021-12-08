  <form action="action/add_application.php" method="POST">
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
          <label for="mobile_number" class="form-label">Mobile Number</label>
          <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
          <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
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
                  <button type='button' class='form form-control btn-danger delete' value='Delete' />Delete</button> 
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