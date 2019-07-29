<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="/vendor/twbs/pagination/jquery.twbsPagination.min.js"></script> -->

    <title>Front-end Assessment</title>
  </head>
  <body class="bg-dark m-0">
    <div class="container bg-white" style="height: 100vh;">
      <h2>Add Revenue Group</h2>

      <form>
        <div class="form-group"> 
          <label>Revenue Group Title</label>
          <input class="form-control" type="text" name="groupTitle">
        </div>

        <div class="d-flex m-0 align-items-center">
          <label>If</label>
          <div class="col-lg-4 align-items-center">
            <select class="custom-select">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <label>of the below conditions are met.</label>
        </div>

        <div id="rulediv" class="row my-3">
          <div class="col-lg-3">
            <div class="d-flex m-1 align-items-center">
              <select class="custom-select">
                <option selected>Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="d-flex m-1 align-items-center">
              <select class="custom-select">
                <option selected>Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div  class="col-lg-6">
            <div class="input-group m-1 align-items-center">
              <input type="text" class="form-control" placeholder="insert parameter" aria-label="Add rule" aria-describedby="addrule_btn">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="addrule_btn" data-toggle="modal" data-target="#addrulemodal">Add rule</button>
              </div>
              <i id="delete" class="mx-3 fa fa-minus-circle" ></i>
              <i id="add" class="mx-3 fa fa-plus-circle" onclick="Clone()"></i>
            </div>
          </div>
        </div>

        <!-- add rule modal -->
        <div class="modal fade" id="addrulemodal" tabindex="-1" role="dialog" aria-labelledby="addruleTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addruleTitle">Add Rule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input class="form-control m-1" type="text" disabled="true" value="aa_bb">
                <input class="form-control m-1" type="text"disabled="true" value="is">
                <input class="form-control m-1" type="text" name="rule" placeholder="rule">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- END add rule model -->
        
        <div class="row m-0 align-items-center">
          <label>then revenue is</label>
          <div class="col-lg-4"> 
            <div class="input-group align-items-center">
              <input type="number" class="form-control" aria-label="Parameter" aria-describedby="button-addon2">
              <div class="input-group-append">
                <span class="input-group-text">%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3">
          <button class="btn" style="background: #FF8C00; color: white">Confirm</button>
          <button class="btn btn-secondary">Cancel</button>
        </div>
      </form>
      
    </div>    
    

    <!-- Optional JavaScript -->
    <!--   then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  <script type="text/javascript">

    var wrapper = $('#rulediv');

    function Clone()
    {
      wrapper.after('<div class="row my-3">'+
          '<div class="col-lg-3">'+
            '<div class="d-flex m-1 align-items-center">'+
              '<select class="custom-select">'+
                '<option selected>Select</option>'+
                '<option value="1">One</option>'+
                '<option value="2">Two</option>'+
                '<option value="3">Three</option>'+
              '</select>'+
            '</div>'+
          '</div>'+
          '<div class="col-lg-3">'+
            '<div class="d-flex m-1 align-items-center">'+
              '<select class="custom-select">'+
                '<option selected>Select</option>'+
                '<option value="1">One</option>'+
                '<option value="2">Two</option>'+
                '<option value="3">Three</option>'+
              '</select>'+
            '</div>'+
          '</div>'+
          '<div  class="col-lg-6">'+
            '<div class="input-group m-1 align-items-center">'+
              '<input type="text" class="form-control" placeholder="insert parameter" aria-label="Add rule" aria-describedby="addrule_btn">'+
              '<div class="input-group-append">'+
                '<button class="btn btn-outline-secondary" type="button" id="addrule_btn" data-toggle="modal" data-target="#addrulemodal">Add rule</button>'+
              '</div>'+
              '<i id="delete" class="mx-3 fa fa-minus-circle" ></i>'+
              '<i id="add" class="mx-3 fa fa-plus-circle" onclick="Clone()"></i>'+
            '</div>'+
          '</div>'+
        '</div>');
    }
  
  function Delete(button)
    {
      var parent = button.parentNode;
      var grand_father = parent.parentNode;
      grand_father.removeChild(parent);
    }
  </script>
</html>