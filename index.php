<html>

<head>
  <title>Implement jQuery select2 multiple select plugin in PHP - Clue Mediator</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <h3>Implement jQuery select2 multiple select plugin in PHP - <a href="https://www.cluemediator.com/" target="_blank">Clue Mediator</a></h3>
    <br/>
    <div class="col-md-4">
      <form method="POST">
        <div class="form-group">
          <label>Category:</label>
          <select class="category form-control" name="category[]" multiple>
            <option value="laravel">Laravel</option>
            <option value="jquery">Jquery</option>
            <option value="php">PHP</option>
            <option value="react">React</option>
            <option value="codeigniter">CodeIgniter</option>
            <option value="vuejs">Vue JS</option>
            <option value="bootstrap">Bootstrap</option>
            <option value="angularjs">Angular JS</option>
          </select>
        </div>
        <div class="form-group">
          <button class="btn btn-primary" id="saveData">Submit</button>
        </div>
        <div id="result">
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {
      $('.category').select2();
    });

    $('body').on('click', '#saveData', function (e) {
      e.preventDefault();
      var category = $('.category').val();
      $.ajax({
        url: "getData.php",
        method: "POST",
        type: "json",
        data: { category: category },
        success: function (data) {
          $('#result').html(data);
        }
      })
    });
  </script>

</body>

</html>